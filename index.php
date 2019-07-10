<?php

$personas = [
    'Julia',
    'Jorge',
    'Jose',
    'Mateo',
    'Jaume',
    'Petro',
    'Alejandro',
    'Fran',
    'Adri',
    'Lolo',
    'Cristian',
    'Alexis',
    'David',
    'Jordi',
    'Luis',
    'Toni'
];

$personaUno = array_rand($personas, 2);
$personaDos = array_rand($personas, 2);

echo '<h1 style="text-align:center;">'. $personas[$personaUno[0]]. ' · ' .$personas[$personaDos[0]] .'</h1>';

if ( $nombre1 = array_search ($personas[$personaUno[0]], $personas ) ) {
    unset($personas[$nombre1]);
}
if ( $nombre2 = array_search ($personas[$personaDos[0]], $personas ) ) {
    unset($personas[$nombre2]);
}
// echo($random = rand(0,15) . '. ');