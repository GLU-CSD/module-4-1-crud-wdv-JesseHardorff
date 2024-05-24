<?php
session_start();
?>
<!-- Header includen -->
<?php
include_once("includes/core/header.php");
?>
  
  <div id="Display3">
    <!-- 2de Rechthoek erbij -->
  <?php
include_once("includes/core/h2h3.php");
?>
    <!-- De derde Rechthoek en de grootste rechthoek -->
    <div id="RH31">
      <button class="button6" style="width: 150px; height: 50px;" onclick="saveFormData()">Bestel</button>
      <p>BESTEL FORMULIER</p>
      
      <div id="persoon">
          <!-- bestelformulier  -->
          <select name="aanhef" id="aanhef">
              <option value=""></option>
              <option value="DHR">Dhr.</option>
              <option value="MEVR">Mevr.</option>
          </select>
          <input type="text" name="Voornaam" id="Voornaam" tabindex="1" placeholder="Voornaam">
          <input type="text" name="Tussenvoegsel" id="Tussenvoegsel" placeholder="Tussenvoegsel">
          <input type="text" name="Achternaam" id="Achternaam" tabindex="3" placeholder="Achternaam">
      </div>
      <div id="locatie">
          <input type="text" name="Straatnaam" id="Straatnaam" tabindex="4" placeholder="Straatnaam">
          <input type="number" name="Huisnummer" id="Huisnummer" tabindex="5" placeholder="Huisnummer">
          <input type="text" name="Postcode" id="Postcode" tabindex="6" placeholder="Postcode">
          <select tabindex="7" name="Land" id="Land">
              <option value=""></option>
              <option value="Nederland">Nederland</option>
              <option value="Engeland">Engeland</option>
          </select>
      </div>
      <div id="contactinfo&info">
          <input type="email" name="E-mailadres" id="E-mailadres" tabindex="8" placeholder="E-mailadres">
          <input type="tel" name="Telefoonnummer" id="Telefoonnummer" placeholder="123-45-678">
          <input type="date" name="Geboortedatum" id="Geboortedatum" placeholder="dd/mm/yyyy">
      </div>
      <label for="AVV">Ik accepteer de algemene voorwaarden.</label><a href="Geeninfo.php">Lees hier.</a>
      <input tabindex="9" type="checkbox" id="AVV" name="AVV">
  </div>
  <script>
    // Data saven van formulier
  function saveFormData() {
    // Informatie opslaan in variabelen
    var aanhef = document.getElementById('aanhef').value;
    var voornaam = document.getElementById('Voornaam').value;
    var tussenvoegsel = document.getElementById('Tussenvoegsel').value;
    var achternaam = document.getElementById('Achternaam').value;
    var straatnaam = document.getElementById('Straatnaam').value;
    var huisnummer = document.getElementById('Huisnummer').value;
    var postcode = document.getElementById('Postcode').value;
    var land = document.getElementById('Land').value;
    var emailadres = document.getElementById('E-mailadres').value;
    var telefoonnummer = document.getElementById('Telefoonnummer').value;
    var geboortedatum = document.getElementById('Geboortedatum').value;

    // Informatie opslaan in localStorage
    localStorage.setItem('aanhef', aanhef);
    localStorage.setItem('voornaam', voornaam);
    localStorage.setItem('tussenvoegsel', tussenvoegsel);
    localStorage.setItem('achternaam', achternaam);
    localStorage.setItem('straatnaam', straatnaam);
    localStorage.setItem('huisnummer', huisnummer);
    localStorage.setItem('postcode', postcode);
    localStorage.setItem('land', land);
    localStorage.setItem('emailadres', emailadres);
    localStorage.setItem('telefoonnummer', telefoonnummer);
    localStorage.setItem('geboortedatum', geboortedatum);

    // Navigeer naar gekocht.html pagina


    if(voornaam === '') {
    alert('Voornaam is verplicht');
    return false;
  }
  if(achternaam === '') {
    alert('Achternaam is verplicht');
    return false;
  }
  if(straatnaam === '') {
    alert('Straatnaam is verplicht');
    return false;
  }
  if(huisnummer === '') {
    alert('Huisnummer is verplicht');
    return false;
  }
  if(postcode === '') {
    alert('Postcode is verplicht');
    return false;
  }
  if(land === '') {
    alert('Land is verplicht');
    return false;
  }
  if(emailadres === '') {
    alert('Emailadres is verplicht');
    return false;
  }
  if(voornaam && achternaam && straatnaam && huisnummer && postcode && land && emailadres) {
    window.location.href = 'gekocht.php';
  }

}


</script>                                                     
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
