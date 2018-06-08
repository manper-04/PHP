<?php
echo "<B>" . "FOR" . "</B>". "<br>" . "<br>";
$inicio=14;
$fin=16;
for ($i=$inicio; $i <=$fin ; $i++)
{
  echo $inicio . " x " . $i ." = ". $i*$inicio ."<br>";
}
//WHILE
echo "<br>";
echo "<B>" . "WHILE" . "</B>". "<br>" . "<br>";

$j=$inicio;
while ($j <=$fin)
{
     echo $inicio . " x " . $j ." = ". $j*$inicio ."<br>";
$j++;
}
echo "<BR>"."<B>" . "DO WHILE" . "</B>". "<br>" . "<br>";

$inicio=14;
$fin=16;
$t=6;
$i=$inicio;
do {
echo $inicio." x ".$i." = ".($inicio*$i)."<br>";
$i++;
} while ($i<=$fin);


 ?>
