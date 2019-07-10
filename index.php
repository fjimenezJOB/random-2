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
    'Luis el carapolla',
    'Toni'
];

function pintarListaRandom($arr) {
    shuffle($arr);
    foreach($arr as $val) {
        echo '<li>'.$val.'</li>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>El Randomizer 5000</h1>
        <ul>
            <?php 
            pintarListaRandom($personas);
            ?>
        </ul>
    </div>
</body>
</html>