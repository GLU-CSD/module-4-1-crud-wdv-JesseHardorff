<?php
// Start de sessie
session_start();

?>

<?php
include_once("includes/core/header.php");
?>
  
  <div id="Display1">
<?php
include_once("includes/core/h2h3.php");
?>
    <!-- De derde Rechthoek en de grootste rechthoek -->
    <div id="RH3">
         <!-- Dieren categorie (staat links) -->
      <div id="Doosjes">
        <h1>Dieren </h1>
        <div id="Categorieentext">
        <p><span class="l1">> Subcategorie 1</span></p>
        <p><span class="l1">> Subcategorie 2</span></p>
        <p><span class="l1">> Subcategorie 3</span></p>
          </div>
      </div>
        <!-- Selectie verfijnen categorie (staat links) -->
      <div id="SelectieVerfijnen">
        <h2>Uw selectie verfijnen </h2>
        <div id="Materialen">
          <p><span class="m1"> Materiaal</span></p>
          <p><span class="l1"> > Geel (5)</span></p>
          <p><span class="l1"> > Blauw (12)</span></p>
          <p><span class="l1"> > Rood (3)</span></p>
        </div>
      </div>

        <!-- Prijs slider (staat links) -->
      <div id="Prijs">
        <h3>Prijs </h3>
        <div id="slider">
          <div class="min-max-slider" data-legendnum="2">
            <label for="min">Minimum price</label>
            <input id="min" class="min" name="min" type="range" step="1" min="0" max="100" >
            <label for="max">Maximum price</label>
            <input id="max" class="max" name="max" type="range" step="1" min="0" max="100" >
          </div>
        </div>
      </div>
        <!-- Nieuwsbrief inschrijven (staat links) -->
      <div id="Nieuwsbrief" >
        <h5>Nieuwsbrief </h5>
      
        <div class="w3-container" >
          <div class="w3-card-4">
            <div class="w3-container w3-green">
            </div>
            <form class="w3-container">
              <input class="w3-input" type="text">
            </form>
          </div>
        </div>
          <p><span class="container1 q1">Inschrijven</span></p>
      </div>
      
      <!-- De dieren rechthoek -->
      <div id="Dieren">
         <!-- Select box waar je de dieren kan sorteren -->
        <p><span class="q2">Dieren</span></p>
        <label for="sorteren"></label>
        <select name="sorteren" id="sorteren">
          <option value="Sorteer op Naam">Sorteer op: Naam</option>
          <option value="A - Z">A - Z</option>
          <option value="Z - A">Z - A</option>
        </select>
            <!-- select box voor hoeveel dieren je wilt zien -->
        <label for="toon"></label>
        <select name="toon" id="toon">
          <option value="Sorteer op Naam">Toon: 20 per pagina</option>
          <option value="Toon: 12 per pagina">Toon: 12 per pagina</option>
          <option value="Toon: 40 per pagina">Toon: 40 per pagina</option>
        </select>
     </div>
     <div id="Blokkenplek">
          <!-- Alle info in de productpagina zetten met de product array en de foreach loop. -->
          <?php
include("includes/products.php");
include("connection.inc.php");
echo '<div class="parent">';

$sql = "SELECT id, product_naam, product_prijs, foto_1 FROM producten ORDER BY id ASC";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    while ($data = mysqli_fetch_assoc($result)) {
        echo '<div id="marge">';
        echo '<div class="div' . $data["id"] . '">';
        echo '<a href="detailpagina.php?id=' . $data["id"] . '"><div id="plaatje1">';
        echo '<div id="logo51">';
        echo '<img src="sprite/' . $data['foto_1'] . '" alt="logo" width="170" height="130">';
        echo '</div>';
        echo '</div></a>';
        echo '<p><span class="o1">' . $data["product_naam"] . '</span></p>';
        echo '<p><span class="o2">$' . $data["product_prijs"] . '</span></p>';
        echo '<div id="logo31">';
        echo '<a href="winkelwagen.php?id=' . $data["id"] . '"><img id="CartId' . $data["id"] . '" src="https://cdn0.iconfinder.com/data/icons/typicons-2/24/shopping-cart-512.png" alt="logo" width="50" height="50"></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    echo "</div>";
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
 </div>
    </div>
                     <!-- include de footer en copyright                                -->
    <?php
include_once("includes/core/h4h5.php");
?>
<?php
include_once("includes/core/footer.php");
?>
  <!-- Linken naar javascript -->
   
 