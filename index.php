<?php
declare(strict_types=1);

$name = 'Luka';

$greeting = 'Hello';
if ($name) {
    $greeting = 'Welcome back, ' . $name;
}

$product = 'Bombona';
$cost = 4;

for ($i = 1; $i < 10; $i++) {
    $subtotal = $cost * $i;
    $discount = ($subtotal / 100) * ($i * 4);
    $totals[$i] = $subtotal - $discount;
}

function create_copyright() {
    echo '&copy;';
    echo date('Y');
}

//global scope
$tax = '20';

//local scope $tax is different then global scope $tax, it is contained within a function
function calculate_total($price, $quantity)
{
    $cost = $price * $quantity;
    $tax = $cost * (20 / 100);
    $total = $cost + $tax;
    return $total;
}
//global and static variables;
$tax_rate = 0.2;

function calculate_running_total($price, $quantity)
{
    global $tax_rate;
    static $running_total = 0;
    $total = $price * $quantity;
    $tax = $total * $tax_rate;
    $running_total = $running_total + $total + $tax;
    return $running_total;
}

//returning multiple values

$us_price = 4;
$rates = [
    'uk' => 0.81,
    'eu' => 0.93,
    'jp' => 113.21,
];

function calculate_prices($usd, $exchange_rates)
{
    $prices = [
        'pound' => $usd * $exchange_rates['uk'],
        'euro' => $usd * $exchange_rates['eu'],
        'yen' => $usd * $exchange_rates['jp'],
    ];
    return $prices;
}

$global_prices = calculate_prices($us_price, $rates);

//several returns in a function

$stock = 4;

function get_stock_message($stock)
{
    if ($stock >= 10) {
        return 'Good stock';
    }
    if ($stock > 0 && $stock < 10) {
        return 'Low stock';
    }
    return 'Out of stock';
}

//optional parameters and default values
function calculate_cost($cost, $quantity, $discount = 0)
{
    $cost = $cost * $quantity;
    return $cost - $discount;
}

$cost = calculate_cost(5, 3);

//example

$candy = [
    'Toffee' => ['price' => 3.00, 'stock' => 10],
    'Bombone' => ['price' => 2.00, 'stock' => 30],
    'Krema' => ['price' => 4.00, 'stock' => 6],
];

$porez = 20;

function get_reorder_message(int $stanje): string
{
    return ($stanje < 10) ? 'Yes' : 'No';
}

function get_total_value(float $price, int $quantity): float
{
    return $price * $quantity;
}

function get_tax_due(float $price, $int $quantity, int $tax = 0): float
{
    return ($price * $quantity) * ($tax / 100);
}


?>

<?php require 'includes/header.php'; ?>


<p><?= $greeting ?></p>
<h2><?= $product ?> Discounts</h2>

<table>
    <tr>
        <th>Packs</th>
        <th>Price</th>
    </tr>
    <?php foreach ($totals as $quantity => $price) { ?>
    <tr>
        <td>
            <?= $quantity ?>
            pack<?= ($quantity === 1) ? '' : 's' ?> 
        </td>
        <td>
            $<?= $price ?>
        </td>
    </tr>
    <?php } ?>
</table>


<?php require 'includes/footer.php'; ?>