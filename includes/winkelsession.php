<?php
// box 1 tot 5 available variable aanmaken
// Controleer of $_SESSION['Box1Available'] al is ingesteld
if(!isset($_SESSION['Box1Available'])) {
  $_SESSION['Box1Available'] = true;
}
if(!isset($_SESSION['Box2Available'])) {
  $_SESSION['Box2Available'] = true;
}
if(!isset($_SESSION['Box3Available'])) {
  $_SESSION['Box3Available'] = true;
}
if(!isset($_SESSION['Box4Available'])) {
  $_SESSION['Box4Available'] = true;
}
if(!isset($_SESSION['Box5Available'])) {
  $_SESSION['Box5Available'] = true;
}


// counter voor om te weten als een product al in een box zit
if (!isset($_SESSION['counter1'])) {
  $_SESSION['counter1'] = 0;
}
if (!isset($_SESSION['counter2'])) {
  $_SESSION['counter2'] = 0;
}
if (!isset($_SESSION['counter3'])) {
  $_SESSION['counter3'] = 0;
}
if (!isset($_SESSION['counter4'])) {
  $_SESSION['counter4'] = 0;
}
if (!isset($_SESSION['counter5'])) {
  $_SESSION['counter5'] = 0;
}
if (!isset($_SESSION['counter6'])) {
  $_SESSION['counter6'] = 0;
}
if (!isset($_SESSION['counter7'])) {
  $_SESSION['counter7'] = 0;
}
if (!isset($_SESSION['counter8'])) {
  $_SESSION['counter8'] = 0;
}
if (!isset($_SESSION['counter9'])) {
  $_SESSION['counter9'] = 0;
}
if (!isset($_SESSION['counter10'])) {
  $_SESSION['counter10'] = 0;
}
if (!isset($_SESSION['counter11'])) {
  $_SESSION['counter11'] = 0;
}
if (!isset($_SESSION['counter12'])) {
  $_SESSION['counter12'] = 0;
}
if (!isset($_SESSION['counter13'])) {
  $_SESSION['counter13'] = 0;
}
if (!isset($_SESSION['counter14'])) {
  $_SESSION['counter14'] = 0;
}
if (!isset($_SESSION['counter15'])) {
  $_SESSION['counter15'] = 0;
}
if (!isset($_SESSION['counter16'])) {
  $_SESSION['counter16'] = 0;
}
if (!isset($_SESSION['counter17'])) {
  $_SESSION['counter17'] = 0;
}
if (!isset($_SESSION['counter18'])) {
  $_SESSION['counter18'] = 0;
}
if (!isset($_SESSION['counter19'])) {
  $_SESSION['counter19'] = 0;
}
if (!isset($_SESSION['counter20'])) {
  $_SESSION['counter20'] = 0;
}


// als er op de plus button word geklikt dan gaat de quantities omhoog behalve als het boven de 9 is ( voor de 5 boxes)
if(isset($_GET["ButtonPlus1"]) && $_GET["ButtonPlus1"] == 1){
  if(isset($_SESSION['QuantitiesV1']) && $_SESSION['QuantitiesV1'] >= 1 && $_SESSION['QuantitiesV1'] <= 9) {
    // Verhoog de waarde met 1
    $_SESSION['QuantitiesV1']++;
}
if($_SESSION['QuantitiesV1'] > 9){
  $_SESSION['QuantitiesV1'] = 9;
}
}

if(isset($_GET["ButtonPlus2"]) && $_GET["ButtonPlus2"] == 1){
  if(isset($_SESSION['QuantitiesV2']) && $_SESSION['QuantitiesV2'] >= 1 && $_SESSION['QuantitiesV2'] <= 9) {
    // Verhoog de waarde met 1
    $_SESSION['QuantitiesV2']++;
}
if($_SESSION['QuantitiesV2'] > 9){
  $_SESSION['QuantitiesV2'] = 9;
}
}

if(isset($_GET["ButtonPlus3"]) && $_GET["ButtonPlus3"] == 1){
  if(isset($_SESSION['QuantitiesV3']) && $_SESSION['QuantitiesV3'] >= 1 && $_SESSION['QuantitiesV3'] <= 9) {
    // Verhoog de waarde met 1
    $_SESSION['QuantitiesV3']++;
}
if($_SESSION['QuantitiesV3'] > 9){
  $_SESSION['QuantitiesV3'] = 9;
}
}

if(isset($_GET["ButtonPlus4"]) && $_GET["ButtonPlus4"] == 1){
  if(isset($_SESSION['QuantitiesV4']) && $_SESSION['QuantitiesV4'] >= 1 && $_SESSION['QuantitiesV4'] <= 9) {
    // Verhoog de waarde met 1
    $_SESSION['QuantitiesV4']++;
}
if($_SESSION['QuantitiesV4'] > 9){
  $_SESSION['QuantitiesV4'] = 9;
}
}

if(isset($_GET["ButtonPlus5"]) && $_GET["ButtonPlus5"] == 1){
  if(isset($_SESSION['QuantitiesV5']) && $_SESSION['QuantitiesV5'] >= 1 && $_SESSION['QuantitiesV5'] <= 9) {
    // Verhoog de waarde met 1
    $_SESSION['QuantitiesV5']++;
}
if($_SESSION['QuantitiesV5'] > 9){
  $_SESSION['QuantitiesV5'] = 9;
}
}


// dit is om te weten welke id er in welke box zit ( voor de gekocht.php)
if(isset($_GET["id"]) && $_GET["id"] == 1){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 1;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 1;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 1;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 1;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 1;
  }
}
if(isset($_GET["id"]) && $_GET["id"] == 2){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 2;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 2;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 2;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 2;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 2;
  }

}
if(isset($_GET["id"]) && $_GET["id"] == 3){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 3;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 3;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 3;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 3;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 3;
  }

}
// Add product with id 4
if(isset($_GET["id"]) && $_GET["id"] == 4){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 4;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 4;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 4;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 4;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 4;
  }

}

// Add product with id 5 
if(isset($_GET["id"]) && $_GET["id"] == 5){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 5;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 5;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 5;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 5;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 5;
  }

}

// Add product with id 6
if(isset($_GET["id"]) && $_GET["id"] == 6){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 6;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 6;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 6;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 6;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 6;
  }

}
// Add product with id 7
if(isset($_GET["id"]) && $_GET["id"] == 7){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 7;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 7;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 7;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 7;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 7;
  }

}

// Add product with id 8
if(isset($_GET["id"]) && $_GET["id"] == 8){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 8;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 8;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 8;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 8;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 8;
  }

}

// Add product with id 9
if(isset($_GET["id"]) && $_GET["id"] == 9){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 9;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 9;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 9;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 9;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 9;
  }

}

// Add product with id 10  
if(isset($_GET["id"]) && $_GET["id"] == 10){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 10;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 10;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 10;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 10;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 10;
  }

}
// Add product with id 11  
if(isset($_GET["id"]) && $_GET["id"] == 11){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 11;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 11;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 11;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 11;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 11;
  }

}
// Add product with id 12
if(isset($_GET["id"]) && $_GET["id"] == 12){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 12;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 12;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 12;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 12;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 12;
  }

}

// Add product with id 13
if(isset($_GET["id"]) && $_GET["id"] == 13){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 13;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 13;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 13;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 13;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 13;
  }

}

// Add product with id 14
if(isset($_GET["id"]) && $_GET["id"] == 14){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 14;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 14;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 14;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 14;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 14;
  }

}

// Add product with id 15
if(isset($_GET["id"]) && $_GET["id"] == 15){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 15;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 15;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 15;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 15;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 15;
  }

}
// Add product with id 16
if(isset($_GET["id"]) && $_GET["id"] == 16){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 16;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 16;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 16;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 16;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 16;
  }

}

// Add product with id 17
if(isset($_GET["id"]) && $_GET["id"] == 17){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 17;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 17;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 17;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 17;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 17;
  }

}

// Add product with id 18
if(isset($_GET["id"]) && $_GET["id"] == 18){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 18;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 18;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 18;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 18;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 18;
  }

}

// Add product with id 19
if(isset($_GET["id"]) && $_GET["id"] == 19){

  if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV1'] = 19;

  } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV2'] = 19;
  
  } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV3'] = 19;

  } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV4'] = 19;

  }else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
    $_SESSION['idV5'] = 19;
  }

}
include("connection.inc.php");



if(isset($_GET["id"]) && $_GET["id"] == 1) {
  $productId = 1;
  $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();

      if($_SESSION['Box1Available'] && $_SESSION['counter1'] == 0) {
          $_SESSION['TitleV1'] = $row['product_naam'];
          $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
          $_SESSION['PriceV1'] = $row['product_prijs'];
          $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
          $_SESSION['QuantitiesV1'] = "1";
          $_SESSION['Box1Available'] = false;
          $_SESSION['counter1']++;
      } else if($_SESSION['Box2Available'] && $_SESSION['counter1'] == 0){
          $_SESSION['TitleV2'] = $row['product_naam'];
          $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
          $_SESSION['PriceV2'] = $row['product_prijs'];
          $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
          $_SESSION['QuantitiesV2'] = "1";
          $_SESSION['Box2Available'] = false;
          $_SESSION['counter1']++;
      } else if($_SESSION['Box3Available'] && $_SESSION['counter1'] == 0){
          $_SESSION['TitleV3'] = $row['product_naam'];
          $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
          $_SESSION['PriceV3'] = $row['product_prijs'];
          $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
          $_SESSION['QuantitiesV3'] = "1";
          $_SESSION['Box3Available'] = false;
          $_SESSION['counter1']++;
      } else if($_SESSION['Box4Available'] && $_SESSION['counter1'] == 0){
          $_SESSION['TitleV4'] = $row['product_naam'];
          $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
          $_SESSION['PriceV4'] = $row['product_prijs'];
          $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
          $_SESSION['QuantitiesV4'] = "1";
          $_SESSION['Box4Available'] = false;
          $_SESSION['counter4']++;
      } else if($_SESSION['Box5Available'] && $_SESSION['counter1'] == 0){
          $_SESSION['TitleV5'] = $row['product_naam'];
          $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
          $_SESSION['PriceV5'] = $row['product_prijs'];
          $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
          $_SESSION['QuantitiesV5'] = "1";
          $_SESSION['Box5Available'] = false;
          $_SESSION['counter5']++;
      }
  }
}

  if(isset($_GET["id"]) && $_GET["id"] == 2) {
    $productId = 2;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter2'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter2']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter2'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter2']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter2'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter2']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter2'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter2']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter2'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter2']++;
        }
    }
  }

  
  if(isset($_GET["id"]) && $_GET["id"] == 3) {
    $productId = 3;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter3'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter3']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter3'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter3']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter3'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter3']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter3'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter3']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter3'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter3']++;
        }
    }
  }

  
  if(isset($_GET["id"]) && $_GET["id"] == 4) {
    $productId = 4;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter4'] == 0) {
          $_SESSION['TitleV1'] = $row['product_naam'];
          $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
          $_SESSION['PriceV1'] = $row['product_prijs'];
          // $_SESSION['ImgV1'] = "sprite/paard2.png";
          $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
          // $_SESSION['ImgV1'] = 'sprite/' . trim($row['foto_1']);
          $_SESSION['QuantitiesV1'] = "1";
          $_SESSION['Box1Available'] = false;
          $_SESSION['counter4']++;
          
      } else if($_SESSION['Box2Available'] && $_SESSION['counter4'] == 0){
          $_SESSION['TitleV2'] = $row['product_naam'];
          $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
          $_SESSION['PriceV2'] = $row['product_prijs'];
          $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
          $_SESSION['QuantitiesV2'] = "1";
          $_SESSION['Box2Available'] = false;
          $_SESSION['counter4']++;
         
      } else if($_SESSION['Box3Available'] && $_SESSION['counter4'] == 0){
          $_SESSION['TitleV3'] = $row['product_naam'];
          $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
          $_SESSION['PriceV3'] = $row['product_prijs'];
          $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
          $_SESSION['QuantitiesV3'] = "1";
          $_SESSION['Box3Available'] = false;
          $_SESSION['counter4']++;
      } else if($_SESSION['Box4Available'] && $_SESSION['counter4'] == 0){
          $_SESSION['TitleV4'] = $row['product_naam'];
          $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
          $_SESSION['PriceV4'] = $row['product_prijs'];
          $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
          $_SESSION['QuantitiesV4'] = "1";
          $_SESSION['Box4Available'] = false;
          $_SESSION['counter4']++;
      } else if($_SESSION['Box5Available'] && $_SESSION['counter4'] == 0){
          $_SESSION['TitleV5'] = $row['product_naam'];
          $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
          $_SESSION['PriceV5'] = $row['product_prijs'];
          $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
          $_SESSION['QuantitiesV5'] = "1";
          $_SESSION['Box5Available'] = false;
          $_SESSION['counter']++;
      }
    }
  }

  if(isset($_GET["id"]) && $_GET["id"] == 5) {
    $productId = 5;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter5'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter5']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter5'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter5']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter5'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter5']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter5'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter5']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter5'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter5']++;
        }
    }
  }
  
  if(isset($_GET["id"]) && $_GET["id"] == 6) {
    $productId = 6;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter6'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter6']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter6'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter6']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter6'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter6']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter6'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter6']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter6'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter6']++;
        }
    }
  }
  
  if(isset($_GET["id"]) && $_GET["id"] == 7) {
    $productId = 7;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter7'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter7']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter7'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter7']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter7'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter7']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter7'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter7']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter7'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter7']++;
        }
    }
  }
  
  if(isset($_GET["id"]) && $_GET["id"] == 8) {
    $productId = 8;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter8'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter8']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter8'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter8']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter8'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter8']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter8'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter8']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter8'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter8']++;
        }
    }
  }
  
  if(isset($_GET["id"]) && $_GET["id"] == 9) {
    $productId = 9;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter9'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter9']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter9'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter9']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter9'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter9']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter9'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter9']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter9'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter9']++;
        }
    }
  }
  
  if(isset($_GET["id"]) && $_GET["id"] == 10) {
    $productId = 10;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter10'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter10']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter10'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter10']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter10'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter10']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter10'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter10']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter10'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter10']++;
        }
    }
  }
  

  if(isset($_GET["id"]) && $_GET["id"] == 11) {
    $productId = 11;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter11'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter11']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter11'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter11']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter11'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter11']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter11'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter11']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter11'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter11']++;
        }
    }
  }
  
  if(isset($_GET["id"]) && $_GET["id"] == 12) {
    $productId = 12;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter12'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter12']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter12'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter12']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter12'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter12']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter12'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter12']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter12'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter12']++;
        }
    }
  }
  
  if(isset($_GET["id"]) && $_GET["id"] == 13) {
    $productId = 13;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter13'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter13']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter13'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter13']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter13'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter13']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter13'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter13']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter13'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter13']++;
        }
    }
  }
  
  if(isset($_GET["id"]) && $_GET["id"] == 14) {
    $productId = 14;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter14'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter14']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter14'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter14']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter14'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter14']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter14'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter14']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter14'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter14']++;
        }
    }
  }
  
  if(isset($_GET["id"]) && $_GET["id"] == 15) {
    $productId = 15;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter15'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter15']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter15'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter15']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter15'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter15']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter15'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter15']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter15'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter15']++;
        }
    }
  }
  
  if(isset($_GET["id"]) && $_GET["id"] == 16) {
    $productId = 16;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter16'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter16']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter16'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter16']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter16'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter16']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter16'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter16']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter16'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter16']++;
        }
    }
  }
  
  if(isset($_GET["id"]) && $_GET["id"] == 17) {
    $productId = 17;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter17'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter17']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter17'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter17']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter17'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter17']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter17'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter17']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter17'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter17']++;
        }
    }
  }
  
  if(isset($_GET["id"]) && $_GET["id"] == 18) {
    $productId = 18;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter18'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter18']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter18'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter18']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter18'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter18']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter18'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter18']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter18'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter18']++;
        }
    }
  }
  
  if(isset($_GET["id"]) && $_GET["id"] == 19) {
    $productId = 19;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter19'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter19']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter19'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter19']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter19'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter19']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter19'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter19']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter19'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter19']++;
        }
    }
  }
  
  if(isset($_GET["id"]) && $_GET["id"] == 20) {
    $productId = 20;
    $sql = "SELECT product_naam, product_kleinbio, product_prijs, foto_1 FROM producten WHERE id = $productId";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if($_SESSION['Box1Available'] && $_SESSION['counter20'] == 0) {
            $_SESSION['TitleV1'] = $row['product_naam'];
            $_SESSION['DescriptionV1'] = $row['product_kleinbio'];
            $_SESSION['PriceV1'] = $row['product_prijs'];
            $_SESSION['ImgV1'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV1'] = "1";
            $_SESSION['Box1Available'] = false;
            $_SESSION['counter20']++;
        } else if($_SESSION['Box2Available'] && $_SESSION['counter20'] == 0){
            $_SESSION['TitleV2'] = $row['product_naam'];
            $_SESSION['DescriptionV2'] = $row['product_kleinbio'];
            $_SESSION['PriceV2'] = $row['product_prijs'];
            $_SESSION['ImgV2'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV2'] = "1";
            $_SESSION['Box2Available'] = false;
            $_SESSION['counter20']++;
        } else if($_SESSION['Box3Available'] && $_SESSION['counter20'] == 0){
            $_SESSION['TitleV3'] = $row['product_naam'];
            $_SESSION['DescriptionV3'] = $row['product_kleinbio'];
            $_SESSION['PriceV3'] = $row['product_prijs'];
            $_SESSION['ImgV3'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV3'] = "1";
            $_SESSION['Box3Available'] = false;
            $_SESSION['counter20']++;
        } else if($_SESSION['Box4Available'] && $_SESSION['counter20'] == 0){
            $_SESSION['TitleV4'] = $row['product_naam'];
            $_SESSION['DescriptionV4'] = $row['product_kleinbio'];
            $_SESSION['PriceV4'] = $row['product_prijs'];
            $_SESSION['ImgV4'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV4'] = "1";
            $_SESSION['Box4Available'] = false;
            $_SESSION['counter20']++;
        } else if($_SESSION['Box5Available'] && $_SESSION['counter20'] == 0){
            $_SESSION['TitleV5'] = $row['product_naam'];
            $_SESSION['DescriptionV5'] = $row['product_kleinbio'];
            $_SESSION['PriceV5'] = $row['product_prijs'];
            $_SESSION['ImgV5'] = 'sprite/' . $row['foto_1'];
            $_SESSION['QuantitiesV5'] = "1";
            $_SESSION['Box5Available'] = false;
            $_SESSION['counter20']++;
        }
    }
  }
  


  // dit is om de totaalbedragen te berekenen van elk product en deze te tonen in de pagina. En het zorgt ervoor dat de , en . op de goede plaats staat.
  if(!$_SESSION['Box1Available']) {
    $priceV1 = floatval($_SESSION['PriceV1']);
    $quantityV1 = floatval($_SESSION['QuantitiesV1']);
    $totalPrice1T = ($priceV1 * $quantityV1);
    $totalPrice1 = number_format($priceV1 * $quantityV1, 2, ",", ".");
    
    $_SESSION['TotalPriceV1'] = $totalPrice1;
    }
    if(!$_SESSION['Box2Available']) {
      $priceV2 = floatval($_SESSION['PriceV2']);
      $quantityV2 = floatval($_SESSION['QuantitiesV2']);
      
      $totalPrice2T = ($priceV2 * $quantityV2);
      $totalPrice2 = number_format($priceV2 * $quantityV2, 2, ",", ".");
      
      $_SESSION['TotalPriceV2'] = $totalPrice2;
      }
// Box 3
if(!$_SESSION['Box3Available']) {
  $priceV3 = floatval($_SESSION['PriceV3']);
  $quantityV3 = floatval($_SESSION['QuantitiesV3']);

  $totalPrice3T = ($priceV3 * $quantityV3);
  $totalPrice3 = number_format($priceV3 * $quantityV3, 2, ",", ".");

  $_SESSION['TotalPriceV3'] = $totalPrice3;
}

// Box 4  
if(!$_SESSION['Box4Available']) {
  $priceV4 = floatval($_SESSION['PriceV4']);
  $quantityV4 = floatval($_SESSION['QuantitiesV4']);

  $totalPrice4T = ($priceV4 * $quantityV4);
  $totalPrice4 = number_format($priceV4 * $quantityV4, 2, ",", ".");

  $_SESSION['TotalPriceV4'] = $totalPrice4;
}

// Box 5
if(!$_SESSION['Box5Available']) {
  $priceV5 = floatval($_SESSION['PriceV5']);
  $quantityV5 = floatval($_SESSION['QuantitiesV5']);

  $totalPrice5T = ($priceV5 * $quantityV5);
  $totalPrice5 = number_format($priceV5 * $quantityV5, 2, ",", ".");

  $_SESSION['TotalPriceV5'] = $totalPrice5; 
}
// als box1 true is en box2 niet dan kan ik de total berekenen. dit is om de errors te voorkomen

if(!$_SESSION['Box1Available'] && $_SESSION['Box2Available']) {

 $total = $totalPrice1T;
  
}

// Box 2
if(!$_SESSION['Box2Available'] && $_SESSION['Box3Available']) {
 
  $total = ($totalPrice1T + $totalPrice2T);
  
}

// Box 3
if(!$_SESSION['Box3Available'] && $_SESSION['Box4Available']) {

  $total = ($totalPrice1T + $totalPrice2T + $totalPrice3T);
 
}

// Box 4
if(!$_SESSION['Box4Available'] && $_SESSION['Box5Available']) {

  $total = ($totalPrice1T + $totalPrice2T + $totalPrice3T + $totalPrice4T);
  
}

// Box 5
if(!$_SESSION['Box5Available']) {

$total = ($totalPrice1T + $totalPrice2T + $totalPrice3T + $totalPrice4T + $totalPrice5T);
  
}

// dit is om het totaal te berekenen en , en .  op de goeie plaats te zetten.  en btw berekenen
if(!$_SESSION['Box1Available']){
  $totalF = str_replace(['.', ','], '', $total);
  $totalF = (float)$totalF / 100; 
  $_SESSION['TotalPriceAllV'] = number_format($totalF, 2, ',', '.');
  
$btw = 1.21;

$btwprijsF = $totalF * $btw;
$btwprijsO = $btwprijsF - $totalF;
$_SESSION['TotalPriceAllBTWV'] = number_format($btwprijsF, 2, ',', '.');
$_SESSION['TotalPriceOnlyBTWV'] = number_format($btwprijsO, 2, ',', '.');



}


?>