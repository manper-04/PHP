<?php

echo "<B>" . "FOR" . "</B>". "<br>" . "<br>";
$h=5;

for ($i=1; $i <=10 ; $i++) {
  echo $h . " x " . $i . " = " . ($h*$i) . "<br>";
}
echo "<br>";
//WHILE

$t=5;
$j=1;

echo "<B>" . "WHILE" . "</B>". "<br>" . "<br>";
while ($j<=10)
{
  echo $t . " x " . $j . " = " . ($t*$j) . "<br>";
  $j++;
}

echo "<br>"."<B>" . "DO WHILE" . "</B>". "<br>" . "<br>";

//paso1
$i=1;
$t=5;
do {
  echo $t." x ".$i." = ".($t*$i)."<br>";
$i++;
}
while ($i <= 10);
//Paso2


 ?>
