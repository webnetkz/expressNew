<style>
    section {
        position: fixed;
        top: 50px;
        left: 300px;
        padding: 20px;
        width: calc(100vw - 300px);
        height: calc(100vh - 50px);
        background-color: rgb(238, 238, 238);
        animation: showContent 300ms linear;
        z-index: -1
    }
    .list {
        display: block;
        width: 90%;
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
</style>
<section>
    <?php
        echo $content;
    ?>
</section>