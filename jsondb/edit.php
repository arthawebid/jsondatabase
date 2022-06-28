<?php
$file = "klompok.json";
$klompok = file_get_contents($file);
$data = json_decode($klompok, true);

foreach ($data as $key => $d) {

if ($d['no'] === 2) {
$data[$key]['hobby'] = 'panjat tebing';
}
}
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
$klompok = file_put_contents($file, $jsonfile);
