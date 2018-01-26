<?php
echo "<B>" . "FOR" . "</B>". "<br>" . "<br>";
$inicio=8;
$fin= 10;
$inicio2=10;
$fin2=12;

for ($i=$inicio; $i <=$fin; $i++)   //1      2     3
{
for ($j=$inicio2; $j <=$fin2 ; $j++)
{
echo $i . " x " . $j . " = " . ($i*$j) . "<br>"  ;
}
echo "<br>";
}


echo "<B>" . "WHILE" . "</B>". "<br>" . "<br>";
$inicio=8;
$fin= 10;
$inicio2=10;
$fin2=12;
$i=$inicio;


while($i <=$fin)
{ $j=$inicio2;
while ($j <=$fin2)
{

  echo $i. " x " . $j . " = " . ($i*$j) . "<br>";

  $j++;
}
echo "<br>";
$i++;
}

echo "<br>" ."<B>" . "DO WHILE" . "</B>". "<br>" . "<br>";

$inicio= 8;
$fin= 10;
$in2= 10;
$fin2= 12;
$i=$inicio;

do {
$u=$in2;
do {
  echo $i." x ".$u." = ".($i*$u)."<br>";

  $u++;

} while ($u <=$fin2);

 $i++;
 echo "<br>";
} while ($i <=$fin )


?>
