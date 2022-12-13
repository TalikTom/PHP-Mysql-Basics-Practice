<?php
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