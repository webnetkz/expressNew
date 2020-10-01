<style>
    nav {
        position: fixed;
        top: 50px;
        left: 0;
        width: 300px;
        height: 100vh;
        background-color: rgb(46, 50, 62);
        box-shadow: 0 0 4px rgb(3, 155, 230);
        z-index: 88;
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
    <a href="<?=$url?>/pages/documentation/index" class="menuItem">
        <img src="<?=$url?>/public/img/icons/planet.png" class="menuIcon">
         Система
    </a>
    <a href="<?=$url?>/pages/dispatch/index" class="menuItem">
        <img src="<?=$url?>/public/img/icons/box.png" class="menuIcon">
         Посылки</a>
    <a href="<?=$url?>/pages/API/index" class="menuItem">
        <img src="<?=$url?>/public/img/icons/api.png" class="menuIcon">
         API
    </a>
    <a href="<?=$url?>/pages/stickers/index" class="menuItem">
        <img src="<?=$url?>/public/img/icons/barcode.png" class="menuIcon">
         Наклейки
    </a>
    <a href="<?=$url?>/pages/wechat/index" class="menuItem">
        <img src="<?=$url?>/public/img/icons/wechat.png" class="menuIcon">
         Wechat</a>
    <a href="<?=$url?>/pages/acceptance/index" class="menuItem">
        <img src="<?=$url?>/public/img/icons/scanner.png" class="menuIcon">
         Принять</a>
    <a href="<?=$url?>/pages/dispatch/countries" class="menuItem">
        <img src="<?=$url?>/public/img/icons/countries.png" class="menuIcon">
         Страны
    </a>
</nav>