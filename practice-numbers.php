<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Numbers practice</title>
</head>
<body>
<?php 

# practice-numbers.php
# Created 22 Aug 2023
# Created by Hannah Holmes
# This script is numbers and functions from "Review & Pursue" at the end of Ch1

echo "<p>Here are some numbers. There are also some results of operations.</p>";

$ten9s = 99.9999999989;
echo "<p>This is only 10 nines :/ $ten9s</p>";

$eleven9s = round($ten9s, 9);
echo "<p>Eleven 9s looks likes this :) $eleven9s</p>";

$rounded = round(82.6);
echo "<p>Rounding 82.6 gives you $rounded</p>";

$big_num = 999999999999999;
echo "<p>Here is a big number: $big_num";
$formatted_big_num = number_format($big_num, 2);
echo "<p>Here it is again, but formatted: $formatted_big_num</p>";

$start = 5;
echo "<p>\$start = $start</p>";
$start++;
echo "<p>After incrementing, \$start = $start</p>";

?>
</body>
</html>