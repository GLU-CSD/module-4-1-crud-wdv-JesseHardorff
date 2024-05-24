<!-- Include header en 2de rechthoek en product.php array -->
<?php
include_once("includes/core/header.php");
?>
  
  <div id="Display5">
<?php
include_once("includes/core/h2h3.php");
?>
 <div id="RH3">
 <?php
include_once("includes/products.php");
include("connection.inc.php");

// id zoeken en variabelen maken
$id = '';
if (isset($_GET['id'])) {
  $id = (int)$_GET['id']; 
}

$sql = "SELECT * FROM producten WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the selected product
    $row = $result->fetch_assoc();
    echo '<div id="detailproduct">';
    echo '<p><strong><span class="PP2">' . $row['product_naam'] . '</span></strong></p>';
    echo '<p><strong><span class="PP3">$' . $row['product_prijs'] . '</span></strong></p>';

    echo '<img id="mainImg" src="sprite/' . $row['foto_1'] . '" alt="logo" width="400" height="400">';
    echo '<img src="sprite/' . $row['foto_1'] . '" onclick="SwitchImg(this)" alt="logo" width="100" height="100" style="margin-left: 60px;"><span class="PP5"></span>';
    echo '<img src="sprite/' . $row['foto_2'] . '" onclick="SwitchImg(this)" alt="logo" width="100" height="100" style="margin-left: 20px;"><span class="PP5"></span>';
    echo '<img src="sprite/' . $row['foto_3'] . '" onclick="SwitchImg(this)" alt="logo" width="100" height="100" style="margin-left: 20px;"><span class="PP5"></span>';

    echo '<div id="logo32">';
    echo '</div>';
    echo '<div id="biobox">';
    echo '<p><strong><span class="PP4">' . $row['product_bio'] . '</span></strong></p>';
    echo '</div>';
    echo '<a href="winkelwagen.php?id=' . $id . '"><img id="CartId99" src="https://cdn0.iconfinder.com/data/icons/typicons-2/24/shopping-cart-512.png" onclick="Cart' . ($id) . '()" alt="logo" width="250" height="250"></a>';

    echo '</div>';
    echo '<div id="reviews">';
    echo '<p>Ratings: 5 Sterren</p>';
    echo '</div>';




  } else {
    echo "No product found with the specified ID.";
}

// //  foto's title prijs en bio uit de products.php array halen
// echo'<div id="detailproduct"';
// echo '<p><strong><span class="PP2">'. $array['products'][$id]['title'] .'</span></strong></p>';
// echo '<p><strong><span class="PP3">$'. $array['products'][$id]['price'] .'</span></strong></p>';

//  echo '<img id="mainImg" src="sprite/'.$array['products'][$id]['photos']['photo1'].'" alt="logo" width="400" height="400">';
//  echo '<img src="sprite/'.$array['products'][$id]['photos']['photo1'].'" onclick="SwitchImg(this)" alt="logo" width="100" height="100" style="margin-left: 60px;"><span class="PP5"></span>';
//  echo '<img src="sprite/'.$array['products'][$id]['photos']['photo2'].'" onclick="SwitchImg(this)" alt="logo" width="100" height="100" style="margin-left: 20px;"><span class="PP5"></span>';
//  echo '<img src="sprite/'.$array['products'][$id]['photos']['photo3'].'" onclick="SwitchImg(this)" alt="logo" width="100" height="100" style="margin-left: 20px;"><span class="PP5"></span>';
 
//  echo '<div id="logo32">';
//  echo'</div>';
//  echo'<div id="biobox"';
//  echo '<p><strong><span class="PP4">'. $array['products'][$id]['bio'] .'</span></strong></p>';
//  echo '</div>';
//  echo '<a href="winkelwagen.php?id=' . $id . '"><img id="CartId99" src="https://cdn0.iconfinder.com/data/icons/typicons-2/24/shopping-cart-512.png" onclick="Cart' . ($id) . '()"alt="logo" width="250" height="250"></a>';

//  echo '</div>';
//  echo '<div id="reviews">';
// echo ' <p>Ratings: 5 Sterren</p>';
//  echo '</div>';


 ?>
 
<!-- copyright en footer include -->
 </div>
<?php
include_once("includes/core/h4h5.php");
?>
<?php
include_once("includes/core/footer.php");
?>