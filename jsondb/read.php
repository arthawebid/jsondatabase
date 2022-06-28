<?php

$file = "klompok.json";
$klompok = file_get_contents($file);
$data = json_decode($klompok, true);
foreach ($data as $d) {
echo $d['no']. "<br>";
echo $d['nama']. "<br>";
echo $d['nim']. "<br>";
echo $d['hobby']. "<br>";

}