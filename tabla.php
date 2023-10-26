<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
$mpdf->shrink_tables_to_fit = 1;

$html = '

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #000;
    color: #fff;
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
table {
    width: 100%;
    height: 100%;
}
td, th {
    padding: 20px;
}
.green {
    background: green;
}
.pricing {
    writing-mode: vertical-rl;
    transform: rotate(180deg);
    text-align: center;
    vertical-align: middle;
    text-align: center;
    height: 700px;
    text-rotate: 90;
    font-size: 100px;
    border: none;
    line-height: 1;
}

@page {
    font-family: Arial, sans-serif;
    background-color: #000;
    color: #fff;
    margin: 0 50px 0 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.container-table {
    width:100%; 
    height:100%; 
    border: 1px solid #fff;
}

</style>

<body>
<table>
  <tr>
    <td class="pricing">
      <h1>Pricing</h1>
    </td>
    <td style="border:none; width: 25%;">
    <table class="container-table">
        <tr class="green">
        <th>Plan</th>
        </tr>
        <tr>
        <td>Merchant</td>
        </tr>
        <tr>
        <td>Merchant Pro</td>
        </tr>
        <tr>
        <td>Merchant Premium</td>
        </tr>
    </table>
    </td>
    <td style="border:none; width: 25%">
    <table class="container-table">
        <tr class="green">
        <th>Plan</th>
        </tr>
        <tr>
        <td>Merchant</td>
        </tr>
        <tr>
        <td>Merchant Pro</td>
        </tr>
        <tr>
        <td>Merchant Premium</td>
        </tr>
    </table>
    </td>
    <td style="border:none; width: 25%">
    <table class="container-table">
        <tr class="green">
        <th>Plan</th>
        </tr>
        <tr>
        <td>Merchant</td>
        </tr>
        <tr>
        <td>Merchant Pro</td>
        </tr>
        <tr>
        <td>Merchant Premium</td>
        </tr>
    </table>
    </td>
  </tr>
</table>
</body>';

$mpdf->WriteHTML($html);
$mpdf->Output();
?>

