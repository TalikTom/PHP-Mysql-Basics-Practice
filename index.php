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

function create_copyright() {
    $year = date('Y');
    $message = 'copy; ' . $year;
    return $message;
}

$tax = '20';

function calculate_total($price, $quantity)
{
    $cost = $price * $quantity;
    $tax = $cost * (20 / 100);
    echo $tax;
    $total = $cost + $tax;
    return $total;
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