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
    <title>AddBlog</title>
</head>
<body>
    <form method="post">
        <div class="mb-3">
            <label for="numberInput" class="form-label">ID</label>
            <input type="number" name="id" class="form-control" id="numberInput" placeholder="ID" value="<?php echo $id; ?>" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">Blog_Bericht</label>
            <input type="text" name="blog_bericht" class="form-control" id="blog_bericht" placeholder="Bericht" value="<?php echo $blog_bericht; ?>" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">Blog_Maker</label>
            <input type="text" name="blog_maker" class="form-control" id="blog_maker" placeholder="Naam" value="<?php echo $blog_maker; ?>" required>
        </div>
        
        <button type="submit" name="submit" class="button3">Voeg blog toe</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $tijd_gemaakt = date('Y-m-d H:i:s');
    $laatst_edit = date('Y-m-d H:i:s');

    if ($id === false || $id <= 0) {
        echo "Ongeldige ID. Voer een positief geheel getal in.";
    } else if (!preg_match("/^[a-zA-Z0-9 ]*$/", $blog_bericht)) {
        echo "Ongeldige bericht. Gebruik alleen letters en cijfers.";
    } else if (!preg_match("/^[a-zA-Z0-9 .,'']*$/", $blog_maker)) {
        echo "Ongeldige maker. Gebruik alleen letters, cijfers, spaties, en de symbolen . , '";
    } else {
        $sql = "INSERT INTO blogs (id, blog_bericht, blog_maker, tijd_gemaakt, laatst_edit) VALUES (?, ?, ?, ?, ?)";
        $insertqry = $con->prepare($sql);

        if ($insertqry === false) {
            echo "Error bij voorbereiden statement: " . $con->error;
        } else {
            $insertqry->bind_param('issss', $id, $blog_bericht, $blog_maker, $tijd_gemaakt, $laatst_edit);

            if ($insertqry->execute()) {
                $redirectUrl = BASEURL . "admin/blogs/";
                header("Location: " . $redirectUrl);
                exit();
            } else {
                echo "Error bij toevoegen blog: " . $insertqry->error;
            }

            $insertqry->close();
        }
    }
}
?>

<?php
    include('../core/footer.php');
?>
