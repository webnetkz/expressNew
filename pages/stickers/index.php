<?php

require_once '../../config.php';

    $content .= '<a href="kp" style="text-decoration: none;">
                    <div class="cart">
                        <img src="http://'.$_SERVER['SERVER_NAME'].'/public/img/carts/kp.png" class="cartBg">
                    </div>
                </a>';
    $content .= '<a href="dwe" style="text-decoration: none;">
                    <div class="cart">
                        <img src="http://'.$_SERVER['SERVER_NAME'].'/public/img/carts/dwe.png" class="cartBg">
                    </div>
                </a>';

require_once "../../public/components/header.php"; 
require_once "../../public/components/panel.php"; 
require_once "../../public/components/content.php"; 
require_once "../../public/components/footer.php"; 