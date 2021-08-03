<?php 
## TP 1 

## Exercice 1 
$a = true; #bool
$b = 42; # int
$c = 12.34; # float
$d= "Hello !"; #string

echo "Exercice 1 ";
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);


### Exercice  2 
$x="PostgreSQL"; 
$y="MySQL"; 
$z=&$x; ## Type string (PHP5)
$x="PHP5"; ## Type string (PHP5)
$y=&$x; ## Type string (PHP5)


echo "Exercice 2 ";
var_dump($x);
var_dump($y);
var_dump($z);

## Exercice 3 

$a="0"; # faux
$b="TRUE"; # vrai
$c=FALSE;  # faux 
$d=($a OR $b); # vrai
$e=($a AND $c); # faux
$f=($a XOR $b); # vrai


echo "Exercice 3 ";
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);

## Exercice 4 

$X="PHP7"; ## X : PHP 7 String - 
$A=&$X;  ## A : PHP 7 String 
$Y="7 eme version de PHP"; ## Y :  7 eme version de PHP String - 
$Z= (int)$Y * 10; ## Z :  70 int
$X= (int)$Y * (int)$Y; ## X : int 49 A : int 49

echo "Exercice 4 ";
var_dump($X);
var_dump($A);
var_dump($Y);
var_dump($Z);

## FIN TP1
