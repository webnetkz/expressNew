<?php

    $content = '<a href="kp.php">
                    <div class="cart">
                        <img src="http://'.$_SERVER['SERVER_NAME'].'/public/img/carts/kp.png" class="cartBg">
                    </div>
                </a>';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DWExpress KP</title>

        <meta charset="UTF-8">
        <meta name="theme-color" content="rgb(0, 0, 0)">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="/public/img/miniLogo.png" type="image/png">
        <link rel="apple-touch-icon" href="/public/img/logo.png">
        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <link rel="stylesheet" href="/public/css/mobileStyle.css">
        <link rel="manifest" href="/public/json/manifest.json"> 
      </head>

    <body>
        <?php require_once "../public/components/header.php"; ?>
        <?php require_once "../public/components/panel.php"; ?>
        <?php require_once "../public/components/content.php"; ?>
        <?php require_once "../public/components/footer.php"; ?>

    <script>
        document.querySelector('a[href="<?$_SERVER['SERVER_NAME']?>/stickers/index.php"]').classList.add('activeMenu');
    </script>
