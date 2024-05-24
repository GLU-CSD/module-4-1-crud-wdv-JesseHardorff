<script>
document.getElementById("title1").innerText = "<?php echo $_SESSION['TitleV1']; ?>";
document.getElementById("price1").innerText = "<?php echo '$'.$_SESSION['PriceV1']; ?>";
document.getElementById("description1").innerText = "<?php echo $_SESSION['DescriptionV1']; ?>";
document.getElementById("Quantities1").innerText = "<?php echo $_SESSION['QuantitiesV1']; ?>";
document.getElementById("productImage1").setAttribute("src", "<?php echo $_SESSION['ImgV1']; ?>");
document.getElementById("totalprice1").innerText = "<?php echo isset($_SESSION['TotalPriceV1']) ? '$'.$_SESSION['TotalPriceV1'] : ''; ?>";

    
document.getElementById("title2").innerText = "<?php echo isset($_SESSION['TitleV2']) ? $_SESSION['TitleV2'] : ''; ?>";
document.getElementById("price2").innerText = "<?php echo isset($_SESSION['PriceV2']) ? '$'.$_SESSION['PriceV2'] : ''; ?>";
document.getElementById("description2").innerText = "<?php echo isset($_SESSION['DescriptionV2']) ? $_SESSION['DescriptionV2'] : ''; ?>";
document.getElementById("Quantities2").innerText = "<?php echo isset($_SESSION['QuantitiesV2']) ? $_SESSION['QuantitiesV2'] : ''; ?>";
document.getElementById("productImage2").setAttribute("src", "<?php echo isset($_SESSION['ImgV2']) ? $_SESSION['ImgV2'] : ''; ?>");
document.getElementById("totalprice2").innerText = "<?php echo isset($_SESSION['TotalPriceV2']) ? '$'.$_SESSION['TotalPriceV2'] : ''; ?>";

document.getElementById("title3").innerText = "<?php echo isset($_SESSION['TitleV3']) ? $_SESSION['TitleV3'] : ''; ?>";
document.getElementById("price3").innerText = "<?php echo isset($_SESSION['PriceV3']) ? '$'.$_SESSION['PriceV3'] : ''; ?>";
document.getElementById("description3").innerText = "<?php echo isset($_SESSION['DescriptionV3']) ? $_SESSION['DescriptionV3'] : ''; ?>";
document.getElementById("Quantities3").innerText = "<?php echo isset($_SESSION['QuantitiesV3']) ? $_SESSION['QuantitiesV3'] : ''; ?>";
document.getElementById("productImage3").setAttribute("src", "<?php echo isset($_SESSION['ImgV3']) ? $_SESSION['ImgV3'] : ''; ?>");
document.getElementById("totalprice3").innerText = "<?php echo isset($_SESSION['TotalPriceV3']) ? '$'.$_SESSION['TotalPriceV3'] : ''; ?>";

document.getElementById("title4").innerText = "<?php echo isset($_SESSION['TitleV4']) ? $_SESSION['TitleV4'] : ''; ?>";
document.getElementById("price4").innerText = "<?php echo isset($_SESSION['PriceV4']) ? '$'.$_SESSION['PriceV4'] : ''; ?>";
document.getElementById("description4").innerText = "<?php echo isset($_SESSION['DescriptionV4']) ? $_SESSION['DescriptionV4'] : ''; ?>";
document.getElementById("Quantities4").innerText = "<?php echo isset($_SESSION['QuantitiesV4']) ? $_SESSION['QuantitiesV4'] : ''; ?>";
document.getElementById("productImage4").setAttribute("src", "<?php echo isset($_SESSION['ImgV4']) ? $_SESSION['ImgV4'] : ''; ?>");
document.getElementById("totalprice4").innerText = "<?php echo isset($_SESSION['TotalPriceV4']) ? '$'.$_SESSION['TotalPriceV4'] : ''; ?>";

document.getElementById("title5").innerText = "<?php echo isset($_SESSION['TitleV5']) ? $_SESSION['TitleV5'] : ''; ?>";
document.getElementById("price5").innerText = "<?php echo isset($_SESSION['PriceV5']) ? '$'.$_SESSION['PriceV5'] : ''; ?>";
document.getElementById("description5").innerText = "<?php echo isset($_SESSION['DescriptionV5']) ? $_SESSION['DescriptionV5'] : ''; ?>";
document.getElementById("Quantities5").innerText = "<?php echo isset($_SESSION['QuantitiesV5']) ? $_SESSION['QuantitiesV5'] : ''; ?>";
document.getElementById("productImage5").setAttribute("src", "<?php echo isset($_SESSION['ImgV5']) ? $_SESSION['ImgV5'] : ''; ?>");
document.getElementById("totalprice5").innerText = "<?php echo isset($_SESSION['TotalPriceV5']) ? '$'.$_SESSION['TotalPriceV5'] : ''; ?>";
document.getElementById("TotalPriceAll").innerText = "<?php echo isset($_SESSION['TotalPriceAllV']) ? '$'.$_SESSION['TotalPriceAllV'] : ''; ?>";
document.getElementById("TotalPriceAllBTW").innerText = "<?php echo isset($_SESSION['TotalPriceAllV']) ? '$'.$_SESSION['TotalPriceAllBTWV'] : ''; ?>";
</script>