
<?php

$num1 = 100;
$num2 = 500;
$num3 = 400;
$subtotal=($num1 + $num2 + $num3);

echo "P1 = " . $num1 . "<br>" . "P2 = " . $num2 . "<br>" . "P3 = " . $num3 . "<hr>";

if ($subtotal >= 1000)
      $d=10;

else
        $d=5;

echo "Subtotal: " . $subtotal . "<br>". "Descuento: " . ($subtotal *$d/100)  ."<br>". "Total: " .
($subtotal - ($subtotal * $d/100));



?>
