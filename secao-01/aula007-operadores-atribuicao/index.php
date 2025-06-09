<?php

/**
 * Operadores de atribuição:
 * 
 *  =
 * *=
 * /=
 * %=
 * +=
 * -=
*/


$name = "Alexandre";
$num1 = 10;
$num2 = 20;
$num3 = 30;
$num4 = 40;
$num5 = 50;
$num6 = 60;
$num7 = 70;
$num8 = 80;
$num9 = 90;
$num10 = 100;
$num11 = 110;


// Concatena e atribui o valor à variável:
// $name = $name . 'Cardoso';
$name .= " Cardoso";
echo $name;
echo "\n";


// Multiplica e atribui o valor à variável:
echo $num1 *= $num2;
echo "\n";


// Divide e atribui o valor à variável:
echo $num3 /= $num4;
echo "\n";


// Atribui o resto da divisão à variável:
echo $num5 %= $num6;
echo "\n";


// Soma e atribui o valor à variável:
echo $num7 += $num8;
echo "\n";


// Subtrai e atribui o valor à variável:
echo $num9 -= $num10;
echo "\n";