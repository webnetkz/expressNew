<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$title?></title>

        <meta charset="UTF-8">
        <meta name="theme-color" content="rgb(0, 0, 0)">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="<?=$url?>/public/img/miniLogo.png" type="image/png">
        <link rel="apple-touch-icon" href="<?=$url?>/public/img/logo.png">
        <link rel="stylesheet" type="text/css" href="<?=$url?>/public/css/style.css">
        <link rel="stylesheet" href="<?=$url?>/public/css/mobileStyle.css">
        <link rel="manifest" href="<?=$url?>/public/json/manifest.json"> 
      </head>

    <body>
<style>
    header {
       position: fixed;
       top: 0;
       left: 0;
       width: 100vw;
       height: 50px;
       box-shadow: 0 0 6px rgb(0, 0, 0);
       background-color: rgb(255, 255, 255);
    }
    header > .logo {
        background-color: rgb(56, 60, 72);
        position: fixed;
        top: 0;
        left: 0;
        width: 300px;
        height: 50px;
        box-shadow: 0 0 3px rgb(20, 20, 20); 
    }
    header > .logo > span {
        color: rgb(255, 255, 255);
        line-height: 50px;
        font-weight: 700;
        margin-left: 80px;
        padding: 6px;
        border-radius: 5px;
        background-color: rgb(3, 155, 230);
    }
    header > .logo > b {
        color: rgb(255, 255, 255);
        line-height: 50px;
        font-weight: 100;
        margin-left: 3px;
    }
</style>
<header>
    <div class="logo" onclick="location.href = '<?=$url?>/index'">
        <span>DWE</span><b>xpress</b>
    </div>
</header>