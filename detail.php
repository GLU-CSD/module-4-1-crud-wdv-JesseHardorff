<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dieren van datatbas</title>

</head>

<body>
  
  <?php
  include("connection.inc.php");

  $sql = "SELECT id, product_naam, product_prijs FROM producten ORDER BY id ASC";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
  ?>
      <div class="pokemon">
        <?php echo ($row["id"]); ?>
          <?php echo ($row["product_naam"]); ?>
          <?php echo ($row["product_prijs"]); ?>
          
       
        
      </div>
      </div>
  <?php
    }
  } else {
    echo "0 results";
  }
  mysqli_close($conn);
  ?>
</body>

</html>
