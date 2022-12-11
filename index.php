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
?>

<?php require 'includes/header.php'; ?>
<?php require 'includes/footer.php'; ?>
