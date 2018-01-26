<?php
$numero=13;

$uno=1;
$dos=2;
$tres=3;
$cuatro=4;
$cinco=5;
$seis=6;
$siete=7;
$ocho=8;
$nueve=9;
$diez=10;
$cincuenta=50;
$cuarenta=40;

if($numero>=$cincuenta){
      echo "L";
      $numero = ($numero - 50);

}
 if($numero>=$cuarenta){
      echo "XL";
      $numero = ($numero - 40);
    }
 if($numero>=$diez){
      echo "X";
      $numero = ($numero - 10);

}
if($numero>=$diez){
      echo "X";
      $numero = ($numero - 10);
}
 if($numero>=$diez){
      echo "X";
      $numero = ($numero - 10);
}

 if($numero>=$nueve){
      echo "IX";
      $numero = ($numero - 9);
    }
 if($numero>=$ocho){
      echo "Vlll";
      $numero = ($numero - 8);
        }
 if($numero>=$siete){
      echo "Vll";
      $numero = ($numero - 7);
      }
if($numero>=$seis){
      echo "Vl";
      $numero = ($numero - 6);
              }
if($numero>=$cinco){
      echo "V";
      $numero = ($numero - 5);
  }
   if($numero>=$cuatro){
        echo "lV";
      $numero = ($numero - 4);
          }
    if($numero>=$tres){
       echo "lll";
      $numero = ($numero - 3);
}
    if($numero>=$dos){
        echo "ll";
      $numero = ($numero - 2);
              }

    if($numero>=$uno){
        echo "l";
      $numero = ($numero - 1);
                      }
?>
