<style>
    header {
       position: fixed;
       top: 0;
       left: 0;
       width: 100vw;
       height: 50px;
       box-shadow: 0 0 6px rgb(0, 0, 0); 
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
    <div class="logo" onclick="location.href = 'http:\/\/<?=$_SERVER['SERVER_NAME']?>/index.php'">
        <span>DWE</span><b>xpress</b>
    </div>
</header>