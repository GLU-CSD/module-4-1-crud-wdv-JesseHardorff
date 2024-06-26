<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/Module2/adminwebshop/core/db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL_CMS;?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL_CMS;?>assets/css/style.css">
    
    <title>Admin Panel - Webshop</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="btn-group" role="group">
                <div><a href="<?=BASEURL_CMS;?>users/" class="btn btn-primary">Gebruikers</a></div>
                <div><a href="<?=BASEURL_CMS;?>orders/" class="btn btn-primary">Bestellingen</a></div>
                <div><a href="<?=BASEURL_CMS;?>producten" class="btn btn-primary">Producten</a></div>
                <div><a href="<?=BASEURL_CMS;?>blogs" class="btn btn-primary">Blogs</a></div>
            </div>
        </div>