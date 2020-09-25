<?php

    require_once "../app/db/db.php";

    $content = '<table style="width: 90%; margin-left: 5%;">';
    $content .= '<tr style="background-color: rgb(3, 155, 230); color: rgb(255, 255, 255);">';
    $content .= '<td style="padding: 4px;">';
    $content .= 'Code';
    $content .= '</td>';
    $content .= '<td style="padding: 4px;">';
    $content .= 'Name';
    $content .= '</td>';
    $content .= '<td style="padding: 4px;">';
    $content .= 'FullName';
    $content .= '</td>';
    $content .= '<td style="padding: 4px;">';
    $content .= 'Alpha2';
    $content .= '</td>';
    $content .= '<td style="padding: 4px;">';
    $content .= 'Alpha3';
    $content .= '</td>';
    $content .= '</tr>';

    
    $res = $pdo->query('SELECT * FROM countries;');
    $res = $res->fetchAll(PDO::FETCH_ASSOC);
    foreach($res as $k => $v) {
        $content .= "<tr><td>".$v['code']."</td><td>".$v['name']."</td><td>".$v['fullname']."</td><td>".$v['alpha2']."</td><td>".$v['alpha3']."</td></tr>";
    }

    $content .= '</table>';

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
        let allTr = document.querySelectorAll('tr');
        for(let i = 0; i < allTr.length; i++) {
            if(i % 2) {
                allTr[i].style.backgroundColor = 'rgb(200, 200, 200)';
            }
        }

    </script>
