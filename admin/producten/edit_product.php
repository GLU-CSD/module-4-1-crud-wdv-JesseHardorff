<?php
    include('../core/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>EditProduct</title>
</head>
<body>
<?php
    // Controleer of de id parameter is meegegeven
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Query om de huidige productgegevens op te halen
        $sql = "SELECT product_naam, product_prijs, product_bio, product_kleinbio, foto_1, foto_2, foto_3 FROM producten WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->bind_result($product_naam, $product_prijs, $product_bio, $product_kleinbio, $foto1, $foto2, $foto3);
        $stmt->fetch();
        $stmt->close();
    }
    ?>
    <form method="post">
        <div class="mb-3">
            <label for="numberInput" class="form-label">ID</label>
            <input type="number" name="id" class="form-control" id="numberInput" placeholder="ID" value="<?php echo isset($id) ? $id : ''; ?>" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">Product_Naam</label>
            <input type="text" name="product_naam" class="form-control" id="product_naam" placeholder="Naam" value="<?php echo isset($product_naam) ? $product_naam : ''; ?>" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">Product_Prijs</label>
            <input type="text" pattern="[0-9]{1,3}\.[0-9]{2}" name="product_prijs" class="form-control" id="product_prijs" placeholder="Prijs" value="<?php echo isset($product_prijs) ? $product_prijs : ''; ?>" required>
            <div class="error-message">min 1 en max 2 getal voor de prijs en moet 2 cijfers achter de punt</div>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">Product_bio</label>
            <input type="text" name="product_bio" class="form-control" id="product_bio" placeholder="Bio" value="<?php echo isset($product_bio) ? $product_bio : ''; ?>" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">Product_Kleinbio</label>
            <input type="text" name="product_kleinbio" class="form-control" id="product_kleinbio" placeholder="kleinbio" value="<?php echo isset($product_kleinbio) ? $product_kleinbio : ''; ?>" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">foto_1</label>
            <input type="text" name="foto1" class="form-control" id="foto1" placeholder="foto 1" value="<?php echo isset($foto1) ? $foto1 : ''; ?>" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">foto_2</label>
            <input type="text" name="foto2" class="form-control" id="foto2" placeholder="foto 2" value="<?php echo isset($foto2) ? $foto2 : ''; ?>" required>
        </div>
        <div class="mb-3">
            <label for="textInput" class="form-label">foto_3</label>
            <input type="text" name="foto3" class="form-control" id="foto3" placeholder="foto 3" value="<?php echo isset($foto3) ? $foto3 : ''; ?>" required>
        </div>
        
        <button type="submit" name="submit" class="button4">Change</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
    $productNaam = htmlspecialchars($_POST['product_naam']);
    $productPrijs = filter_var($_POST['product_prijs']);
    $productBio = htmlspecialchars($_POST['product_bio']);
    $productKleinbio = htmlspecialchars($_POST['product_kleinbio']);
    $foto1 = htmlspecialchars($_POST['foto1']);
    $foto2 = htmlspecialchars($_POST['foto2']);
    $foto3 = htmlspecialchars($_POST['foto3']);

    if ($id === false || $id <= 0 || $id >= 100) {
        echo "Ongeldige ID. Voer een positief heel getal onder de 100 in.";
        exit;
    } else if (!preg_match("/^[a-zA-Z0-9 ]*$/", $productNaam)) {
        echo "Ongeldige naam. Gebruik alleen letters en cijfers.";
        exit;
    }else if (!preg_match("/^[a-zA-Z0-9 .,'']*$/", $productBio)) {
        echo "Ongeldige Bio. Gebruik alleen letters, cijfers, spaties, en de symbolen . , '";
        exit;
    }
    else if (!preg_match("/^[a-zA-Z0-9 .,'']*$/", $productKleinbio)) {
        echo "Ongeldige Kleinbio. Gebruik alleen letters, cijfers, spaties, en de symbolen . , '";
        exit;
    } else if (!preg_match("/^[a-zA-Z0-9 ]*\.png$/", $foto1)) {
        echo "Ongeldige foto1. Gebruik alleen letters en cijfers en voeg '.png' toe aan het einde van de naam.";
        exit;
    } else if (!preg_match("/^[a-zA-Z0-9 ]*\.png$/", $foto2)) {
        echo "Ongeldige foto2. Gebruik alleen letters en cijfers en voeg '.png' toe aan het einde van de naam.";
        exit;
    } else if (!preg_match("/^[a-zA-Z0-9 ]*\.png$/", $foto3)) {
        echo "Ongeldige foto3. Gebruik alleen letters en cijfers en voeg '.png' toe aan het einde van de naam.";
        exit;
    }else{

    $sql = "UPDATE producten SET product_naam = ?, product_prijs = ?, product_bio = ?, product_kleinbio = ?, foto_1 = ?, foto_2 = ?, foto_3 = ? WHERE id = ?";
    $updateqry = $con->prepare($sql);

    if ($updateqry === false) {
        echo "Error bij voorbereiden statement: " . $con->error;
    } else {
        $updateqry->bind_param('sssssssi', $productNaam, $productPrijs, $productBio, $productKleinbio, $foto1, $foto2, $foto3, $id);

        if ($updateqry->execute()) {
            echo "Product succesvol bijgewerkt.";
        } else {
            echo "Error bij bijwerken product: " . $updateqry->error;
        }

        $updateqry->close();
    }
}
}
?>

<?php
    include('../core/footer.php');
?>
