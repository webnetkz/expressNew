<?php

require_once '../../config.php';

    // Получение кодов
    $tmp = $pdo->query('SELECT BarCode FROM dispatch_for_kp');
    $tmp = $tmp->fetchAll(PDO::FETCH_ASSOC);

    foreach($tmp as $k => $v) {
        $content .= "<a href='kp_cn22?code=".$v['BarCode']."' class='list'>".$v['BarCode']."</a>";
    }

require_once "../../public/components/header.php"; 
require_once "../../public/components/panel.php"; 
require_once "../../public/components/content.php"; 
require_once "../../public/components/footer.php"; 
