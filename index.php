<?php
include __DIR__ . '/movie.php';

$films=[
$avatar = new Movie('Avatar', 'James','Cameron', 2009,new Genre(['Action', 'Sci-Fi','Adventure']) ),

$fast = new Movie('Fast and Furious', 'Rob','Cohen', 2001, new Genre(['Action', 'Crime'])),

$pirates = new Movie('Pirates of the Caribbean', 'Gore','Verbinski', 2003, new Genre (['Action', 'Adventure'])),

$avengers = new Movie('Avengers', 'Joss','Whedon', 2012, new Genre (['Action', 'Adventure'])),
]

// $genre = [
//     new Genre('horror'),
//     new Genre('comedy'),
//     new Genre('action'),
//     new Genre('drama')
// ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    li{
        margin: 20px 0;
        border-bottom: 1px solid black;
        list-style: none;
    }
</style>
<body>
    <ul><?php
        foreach($films as $film) { ?>
        <li><?= $film->title . '<br>' . $film->getFullName(). '<br>' . $film->year . '<br>' . implode(', ', $film->genre->type)?></li><?php
        }?>
    </ul>
</body>
</html>