<?php

$num= 5;
$fact= 1;

for ($i=$num; $i>1 ; $i--)
{
  echo $i. " x ";
  $fact =$i * $fact;

}
echo $i . " = " . $fact . "<br>";

$fact=$num;
for ($i=$num-1;$i>=1;$i--)
{
  echo $fact . " x " . $i . " = " ;
  $fact=$fact*$i;
  echo $fact ."<br>";
}
 ?>
