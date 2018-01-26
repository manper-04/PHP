<?php
$num1=2;
$num2=17;
$num3=17;

if (($num1>$num2) && ($num1>$num3)){
echo "El mayor es el numero 1 " . "<b>" .$num1 ."</b>";

}
  else if (($num2>$num1) && ($num2>$num3)){
echo "El mayor es el numero 2 " . "<b>" . $num2 ."</b>";
}

  else if (($num3>$num1) && ($num3>$num2)){
echo "El mayor es el numero 3 " . "<b>" . $num3 ."</b>";
}

else if (($num2==$num1) && ($num2==$num3)){
echo "Los numeros son iguales " . "<b>" .$num2 . "</b>";
}
else if (($num2==$num1) && ($num1==$num2)){
echo "Los numeros 1 y 2 son iguales " ."<b>" .$num1 ."</b>";

}
else if (($num1==$num3) && ($num3==$num1)){
echo "Los numeros 1 y 3 son iguales " . "<b>". $num1 ."</b>";
}
else {
echo "Los numeros 2 y 3 son iguales " . "<b>".$num2 ."</b>";
}




 ?>
