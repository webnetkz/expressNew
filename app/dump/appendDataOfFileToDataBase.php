<?php

$res = file_get_contents('public/files/Kpcodes.json');
$res = explode("\n", $res);

foreach($res as $k => $v) {
    $pdo->query('INSERT INTO kp_codes(code) VALUES ("'.$v.'");');
}