<?php

$data [] = array(
'no' => 1,
'nama' => 'I KOMANG ADI SUARDIKA',
'nim' => '21101208',
'hobby' => 'basket'
);

$data [] = array(
'no' => 2,
'nama' => 'I KOMANG SURYA NATA DARMA WIGUNA',
'nim' => '21101163',
'hobby' => 'olahraga'
);
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('klompok.json', $jsonfile);