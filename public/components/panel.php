<style>
    nav {
        position: fixed;
        top: 50px;
        left: 0;
        width: 300px;
        height: 100vh;
        background-color: rgb(46, 50, 62);
        box-shadow: 0 0 4px rgb(3, 155, 230);
    }
    a.menuItem {
        display: block;
        background-color: rgb(40, 44, 55);
        color: rgb(235, 235, 235);
        text-decoration: none;
        padding: 10px;
        margin-top: 3px;
        transition-duration: 600ms;
    }
    a.menuItem:hover {
        background-color: rgb(3, 155, 230);
        color: rgb(255, 255, 255);
        padding-left: 30px;
    }
    a.activeMenu {
        background-color: rgb(3, 155, 230);
        color: rgb(255, 255, 255);
    }
    img.menuIcon {
       height: 1.8em;
       vertical-align: middle;
       margin-right: 10px;
    }
</style>
<nav>
    <a href="<?$_SERVER['SERVER_NAME']?>/API/index.php" class="menuItem">
        <img src="<?$_SERVER['SERVER_NAME']?>/public/img/icons/api.png" class="menuIcon">
         API
    </a>
    <a href="<?$_SERVER['SERVER_NAME']?>/stickers/index.php" class="menuItem">
        <img src="<?$_SERVER['SERVER_NAME']?>/public/img/icons/barcode.png" class="menuIcon">
         Наклейки
    </a>
    <a href="<?$_SERVER['SERVER_NAME']?>/wechat/index.php" class="menuItem">
        <img src="<?$_SERVER['SERVER_NAME']?>/public/img/icons/wechat.png" class="menuIcon">
         Wechat</a>
    <a href="<?$_SERVER['SERVER_NAME']?>/kuaidi/index.php" class="menuItem">
        <img src="<?$_SERVER['SERVER_NAME']?>/public/img/icons/scanner.png" class="menuIcon">
         Принять</a>
    <a href="<?$_SERVER['SERVER_NAME']?>/dispatch/index.php" class="menuItem">
        <img src="<?$_SERVER['SERVER_NAME']?>/public/img/icons/box.png" class="menuIcon">
         Посылки</a>
    <a href="<?$_SERVER['SERVER_NAME']?>/dispatch/countries.php" class="menuItem">
        <img src="<?$_SERVER['SERVER_NAME']?>/public/img/icons/planet.png" class="menuIcon">
         Страны
    </a>
</nav>