<?php
    include('../core/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>AddProduct</title>
</head>
<body>
    <form method="post">
        <div class="mb-3">
            <label for="numberInput" class="form-label">ID</label>
            <input type="number" name="id" class="form-control" id="numberInput" placeholder="ID" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">Product_Naam</label>
            <input type="text" name="product_naam" class="form-control" id="product_naam" placeholder="Naam" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">Product_Prijs</label>
            <input type="text" name="product_prijs" class="form-control" id="product_prijs" placeholder="Prijs" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">Product_bio</label>
            <input type="text" name="product_bio" class="form-control" id="product_bio" placeholder="Bio" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">Product_Kleinbio</label>
            <input type="text" name="product_kleinbio" class="form-control" id="product_kleinbio" placeholder="kleinbio" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">foto_1</label>
            <input type="text" name="foto1" class="form-control" id="foto1" placeholder="foto 1" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">foto_2</label>
            <input type="text" name="foto2" class="form-control" id="foto2" placeholder="foto 2" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">foto_3</label>
            <input type="text" name="foto3" class="form-control" id="foto3" placeholder="foto 3" required>
        </div>
        
        <button type="submit" name="submit" class="button3">Voeg product toe</button>
        
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $productNaam = $_POST['product_naam'];
    $productPrijs = $_POST['product_prijs'];
    $productBio = $_POST['product_bio'];
    $productKleinbio = $_POST['product_kleinbio'];
    $foto1 = $_POST['foto1'];
    $foto2 = $_POST['foto2'];
    $foto3 = $_POST['foto3'];

    $sql = "INSERT INTO producten (id, product_naam, product_prijs, product_bio, product_kleinbio, foto_1, foto_2, foto_3) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $insertqry = $con->prepare($sql);

    if ($insertqry === false) {
        echo "Error bij voorbereiden statement: " . $con->error;
    } else {
        $insertqry->bind_param('isssssss', $id, $productNaam, $productPrijs, $productBio, $productKleinbio, $foto1, $foto2, $foto3);

        if ($insertqry->execute()) {
            echo "Nieuw product succesvol toegevoegd.";
        } else {
            echo "Error bij toevoegen product: " . $insertqry->error;
        }

        $insertqry->close();
    }
}
?>

<?php
    include('../core/footer.php');
?>