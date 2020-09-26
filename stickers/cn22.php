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
        font-family: sans-serif;
    }
    .all {
        width: 11cm;
        height: 11cm;
        border: 1px dashed black;
        box-sizing: border-box;
    }
    header {
        height: 1.5cm;
        border-bottom: 1px dashed;
        display: flex;

    }
    .half {
        width: 3.4cm;
        height: 1cm;
        margin-top: 0.3cm;
        margin-left: 0.4cm;
    }
    table{
        width: 96%;
        margin-top: 0.7%;
        margin-left: 2%;
        border-collapse:collapse;
        border-spacing:0;
        font-size: 0.8em;
    }
    table, td, th {
        border: 1px solid #595959;
    }
    td, th {
        padding-left: 3px;
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
        <img src="../public/img/carts/kp.png" alt="" class="half">
        <img alt='Barcode Generator TEC-IT' style="width: 5cm; margin-left: 1cm;" src='https://barcode.tec-it.com/barcode.ashx?data=<?=$code?>&code=Code128&dpi=96&dataseparator=' class="half"/>

    </header>

    <table>
        <tbody>
            <tr>
                <td rowspan="4" style="width: 10%;text-align: center;">
                    Из <br> De
                </td>
                <td style="width: 30%;">Фамилия <br> Nom</td>
                <td colspan="3"><b><?=$data['SenderFirstName']?> <?=$data['SenderLastName']?></b></td>
            </tr>
            <tr>
                <td>Улица <br> Rue</td>
                <td colspan="3"><b><?=$data['SenderAddress']?></b></td>
            </tr>
            <tr>
                <td>Почтовый индекс <br> Code Postal</td>
                <td style="width: 13%"><b><?=$data['SenderPostCode']?></b></td>
                <td>Город <br> Ville</td>
                <td><b><?=$data['SenderCity']?></b></td>
            </tr>
            <tr>
                <td>Страна <br> Pays</td>
                <td colspan="3"><b>Kyrgyzstan</b></td>
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
                <td colspan="3"><b><?=$data['ReceiverFirstName']?> <?=$data['ReceiverLastName']?></b></td>
            </tr>
            <tr>
                <td>Улица <br> Rue</td>
                <td colspan="3"><b><?=$data['ReceiverAddress']?></b></td>
            </tr>
            <tr>
                <td>Почтовый индекс <br> Code Postal</td>
                <td style="width: 13%"><b><?=$data['ReceiverPostCode']?></b></td>
                <td>Город <br> Ville</td>
                <td><b><?=$data['ReceiverCity']?></b></td>
            </tr>
            <tr>
                <td>Страна <br> Pays</td>
                <td colspan="3"><b>France</b></td>
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
                    <td><b><?=$data['Weight']?></b></td>
                    <td style="width: 20%">Дата <br> Date</td>
                    <td style="width: 30%;"><b><?=$data['CreateDate']?></b></td>
                </tr>
            </tbody>
        </table>
</div>