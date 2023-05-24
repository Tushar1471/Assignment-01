<?php
// Multiplication table in PHP using While loop

$x = 18;
$r = 11;

echo "----The input number is: ", $x, "\n";
echo "\n----The range number is: ", $r, "\n";

// $x - To store the input number
// $r - To store the multiplication range

echo "\n\n----The above multiplication table--------\n\n";

$i = 1;
while ($i <= $r) {
    echo "\t", $x, " * ", $i, " = ", $x * $i, "\n";
    $i++;
}

?>
