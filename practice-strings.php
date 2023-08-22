<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Title</title>
</head>
<body>
<?php 

# practice strings
# Created 22 Aug 2023
# Created by Hannah Holmes
# This script is practice from the "Review and Pursue" section at the end of ch 1

echo "<p>Practicing strings and concatenation with double and single quotations, respectively.</p>";

// Create variables
$variable1 = 'Far out in the uncharted backwaters of the unfashionable end of the western spiral arm of the Galaxy lies a small unregarded yellow sun.';
$variable2 = '42';
$variable3 = 'Orbiting this at a distance of roughly ninety-two million miles is an utterly insignificant little blue green planet whose ape-descended life forms are so amazingly primitive that they still think digital watches are a pretty neat idea.'; 

// Display variables with double quotes
echo "<p>DOUBLE QUOTES</p>";
echo "<p>$variable1 $variable3</p>";
echo "<p>What is the answer? <b>$variable2</b></p>";

// Display variables with single quotes and concatenation
echo '<p>SINGLE QUOTES</p>';
echo $variable1 .' ' . $variable3;
echo '<p>What is the answer?<b>' . ' ' . $variable2 . '</b></p>'; 


?>
</body>
</html>