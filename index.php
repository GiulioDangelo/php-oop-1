<?php
include __DIR__ . '/movie.php';

$films=[
$avatar = new Movie('Avatar', 'James','Cameron', 2009, ['Action', 'Sci-Fi']),

$fast = new Movie('Fast and Furious', 'Rob','Cohen', 2001, ['Action', 'Crime']),
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul><?php
        foreach($films as $film) { ?>
        <li><?= $film->title . '<br>' . $film->getFullName(). '<br>' . $film->year . '<br>' . implode(', ', $film->genre)?></li><?php
        }?>
    </ul>
</body>
</html>

