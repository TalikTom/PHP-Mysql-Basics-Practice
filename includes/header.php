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

    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Running total</th>
        </tr>
        <tr>
            <td>Mints</td>
            <td>$2</td>
            <td>5</td>
            <td><?= calculate_running_total(2,5) ?></td>
        </tr>
        <tr>
            <td>Toffee</td>
            <td>$3</td>
            <td>4</td>
            <td><?= calculate_running_total(3,4) ?></td>
        </tr>
        <tr>
            <td>Fudge</td>
            <td>$5</td>
            <td>3</td>
            <td><?= calculate_running_total(5,3) ?></td>
        </tr>
    </table>

<p>US <?= $us_price ?></p>
<p>
    UK &pound; <?= $global_prices['pound'] ?> |
    EU &euro; <?= $global_prices['euro'] ?> |
    JP &yen; <?= $global_prices['yen'] ?>
</p>
<p><?= $cost ?></p>

<p><?= get_stock_message($stock) ?></p>
<p><?= calculate_cost(5,2,3) ?></p>
<p><?= calculate_cost(5,2) ?></p>
<p><?= calculate_cost(10,5,4) ?></p>

<table>
    <tr>
        <th>Candy</th>
        <th>Stock</th>
        <th>Re-order</th>
        <th>Total value</th>
        <th>Tax due</th>
    </tr>
    <?php foreach ($candy as $product_name => $data) { ?>
        <tr>
            <td><?= $product_name ?></td>
            <td><?= $data['stock'] ?></td>
        </tr>

    <?php  } ?>
</table>