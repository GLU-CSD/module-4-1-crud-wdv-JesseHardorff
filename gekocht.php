<?php
// Start de sessie
session_start();
?>

<?php
include_once("includes/core/header.php");
?>
  
  <div id="Display4">
  <?php
include_once("includes/core/h2h3.php");
?>
    <!-- De derde Rechthoek en de grootste rechthoek -->
    <div id="RH32">
      <div id="Bestellinginf">
    <div class="parent">
<div class="div1B"> 
  <!-- alle id maken voor de info van de bestelling -->
  <div id="productnaam1"> </div>
</div>
<div class="div2B">
<div id="productid1"> </div>
   </div>
<div class="div3B"> 
<div id="eenheidsprijs1"> </div>
</div>
<div class="div4B"> 
<div id="hoeveelheid1"> </div>
</div>
<div class="div5B"> 
<div id="totaalprijs1"> </div>
</div>
<div class="div6B"> 
<div id="productnaam2"> </div>
</div>
<div class="div7B"> 
<div id="productid2"> </div>
</div>
<div class="div8B"> 
<div id="eenheidsprijs2"> </div>
</div>
<div class="div9B"> 
<div id="hoeveelheid2"> </div>
</div>
<div class="div10B"> 
<div id="totaalprijs2"> </div>
</div>
<div class="div11B"> 
<div id="productnaam3"> </div>
</div>
<div class="div12B"> 
<div id="productid3"> </div>
</div>
<div class="div13B"> 
<div id="eenheidsprijs3"> </div>
</div>
<div class="div14B"> 
<div id="hoeveelheid3"> </div>
</div>
<div class="div15B"> 
<div id="totaalprijs3"> </div>
</div>
<div class="div16B"> 
<div id="productnaam4"> </div>
</div>
<div class="div17B"> 
<div id="productid4"> </div>
</div>
<div class="div18B"> 
<div id="eenheidsprijs4"> </div>
</div>
<div class="div19B"> 
<div id="hoeveelheid4"> </div>
</div>
<div class="div20B"> 
<div id="totaalprijs4"> </div>
</div>
<div class="div21B"> 
<div id="productnaam5"> </div>
</div>
<div class="div22B"> 
<div id="productid5"> </div>
</div>
<div class="div23B"> 
<div id="eenheidsprijs5"> </div>
</div>
<div class="div24B"> 
<div id="hoeveelheid5"> </div>
</div>
<div class="div25B"> 
<div id="totaalprijs5"> </div>
</div>
</div>
</div>
<!-- de box voor de bestelling totaalbedrag en btw -->
<div id="checkout1">

      <div id="subtotaal1">
        <div style="border: 2px solid black; height: 70px; padding: 10px;">
          <p style="text-align: right; margin-top: 0px; position:absolute; font-weight: bold; margin-left: 120px; font-size: 22px;" id="TotalOnlyBTW"></p>
            <p style="text-align: left; margin-top: 0px; font-weight: bold; font-size: 20px;">Totaal BTW:</p>
            <p style="text-align: left; margin-top: 0px; font-weight: bold;font-size: 20px;">Totaal inc. BTW:</p>
            <p style="text-align: right; position: absolute; margin-top: -42px; margin-left: 160px; font-weight: bold; font-size: 22px;"  id="TotalPriceAll"></p>
        </div>
    </div>
    </div>
        <!-- weergeven van info van bestelling -->
        <div id="gekochteInfo">

    
        </div>
     <!-- ophalen van variablen van bestelformulier -->
        <script>
           
            var aanhef = localStorage.getItem('aanhef');
            var voornaam = localStorage.getItem('voornaam');
            var tussenvoegsel = localStorage.getItem('tussenvoegsel');
            var achternaam = localStorage.getItem('achternaam');
            var straatnaam = localStorage.getItem('straatnaam');
            var huisnummer = localStorage.getItem('huisnummer');
            var postcode = localStorage.getItem('postcode');
            var land = localStorage.getItem('land');
            var emailadres = localStorage.getItem('emailadres');
            var telefoonnummer = localStorage.getItem('telefoonnummer');
            var geboortedatum = localStorage.getItem('geboortedatum');
        
            // Het weergeven van de opgeslagen gegevens in de html
            var gekochteInfoDiv = document.getElementById('gekochteInfo');
            gekochteInfoDiv.innerHTML = `
                <p>Beste ${voornaam} ${tussenvoegsel} ${achternaam},</p>
                <p>Bedankt voor uw bestelling bij Jesse's webshop. </p>
                <p>Hieronder vindt u de gegevens van uw bestelling:</p>
                <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>
                <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br><br><br>


                <p>Uw bestelling id is: #1</p>
                <br>
                <p>Wij zullen uw product(en) leveren op het volgende adres:</p>
                <p>${straatnaam} ${huisnummer}</p>
                <p>${postcode} ${land}</p>
            
            `;
        </script>
        <script>
// alle info van de winkelsession.php naar de product id's brengen
      document.getElementById("productnaam1").innerText = "<?php echo isset($_SESSION['TitleV1']) ? 'Titel: '.$_SESSION['TitleV1'] : ''; ?>";
      document.getElementById("productid1").innerText = "<?php echo isset($_SESSION['idV1']) ? 'id: '.$_SESSION['idV1'] : ''; ?>";
document.getElementById("eenheidsprijs1").innerText = "<?php echo isset($_SESSION['PriceV1']) ? 'Kostprijs van 1: $'.$_SESSION['PriceV1'] : ''; ?>";
document.getElementById("hoeveelheid1").innerText = "<?php echo isset($_SESSION['QuantitiesV1']) ? 'Aantal: '.$_SESSION['QuantitiesV1'] : ''; ?>";
document.getElementById("totaalprijs1").innerText = "<?php echo isset($_SESSION['TotalPriceV1']) ? 'TotaalPrijs: $'.$_SESSION['TotalPriceV1'] : ''; ?>";

document.getElementById("productnaam2").innerText = "<?php echo isset($_SESSION['TitleV2']) ? 'Titel: '.$_SESSION['TitleV2'] : ''; ?>";
      document.getElementById("productid2").innerText = "<?php echo isset($_SESSION['idV2']) ? 'id: '.$_SESSION['idV2'] : ''; ?>";
document.getElementById("eenheidsprijs2").innerText = "<?php echo isset($_SESSION['PriceV2']) ? 'Kostprijs van 1: $'.$_SESSION['PriceV2'] : ''; ?>";
document.getElementById("hoeveelheid2").innerText = "<?php echo isset($_SESSION['QuantitiesV2']) ? 'Aantal: '.$_SESSION['QuantitiesV2'] : ''; ?>";
document.getElementById("totaalprijs2").innerText = "<?php echo isset($_SESSION['TotalPriceV2']) ? 'TotaalPrijs: $'.$_SESSION['TotalPriceV2'] : ''; ?>";

document.getElementById("productnaam3").innerText = "<?php echo isset($_SESSION['TitleV3']) ? 'Titel: '.$_SESSION['TitleV3'] : ''; ?>";
      document.getElementById("productid3").innerText = "<?php echo isset($_SESSION['idV3']) ? 'id: '.$_SESSION['idV3'] : ''; ?>";
document.getElementById("eenheidsprijs3").innerText = "<?php echo isset($_SESSION['PriceV3']) ? 'Kostprijs van 1: $'.$_SESSION['PriceV3'] : ''; ?>";
document.getElementById("hoeveelheid3").innerText = "<?php echo isset($_SESSION['QuantitiesV3']) ? 'Aantal: '.$_SESSION['QuantitiesV3'] : ''; ?>";
document.getElementById("totaalprijs3").innerText = "<?php echo isset($_SESSION['TotalPriceV3']) ? 'TotaalPrijs: $'.$_SESSION['TotalPriceV3'] : ''; ?>";

document.getElementById("productnaam4").innerText = "<?php echo isset($_SESSION['TitleV4']) ? 'Titel: '.$_SESSION['TitleV4'] : ''; ?>";
      document.getElementById("productid4").innerText = "<?php echo isset($_SESSION['idV4']) ? 'id: '.$_SESSION['idV4'] : ''; ?>";
document.getElementById("eenheidsprijs4").innerText = "<?php echo isset($_SESSION['PriceV4']) ? 'Kostprijs van 1: $'.$_SESSION['PriceV4'] : ''; ?>";
document.getElementById("hoeveelheid4").innerText = "<?php echo isset($_SESSION['QuantitiesV4']) ? 'Aantal: '.$_SESSION['QuantitiesV4'] : ''; ?>";
document.getElementById("totaalprijs4").innerText = "<?php echo isset($_SESSION['TotalPriceV4']) ? 'TotaalPrijs: $'.$_SESSION['TotalPriceV4'] : ''; ?>";

document.getElementById("productnaam5").innerText = "<?php echo isset($_SESSION['TitleV5']) ? 'Titel: '.$_SESSION['TitleV5'] : ''; ?>";
      document.getElementById("productid5").innerText = "<?php echo isset($_SESSION['idV5']) ? 'id: '.$_SESSION['idV5'] : ''; ?>";
document.getElementById("eenheidsprijs5").innerText = "<?php echo isset($_SESSION['PriceV5']) ? 'Kostprijs van 1: $'.$_SESSION['PriceV5'] : ''; ?>";
document.getElementById("hoeveelheid5").innerText = "<?php echo isset($_SESSION['QuantitiesV5']) ? 'Aantal: '.$_SESSION['QuantitiesV5'] : ''; ?>";
document.getElementById("totaalprijs5").innerText = "<?php echo isset($_SESSION['TotalPriceV5']) ? 'TotaalPrijs: $'.$_SESSION['TotalPriceV5'] : ''; ?>";

document.getElementById("TotalPriceAll").innerText = "<?php echo isset($_SESSION['TotalPriceAllBTWV']) ? '$'.$_SESSION['TotalPriceAllBTWV'] : ''; ?>";
document.getElementById("TotalOnlyBTW").innerText = "<?php echo isset($_SESSION['TotalPriceOnlyBTWV']) ? '$'.$_SESSION['TotalPriceOnlyBTWV'] : ''; ?>";


</script>
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
    <!-- Include footer -->
    <?php
include_once("includes/core/footer.php");
?>
