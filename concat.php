<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Concatenating Strings</title>
</head>
<body>
<?php 

# Script 1.7 concat.php
# Created 22 Aug 2023
# Created by Hannah Holmes
# This script concatenates strings

// Create the variables:
$fname = "Sarah";
$minitial = "J.";
$lname = "Maas";
$author = $fname . ' ' . $minitial . ' ' . $lname;

$series = 'A Court of Thorns and Roses';

// Print the values:
echo "<p>The series <em>$series</em> was written by <b>$author</b>.</p>";

// String-specific functions:
$length = strlen($fname);
echo "<p>$length</p>";

$upper = strtoupper($author);
echo "<p>$upper</p>";

$lower = strtolower($author);
echo "<p>$lower</p>";

$cap = ucwords($upper);
echo "<p>$cap</p>";

$cap2 = ucwords($lower);
echo "<p>$cap2</p>";

?>
</body>
</html>