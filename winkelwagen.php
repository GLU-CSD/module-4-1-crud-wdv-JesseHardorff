<?php
// Start de sessie
session_start();

if(isset($_GET["destroy"])){
  session_unset();
  
}

include("includes/winkelsession.php");


?>
<?php
include_once("includes/core/header.php");
?>
  
  <div id="Display2">
  <?php
include_once("includes/core/h2h3.php");
?>
    <!-- De derde Rechthoek en de grootste rechthoek -->
    <div id="RH30">
      <div id="Dbutton">
      
       <a href="winkelwagen.php?destroy=1"><img src="https://cdn.icon-icons.com/icons2/868/PNG/512/trash_bin_icon-icons.com_67981.png"  alt="Delete" style="width: 60px; height: 60px;"></a>
  
    
    <script>
     
// Functie om de sessie te verwijderen





</script>
    <div id="checkout">
      <button class="button5" style="width: 250px; height: 50px;" onclick="window.location.href = 'bestelformulier.php';">Verder met bestellen</button>
      <div id="subtotaal">
        <div style="border: 2px solid black; height: 30px; padding: 10px;">
          <p style="text-align: right; margin-top: -48px; position:absolute; font-weight: bold; margin-left: 140px; font-size: 26px;" id="TotalPriceAll"></p>
            <p style="text-align: left; margin-top: -50px; font-weight: bold; font-size: 26px;">Totaal prijs:</p>
            <p style="text-align: left; margin-top: 0px; font-size: 14px;">incl. btw 21%</p>
            <p style="text-align: right; position: absolute; margin-top: -32px; margin-left: 160px; font-weight: bold; font-size: 18px;"  id="TotalPriceAllBTW"></p>
        </div>
    </div>
    </div>
 
    
    </div>

    
   <!-- Alle winkelwagen boxes (max 5) -->
      <p><span class="p9">Jouw Winkelwagen</span></p>
      <div id="productsdisplay1">
        <div id="product1">
          <div id="TitleBox1">
            <p id="title1"></p>
          </div>
          <div id="DescriptionBox1">
            <p id="description1"></p>
          </div>
          <div id="PrijsBox1">
            <p id="price1"></p>
          </div>
          <div id="ButtonPlus1">
          <a href="winkelwagen.php?ButtonPlus1=1"><div class="button_plus"></div></a>
         </div>
          <div id="Quantity1">
            <div id="Quantities1">
          </div> 
        
          </div> 
          <div id="MultiPrijsBox1">
            <p id="totalprice1"></p>
          </div>
          <div id="ImageBox1">
            <img id="productImage1" src="" alt="logo" width="100" height="100">
          </div>
        
        </div>
        <div id="product2">
          <div id="TitleBox2">
            <p id="title2"></p>
          </div>
          <div id="DescriptionBox2">
            <p id="description2"></p>
          </div>
          <div id="PrijsBox2">
            <p id="price2"></p>
          </div>
          <div id="ButtonPlus2">
          <a href="winkelwagen.php?ButtonPlus2=1"><div class="button2_plus"></div></a>
         </div>
          <div id="Quantity2">
            <div id="Quantities2">
          </div> 
          </div> 
          <div id="MultiPrijsBox2">
            <p id="totalprice2"></p>
          </div>
          <div id="ImageBox2">
            <img id="productImage2" src="" alt="logo" width="100" height="100">
          </div>
        
        </div>
        <div id="product3">
          <div id="TitleBox3">
            <p id="title3"></p>
          </div>
          <div id="DescriptionBox3">
            <p id="description3"></p>
          </div>
          <div id="PrijsBox3">
            <p id="price3"></p>
          </div>
          <div id="ButtonPlus3">
          <a href="winkelwagen.php?ButtonPlus3=1"><div class="button3_plus"></div></a>
         </div>
          <div id="Quantity3">
            <div id="Quantities3">
          </div> 
          </div> 
          <div id="MultiPrijsBox3">
            <p id="totalprice3"></p>
          </div>
          <div id="ImageBox3">
            <img id="productImage3" src="" alt="logo" width="100" height="100">
          </div>
        
        </div>
        <div id="product4">
          <div id="TitleBox4">
            <p id="title4"></p>
          </div>
          <div id="DescriptionBox4">
            <p id="description4"></p>
          </div>
          <div id="PrijsBox4">
            <p id="price4"></p>
          </div>
          <div id="ButtonPlus4">
          <a href="winkelwagen.php?ButtonPlus4=1"><div class="button4_plus"></div></a>
         </div>
          <div id="Quantity4">
            <div id="Quantities4">
          </div> 
          </div> 
          <div id="MultiPrijsBox4">
            <p id="totalprice4"></p>
          </div>
          <div id="ImageBox4">
            <img id="productImage4" src="" alt="logo" width="100" height="100">
          </div>
        
        </div>
        <div id="product5">
          <div id="TitleBox5">
            <p id="title5"></p>
          </div>
          <div id="DescriptionBox5">
            <p id="description5"></p>
          </div>
          <div id="PrijsBox5">
            <p id="price5"></p>
          </div>
          <div id="ButtonPlus5">
          <a href="winkelwagen.php?ButtonPlus5=1"><div class="button5_plus"></div></a>
         </div>
          <div id="Quantity5">
            <div id="Quantities5">
          </div> 
            </div> 
          <div id="MultiPrijsBox5">
            <p id="totalprice5"></p>
          </div>
          <div id="ImageBox5">
            <img id="productImage5" src="" alt="logo" width="100" height="100">
          </div>
        
        </div>
      </div>
      
  

   
      <?php
include("includes/getelement.php")     
?>
 
</div>                                                 
        <!-- De vierde rechthoek -->
    <div id="RH4">
      <div id="klantenservice">
        <p><span class="infostylegroot">KLANTENSERVICE</span></p>
        <p><span class="infostyle">- Paswoord vergeten</span></p>
        <p><span class="infostyle">- Veilige betaling</span></p>
        <p><span class="infostyle">- Levering</span></p>
        <p><span class="infostyle">- Annuleren, retourneren en ruilen</span></p>
      </div>
      <div id="overons">
        <p><span class="infostylegroot">OVER ONS</span></p>
        <p><span class="infostyle">- Over ons</span></p>
        <p><span class="infostyle">- Contactinformatie</span></p>
        <p><span class="infostyle">- Algemene voorwaarden</span></p>
        <p><span class="infostyle">- Privacy beleid</span></p>
      </div>
    </div>

      <!-- De laatste rechthoek(credits) -->
    <div id="RH5">
      <div id="Credits">
      <p>Webshop door Jesse Hardorff</p>
    </div>
    </div>
    </div>

    <?php
include_once("includes/core/footer.php");
?>
