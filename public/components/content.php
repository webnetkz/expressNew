<style>
    section {
        position: fixed;
        top: 55px;
        left: 300px;
        width: calc(100vw - 300px);
        height: calc(100vh - 100px);
        background-color: rgb(238, 238, 238);
        animation: showContent 300ms linear;
        z-index: 1;
        overflow-Y: auto;
        padding-bottom: 50px;
    }
    .list {
        display: block;
        width: calc(100% - 60px);
        padding: 5px;
        background-color: rgb(255, 255, 255);
        margin: 5px;
        text-decoration: none;
        color: rgb(108, 108, 108);
        box-shadow: 1 1 1px rgb(90, 90, 90);
        transition-duration: 400ms;
    }
    .list:hover {
        color: rgb(255, 255, 255);
        background-color: rgb(3, 155, 230);
    }
    td {
        padding: 5px;
    }
    tr {
        transition-duration: 500ms;
    }
    tr:hover {
        background-color: rgb(180, 180, 180);
        transform: scale(1.1);
    }
    .cart {
        display: inline-block;
        border-radius: 10px;
        box-shadow: 0 0 10px rgb(100, 100, 100);
        margin-left: 30px;
        margin-top: 30px;
        width: 200px;
        height: 100px;
    }
    .cart:hover {
        box-shadow: 0 0 0 rgb(100, 100, 100);
    }
    .cartBg {
        width: 100%;
        height: 100%;
        border-radius: 10px;
    }
</style>
<section style="padding: 10px 10px 200px 10px ;">
    <?php
        echo $content;
    ?>
</section>