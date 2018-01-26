<?php
echo "<B>" . "FOR" . "</B>". "<br>" . "<br>";
$inicio=5;
$fin=1;
$inicio2=5;
$fin2=1;
for($i=$inicio; $i>=1; $i--){   //1       2      3
  $fin=$i*$fin;
  echo $i;
  echo ($i==1)? "=":"x";
}
echo "<b>$fin</b>" . "<br>";



for($j=$inicio2; $j>=2; $j--){
  $fin2=$j*$fin2;
  $g=$j-1;
  echo "$fin2 x $g";
echo " = ". ($fin2*$g).
"<br>";

}


$inicio=1;
$fin=5;
$inicio2=1;
$fin2=5;
for($i=$inicio; $i<=5; $i++){
  $inicio=$i*$inicio;
  echo "$i";

  echo ($i==5)? "=":"x";



}

echo "<b>$inicio</b>" ;

echo  "<br>"."$inicio2 x $inicio2" . " = " . ($inicio2 * $inicio2) ."<br>";

for($t=$inicio2; $t<=4; $t++){

  $inicio2=$t*$inicio2;
  $g=$t+1;

echo "$inicio2 x $g"." = ". ($inicio2*$g)."<br>";



}
echo "<br>"."<B>" . "DO WHILE" . "</B>". "<br>" . "<br>";

$inicio=1;
$fin=5;
$inicio2=1;
$fin2=5;
$i=$inicio;
$t=$inicio2;
do{
  $inicio=$i*$inicio;
  echo "$i";
  echo ($i==5)? "=":"x";
  $i++;
} while($i<=5);
echo "<b>$inicio</b>";
echo "<br>";
echo "1 x 1 = 1<br>";
do{
  $inicio2=$t*$inicio2;
  $g=$t+1;
echo "$inicio2 x $g"." = ". ($inicio2*$g)."<br>";
$t++;
}while($t<=4);
$inicio=5;
$fin=1;
$inicio2=5;
$fin2=1;
$i=$inicio;
$t=$inicio2;
do{
  $fin=$i*$fin;
  echo "$i";
  echo ($i==1)? "=":"x";
  $i--;
} while($i>=1);
echo "<b>$fin</b>";
echo "<br>";

do{
  $fin2=$t*$fin2;
  $g=$t-1;
  echo "$fin2 x $g"." = ". ($fin2*$g)."<br>";
  $t--;
}while($t>=2);
echo "<br>";

echo "<br>";
echo "<br>"."<B>" . " WHILE" . "</B>". "<br>" . "<br>";
$inicio=1;
$fin=5;
$inicio2=1;
$fin2=5;
$i=$inicio;
$t=$inicio2;
while($i<=5){
  $inicio=$i*$inicio;
  echo "$i";
  echo ($i==5)? "=":"x";
  $i++;
}
echo "<b>$inicio</b>";
echo "<br>";
echo "1 x 1 = 1<br>";
while($t<=4){
  $inicio2=$t*$inicio2;
  $g=$t+1;
echo "$inicio2 x $g"." = ". ($inicio2*$g)."<br>";
$t++;
}


$inicio=5;
$fin=1;
$inicio2=5;
$fin2=1;
$i=$inicio;
$t=$inicio2;
while($i>=1){
  $fin=$i*$fin;
  echo "$i";
  echo ($i==1)? "=":"x";
  $i--;
}
echo "<b>$fin</b>";
echo "<br>";

while($t>=2){
  $fin2=$t*$fin2;
  $g=$t-1;
  echo "$fin2 x $g"." = ". ($fin2*$g)."<br>";
  $t--;
}


 ?>
