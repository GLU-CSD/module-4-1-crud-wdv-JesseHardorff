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
        // Controleer of de id parameter is meegegeven
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Query om alleen de rij met de opgegeven id op te halen
            $sql = "SELECT id, product_naam, product_prijs, product_kleinbio, product_bio, foto_1, foto_2, foto_3 FROM producten WHERE id = ? ORDER BY id ASC";
            $liqry = $con->prepare($sql);
            $liqry->bind_param('i', $id);

            if ($liqry === false) {
                echo mysqli_error($con);
            } else {
                $liqry->bind_result($id, $naam, $prijs, $kleinbio, $bio, $foto_1, $foto_2, $foto_3);
                if ($liqry->execute()) {
                    $liqry->store_result();
                    if ($liqry->num_rows > 0) {
                        $liqry->fetch();
                        ?>
                        <tr>
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
                    } else {
                        echo "Geen product gevonden met de opgegeven id.";
                    }
                }
                $liqry->close();
            }
        }
        ?>
    </table>

    <div class="row">
        <form action="" method="post"> <!-- Formulier toegevoegd -->
            <button type="submit" name="submit" class="button5">Delete</button> <!-- Knop toegevoegd binnen het formulier -->
            <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Verborgen invoerveld toegevoegd om product-ID door te geven -->
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $id = $_POST["id"];

        // Query om het product met de opgegeven id te verwijderen
        $sql = "DELETE FROM producten WHERE id = ?";
        $deleteqry = $con->prepare($sql);
        $deleteqry->bind_param('i', $id);

        if ($deleteqry->execute()) {
            $redirectUrl = BASEURL . "admin/producten/";
            header("Location: " . $redirectUrl);
            exit();
        } else {
            echo "Error bij verwijderen product: " . $deleteqry->error;
        }

        $deleteqry->close();
    }
    ?>

    <?php
    include('../core/footer.php');
    ?>
