<?php

require_once '../../config.php';
$title = 'Wechat';
$content .= '<table style="width: 90%; margin-left: 5%;">';
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

require_once "../../public/components/header.php"; 
require_once "../../public/components/panel.php"; 
require_once "../../public/components/content.php"; 
require_once "../../public/components/footer.php"; 
