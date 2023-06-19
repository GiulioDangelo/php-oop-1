<?php
include __DIR__ . '/movie.php';

$films=[
$avatar = new Movie('Avatar', 'James','Cameron', 2009, ['Action', 'Sci-Fi']),

$fast = new Movie('Fast and Furious', 'Rob','Cohen', 2001, ['Action', 'Crime']),

$pirates = new Movie('Pirates of the Caribbean', 'Gore','Verbinski', 2003, ['Action', 'Adventure']),
]
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
    }
</style>
<body>
    <ul><?php
        foreach($films as $film) { ?>
        <li><?= $film->title . '<br>' . $film->getFullName(). '<br>' . $film->year . '<br>' . implode(', ', $film->genre)?></li><?php
        }?>
    </ul>
</body>
</html>