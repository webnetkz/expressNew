<?php

    require_once "../app/db/db.php";
    // Получение кодов
    $tmp = $pdo->query('SELECT BarCode FROM dispatch_for_kp');
    $tmp = $tmp->fetchAll(PDO::FETCH_ASSOC);

    foreach($tmp as $k => $v) {
        $content .= "<a href='cn22.php?code=".$v['BarCode']."' class='list'>".$v['BarCode']."</a>";
    }

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

