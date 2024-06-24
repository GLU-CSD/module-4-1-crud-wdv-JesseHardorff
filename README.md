
## Benodigheden
Zorg dat je XAMPP hebt geinstaleerd

Zorg dat je vscode hebt geinstaleerd

## Starten van admin panel

In de database map staat een bestand genaamd backup.sql

Zorg dat je die import in je phpmyadmin en noem hem mywebshop

Als je hem niet mywebshop wil/kan noemen zorg dan dat je in de folder core in bestand db_connect.php de $dbname naar jouw genoemde database naam verandert.

In de folder core in bestand db_connect.php moet je regel 20 en 21 naar de links die voor jou werken veranderen

bij mij ziet het er zo uit
define("BASEURL","http://localhost/module2/adminwebshop/");
define("BASEURL_CMS","http://localhost/module2/adminwebshop/admin/");

maar zorg dat je hem naar jouw links verandert

Ga nu naar de folder admin -> core -> header.php. Zorg dat je de link in regel 2 verandert naar de link die voor jou werkt

Zorg dat je in XAMPP MySQL en Apache aan hebt staan

## Admin panel zoeken
als je in je browser de folder opzoekt die je hebt gedownload dan kom je bij de product overzicht pagina.( dat ziet er bij mij zo uit http://localhost/module2/adminwebshop/  )

Als je naar de admin panel wil doen dan achter de link van wat je net hebt gedaan /admin/ achter
( dat ziet er bij mij zo uit http://localhost/module2/adminwebshop/admin/  )

## Admin panel gebruiken

Druk op producten om de CRUD van de producten te zien en druk op blogs om de CRUD van blogs te zien

In blogs kan je inloggen. Als je geen account hebt dan kan je op registreren drukken. Maak dan een account

Als je nu Add blog doet dan staat de naam er al automatisch.

Druk op uitloggen om uit te loggen zodat je de naam nog kan aanpassen






