<?php

$file = "klompok.json";
$klompok = file_get_contents($file);
$data = json_decode($klompok, true);
$data [] = array(
'no' => 3,
'nama' => 'IDA BAGUS GEDE MAHENDRA DHATA ADHI PUTRA',
'nim' => '21101159',
'hobby' => 'berenang'
);
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
$klompok = file_put_contents($file, $jsonfile);
