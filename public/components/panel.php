<style>
    nav {
        position: fixed;
        top: 50px;
        left: 0;
        width: 300px;
        height: 100vh;
        background-color: rgb(46, 50, 62);
    }
    nav > a.menuItem {
        display: block;
        background-color: rgb(40, 44, 55);
        color: rgb(255, 255, 255);
        text-decoration: none;
        padding: 10px;
        margin-top: 3px;
        transition-duration: 600ms;
    }
    nav > a.menuItem:hover {
        background-color: rgb(3, 155, 230);
        color: rgb(255, 255, 255);
    }
</style>
<nav>
    <a href="<?$_SERVER['SERVER_NAME']?>/kp/index.php" class="menuItem">Наклейки КП</a>
    <a href="<?$_SERVER['SERVER_NAME']?>/wechat/index.php" class="menuItem">Wechat</a>
    <a href="<?$_SERVER['SERVER_NAME']?>/kuaidi/index.php" class="menuItem">Принять по Kuaidi</a>
    <a href="<?$_SERVER['SERVER_NAME']?>/dispatch/index.php" class="menuItem">Посылки</a>
    <a href="<?$_SERVER['SERVER_NAME']?>/dispatch/countries.php" class="menuItem">Страны</a>
</nav>