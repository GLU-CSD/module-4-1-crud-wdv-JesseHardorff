 <!-- De eerste/bovenste Rechthoek  -->
 <div id="RH1">
  <!-- De select box voor de talen -->
    <label for="talen">Uw taal:</label>
    <select name="talen" id="talen">
      <option value="Nederlands">Nederlands</option>
      <option value="English">English</option>
      <option value="Deutsch">Deutsch</option>
      <option value="Français">Français</option>
    </select>
    <!-- Account info (laat ik later werken) -->
    <div id="Acc">
      <u>Mijn account  | Afrekenen  | Inloggen</u>
    </div>
  </div>
  <!-- De 2de Rechthoek -->
    <div id="RH2">
      <!-- Logo -->
      <div id="logo">
        <img src="https://pbs.twimg.com/profile_images/1111358867106074626/YbFzUoN-_400x400.jpg" alt="logo" width="40" height="40">Logo
      </div>
      <!-- De menu. Als je ergens op klikt dan word je naar een website gestuurd -->
      <div id="menu">
        <a href="index.php" class="menu-item">Home</a>
        <a href="#" class="menu-item" onclick="redirectToMuurdecoratie()">Muurdecoratie</a>
        <a href="#" class="menu-item" onclick="redirectToDoosjes()">Doosjes</a>
        <a href="#" class="menu-item" onclick="redirectToOpbergers()">Opbergers</a>
        <a href="#" class="menu-item" onclick="redirectToStools()">Stools</a>
        <a href="lmao.php" class="menu-item" >Gadgets</a>
      </div>  
      
    <!-- Paar blauwe containers om paar woorden.( Winkelwagen ga ik laten werken) -->
      <div class="SVW">
       <p><span class="container p1">Search</span></p>
        <p><span class="container p2">Vergelijk</span></p>
        <a href="winkelwagen.php" onclick="refreshTotal()  "><span class="container p3">Winkelwagen</span></a>
        </div>
        <div id="WinkelwagenCounter">
          <p>(2)</p>
        </div>
    </div>