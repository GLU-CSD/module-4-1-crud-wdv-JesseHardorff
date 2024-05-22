<?php
include('../core/header.php');

// Controleer of de databaseverbinding is ingesteld
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Variabelen voor de ingevoerde waarden
$id = '';
$blog_bericht = '';
$blog_maker = '';

// Query om bestaande gegevens op te halen als de ID is opgegeven
if (isset($_GET['id'])) {
    $current_id = $_GET['id'];

    $sql = "SELECT id, blog_bericht, blog_maker FROM blogs WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('i', $current_id);
    $stmt->execute();
    $stmt->bind_result($id, $blog_bericht, $blog_maker);
    $stmt->fetch();
    $stmt->close();
}

// Als het formulier is ingediend, gebruik dan de ingevoerde waarden
if (isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
    $blog_bericht = htmlspecialchars($_POST['blog_bericht']);
    $blog_maker = htmlspecialchars($_POST['blog_maker']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>EditBlog</title>
</head>
<body>
    <form method="post">
        <div class="mb-3">
            <label for="numberInput" class="form-label">ID</label>
            <input type="number" name="id" class="form-control" id="numberInput" placeholder="ID" value="<?php echo $id; ?>" readonly required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">Blog Bericht</label>
            <input type="text" name="blog_bericht" class="form-control" id="blog_bericht" placeholder="Bericht" value="<?php echo $blog_bericht; ?>" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">Blog Maker</label>
            <input type="text" name="blog_maker" class="form-control" id="blog_maker" placeholder="Naam" value="<?php echo $blog_maker; ?>" required>
        </div>
        <button type="submit" name="submit" class="button4">Change</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    if ($id === false || $id <= 0 || $id >= 100) {
        echo "Ongeldige ID. Voer een positief heel getal onder de 100 in.";
    } else {
        // Controleer of het ID al bestaat, behalve voor de huidige blog
        $sql = "SELECT COUNT(*) FROM blogs WHERE id = ? AND id <> ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('ii', $id, $_GET['id']);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count > 0) {
            echo "Dit ID is al in gebruik door een andere blog.";
        } else if (!preg_match("/^[a-zA-Z0-9 ]*$/", $blog_bericht)) {
            echo "Ongeldige bericht. Gebruik alleen letters en cijfers.";
        } else if (!preg_match("/^[a-zA-Z0-9 .,'']*$/", $blog_maker)) {
            echo "Ongeldige maker. Gebruik alleen letters, cijfers, spaties, en de symbolen . , '";
        } else {
            $laatst_edit = date('Y-m-d H:i:s'); // Huidige datum en tijd

            // Query om de blog bij te werken met de opgegeven id
            $sql = "UPDATE blogs SET blog_bericht = ?, blog_maker = ?, laatst_edit = ? WHERE id = ?";
            $updateqry = $con->prepare($sql);

            if ($updateqry === false) {
                echo "Error bij voorbereiden statement: " . $con->error;
            } else {
                $updateqry->bind_param('sssi', $blog_bericht, $blog_maker, $laatst_edit, $id);

                if ($updateqry->execute()) {
                    echo "Blog succesvol bijgewerkt.";
                } else {
                    echo "Error bij bijwerken blog: " . $updateqry->error;
                }

                $updateqry->close();
            }
        }
    }
}
?>

<?php
include('../core/footer.php');
?>
