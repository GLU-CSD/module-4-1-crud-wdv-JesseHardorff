<?php
    include('../core/header.php');
?>

<head>
    <title>Producten</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<div class="row">


<table class="table">
    <tr>
    <th>EDIT</th>
    <th>DELETE</th>
        <th>ID</th>
        <th>Product_Naam</th>
        <th>Product_Prijs</th>
        <th>Product_kleinbio</th>
        <th>Product_bio</th>
        <th>foto_1</th>
        <th>foto_2</th>
        <th>foto_3</th>
    </tr>
<?php
$counter = 1; // teller van de rij
$sql = "SELECT id, product_naam, product_prijs, product_kleinbio, product_bio, foto_1, foto_2, foto_3 FROM producten ORDER BY id ASC";
$liqry = $con->prepare($sql);
if ($liqry === false) {
    echo mysqli_error($con);
} else {
    $liqry->bind_result($id, $naam, $prijs, $kleinbio, $bio, $foto_1, $foto_2, $foto_3);
    if ($liqry->execute()) {
        $liqry->store_result();
        while ($liqry->fetch()) {
            ?>
            <tr>
                <td><a href="edit_product.php?id=<?php echo $id; ?>"><button class="button1">Edit</button></a></td>
                <td><a href="delete_product.php?id=<?php echo $id; ?>"><button class="button2">Delete</button></a></td>
                <td><?php echo $id; ?></td>
                <td><?php echo $naam; ?></td>
                <td><?php echo $prijs; ?></td>
                <td><?php echo $kleinbio; ?></td>
                <td><?php echo $bio; ?></td>
                <td><?php echo $foto_1; ?></td>
                <td><?php echo $foto_2; ?></td>
                <td><?php echo $foto_3; ?></td>
            </tr>
            <?php
            $counter++; // Verhoog de teller voor de volgende rij
        }
    }
    $liqry->close();
}
?>
</table>
<div class="row">
    <div class="col-12">
        <a href="add_product.php"><button class="button3">Toevoegen</button></a>
    </div>
</div>
<?php
    include('../core/footer.php');
?>