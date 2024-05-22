<?php
include('../core/header.php');
?>

<head>
    <title>Blog Delete</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<div class="row">

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Blog_Bericht</th>
            <th>Blog_Maker</th>
        </tr>
        <?php
        // Controleer of de id parameter is meegegeven en geldig is
        if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
            $id = $_GET['id'];

            // Query om alleen de rij met de opgegeven id op te halen
            $sql = "SELECT blog_bericht, blog_maker FROM blogs WHERE id = ?";
            $liqry = $con->prepare($sql);
            $liqry->bind_param('i', $id);

            if ($liqry === false) {
                echo mysqli_error($con);
            } else {
                $liqry->bind_result($blog_bericht, $blog_maker);
                if ($liqry->execute()) {
                    $liqry->store_result();
                    if ($liqry->num_rows > 0) {
                        $liqry->fetch();
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($id); ?></td>
                            <td><?php echo htmlspecialchars($blog_bericht); ?></td>
                            <td><?php echo htmlspecialchars($blog_maker); ?></td>
                        </tr>
                    <?php
                    } else {
                        echo "Geen blog gevonden met de opgegeven id.";
                    }
                }
                $liqry->close();
            }
        } else {
            echo "Ongeldige ID.";
        }
        ?>
    </table>

    <div class="row">
        <form action="" method="post">
            <button type="submit" name="submit" class="button5">Delete</button>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
        </form>
    </div>

    <?php
    if (isset($_POST['submit']) && filter_var($_POST['id'], FILTER_VALIDATE_INT)) {
        $id = $_POST["id"];

        // Query om het blog met de opgegeven id te verwijderen
        $sql = "DELETE FROM blogs WHERE id = ?";
        $deleteqry = $con->prepare($sql);
        $deleteqry->bind_param('i', $id);

        if ($deleteqry->execute()) {
            echo "Blog succesvol verwijderd.";
        } else {
            echo "Error bij verwijderen blog: " . $deleteqry->error;
        }

        $deleteqry->close();
    }
    ?>

<?php
include('../core/footer.php');
?>
