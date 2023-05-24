Write a PHP program to find the largest among three numbers.
<?php
function checkNum($n1, $n2, $n3)
{
    if ($n1 > $n2 && $n1 > $n3)
        $temp = $n1;
    elseif ($n2 > $n3)
        $temp = $n2;
    else
        $temp = $n3;
    return $temp;
}
$num1 = readline("Enter the 1st number: ");
$num2 = readline("Enter the 2nd number: ");
$num3 = readline("Enter the 3rd number: ");
echo "Greatest among $num1 $num2 $num3 is " . checkNum($num1, $num2, $num3);
?>

// Output 
Enter the 1st number: 7
Enter the 2nd number: 45
Enter the 3rd number: 20
Greatest among 7 45 20 is 45.
