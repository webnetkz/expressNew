<?php

require_once '../../config.php';

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

    
    $res = $pdo->query('SELECT * FROM countries;');
    $res = $res->fetchAll(PDO::FETCH_ASSOC);
    foreach($res as $k => $v) {
        $content .= "<tr><td>".$v['code']."</td><td>".$v['name']."</td><td>".$v['fullname']."</td><td>".$v['alpha2']."</td><td>".$v['alpha3']."</td></tr>";
    }

    $content .= '</table>';


    require_once '../../config.php';
    
    require_once "../../public/components/header.php"; 
    require_once "../../public/components/panel.php"; 
    require_once "../../public/components/content.php"; 
    require_once "../../public/components/footer.php";  

?>
    <script>
        let allTr = document.querySelectorAll('tr');
        for(let i = 0; i < allTr.length; i++) {
            if(i % 2) {
                allTr[i].style.backgroundColor = 'rgb(200, 200, 200)';
            }
        }
    </script>
