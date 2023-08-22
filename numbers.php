<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Numbers</title>
</head>
<body>
<?php 

# Script 1.8 numbers.php
# Created 22 Aug 2023
# Created by Hannah Holmes
# This script uses numbers

// Set the variables:
$quantity = 15;
$price = 229.89;
$taxrate = .07;

// Calculate the total:
$total = $quantity * $price;
$tax = $total * $taxrate;

echo "<p>$total</p>";

$alt_total = ($quantity * $price) + (($quantity * $price) * $taxrate);

echo "<p>$alt_total</p>";

// Print receipt:

echo "<p>You are buying <b>$quantity</b> widgets at a cost of $$price each.<br>
Subtotal: $$total<br>
Tax: $$tax<br>
Grand Total: $$alt_total</p>";

echo 'total is equal to $total<br>';
echo "total is equal to $total";

?>
</body>
</html>