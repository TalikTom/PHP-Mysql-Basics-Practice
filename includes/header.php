<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>The shop</title>
</head>
<body>
    <h1>The shop</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
    </nav>
    <p>Mints : <?= calculate_total(2,5) ?></p>
    <p>Toffee : <?= calculate_total(2,5) ?></p>
    <p>Fudge : <?= calculate_total(2,5) ?></p>
    <p>Prices include tax at: <?= $tax ?>%</p>

