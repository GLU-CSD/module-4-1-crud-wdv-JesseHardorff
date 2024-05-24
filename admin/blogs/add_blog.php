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

// Als de gebruiker is ingelogd, haal de gebruikersnaam op uit de sessie
if (isset($_SESSION['ingelogd']) && $_SESSION['ingelogd']) {
    $blog_maker = $_SESSION['username'];
}

// Als het formulier is ingediend, gebruik dan de ingevoerde waarden
if (isset($_POST['submit'])) {
    $blog_bericht = htmlspecialchars($_POST['blog_bericht']);
    
    // Als de gebruiker niet is ingelogd, gebruik dan de ingevoerde blog_maker
    if (!isset($_SESSION['ingelogd']) || !$_SESSION['ingelogd']) {
        $blog_maker = htmlspecialchars($_POST['blog_maker']);
    }
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
            <label for="textInput" class="form-label">Blog_Bericht</label>
            <textarea name="blog_bericht" class="form-control" id="blog_bericht" placeholder="Bericht" required><?php echo $blog_bericht; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">Blog_Maker</label>
            <input type="text" name="blog_maker" class="form-control" id="blog_maker" placeholder="Naam" value="<?php echo $blog_maker; ?>" <?php echo (isset($_SESSION['ingelogd']) && $_SESSION['ingelogd']) ? 'readonly' : 'required'; ?>>
        </div>
        <button type="submit" name="submit" class="button3">Voeg blog toe</button>
    </form>
</body>
</html>

<?php
// Query om het hoogste ID op te halen
$sql_max_id = "SELECT MAX(id) AS max_id FROM blogs";
$result = $con->query($sql_max_id);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $max_id = $row['max_id'];
    $new_id = $max_id + 1;
} else {
    $new_id = 1; // Als de tabel leeg is, start met ID 1
}

if (isset($_POST['submit'])) {
    $tijd_gemaakt = date('Y-m-d H:i:s');
    $laatst_edit = date('Y-m-d H:i:s');
    if (!preg_match("/^[^;<>={}]+$/", $blog_bericht)) {
        echo "Ongeldige bericht. De volgende symbolen zijn niet toegestaan: ; < > = { }";
    } else if (!preg_match("/^[a-zA-Z0-9 .,'']+$/", $blog_maker)) {
        echo "Ongeldige maker. Gebruik alleen letters, cijfers, spaties, en de symbolen . , '";
    } else {
        $sql = "INSERT INTO blogs (id, blog_bericht, blog_maker, tijd_gemaakt, laatst_edit) VALUES (?, ?, ?, ?, ?)";
        $insertqry = $con->prepare($sql);
        
        if ($insertqry === false) {
            echo "Error bij voorbereiden statement: " . $con->error;
        } else {
            $insertqry->bind_param('issss', $new_id, $blog_bericht, $blog_maker, $tijd_gemaakt, $laatst_edit);
        
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
