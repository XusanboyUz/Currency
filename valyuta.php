 <?php

$json = json_decode(file_get_contents("https://cbu.uz/ru/arkhiv-kursov-valyut/json/"), true);
$rub = array_column($json, 'Rate', 'Ccy')[RUB] ?? null;
$usd = array_column($json, 'Rate', 'Ccy')[USD] ?? null;
$eur = array_column($json, 'Rate', 'Ccy')[EUR] ?? null;
$krw = array_column($json, 'Rate', 'Ccy')[KRW] ?? null;

$age = array("rub"=>$rub, "usd"=>$usd, "eur"=>$eur, "krw"=>$krw,);

echo json_encode($age);