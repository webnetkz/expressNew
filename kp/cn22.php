<?php

$code = trim($_GET['code']);

require_once "../app/db/db.php";

$data = $pdo->query('SELECT * FROM dispatch_for_kp WHERE BarCode = "'.$code.'"');
$data = $data->fetchAll(PDO::FETCH_ASSOC);
$data = $data[0];

?>
<style>
    * {
        padding: 0;
        margin: 0;
    }
    .all {
        width: 11cm;
        height: 11cm;
        border: 1px solid black;
        box-sizing: border-box;
    }
    header {
        height: 2.1cm;
        border-bottom: 1px solid;
        display: flex;

    }
    .half {
        width: 4.9cm;
        height: 1.4cm;
        margin-top: 0.5cm;
        margin-left: 0.4cm;
    }
    table{
        width: 100%;
        border-collapse:collapse;
        border-spacing:0;
        font-size: 0.8em;
    }
        table, td, th {
        border: 1px solid #595959;
    }
    td, th {
        padding: 1px;
        width: 30px;
        height: 30px;
    }
    th {
        background-color: #7accee;
    }
    td {
        box-sizing: border-box;
        width: 20px;
    }
</style>
<div class="all">
    <header>
        <img src="../public/logoKP.png" alt="" class="half">
        <img alt='Barcode Generator TEC-IT' src='https://barcode.tec-it.com/barcode.ashx?data=<?=$code?>&code=Code128&dpi=96&dataseparator=' class="half"/>

    </header>

    <table>
        <tbody>
            <tr>
                <td rowspan="4" style="width: 10%;text-align: center;">
                    Из <br> De
                </td>
                <td style="width: 30%;">Фамилия <br> Nom</td>
                <td colspan="3"><?=$data['SenderFirstName']?> <?=$data['SenderLastName']?></td>
            </tr>
            <tr>
                <td>Улица <br> Rue</td>
                <td colspan="3"><?=$data['SenderAddress']?></td>
            </tr>
            <tr>
                <td>Почтовый индекс <br> Code Postal</td>
                <td style="width: 13%"><?=$data['SenderPostCode']?></td>
                <td>Город <br> Ville</td>
                <td><?=$data['SenderCity']?></td>
            </tr>
            <tr>
                <td>Страна <br> Pays</td>
                <td colspan="3">Kyrgyzstan</td>
            </tr>
        </tbody>
    </table>
    
    <table>
        <tbody>
            <tr>
                <td rowspan="4" style="width: 10%;text-align: center;">
                    В <br> A
                </td>
                <td style="width: 30%;">Фамилия <br> Nom</td>
                <td colspan="3"><?=$data['ReceiverFirstName']?> <?=$data['ReceiverLastName']?></td>
            </tr>
            <tr>
                <td>Улица <br> Rue</td>
                <td colspan="3"><?=$data['ReceiverAddress']?></td>
            </tr>
            <tr>
                <td>Почтовый индекс <br> Code Postal</td>
                <td style="width: 13%"><?=$data['ReceiverPostCode']?></td>
                <td>Город <br> Ville</td>
                <td><?=$data['ReceiverCity']?></td>
            </tr>
            <tr>
                <td>Страна <br> Pays</td>
                <td colspan="3">France</td>
            </tr>
        </tbody>
    </table>

        <table>
            <tbody>
                <tr>
                    <td style="width: 30%;">
                        Общий вес брутто <br>
                        посылки/посылок <br>
                        Poids brut total <br>
                        du/des colis</td>
                    <td><?=$data['Weight']?></td>
                    <td style="width: 20%">Дата <br> Date</td>
                    <td style="width: 30%"><?=$data['CreateDate']?></td>
                </tr>
            </tbody>
        </table>


</div>