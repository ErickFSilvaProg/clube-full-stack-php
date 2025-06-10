<?php

/**
 * - Tipos de dados:
*/
// string
echo gettype('Erick Ferreira');
echo '<br>';

// number - inteiro ou float(double)
echo gettype(38);
echo '<br>';
echo gettype(38.5);
echo '<br>';

// boolean
echo gettype(true);
echo '<br>';
echo gettype(false);
echo '<br>';

// array
echo gettype(['Programador', 2025]);
echo '<br>';

// object
class Person {

}

echo gettype(new Person);
echo '<br>';

// null
echo gettype(null);
echo '<br>';


/**
 * - Variáveis: Se inicia uma variável em PHP com "letras" ou com "underline(_)" após o "$".
 * Variáveis são representações dos dados.
 * Podemos utilizar dois padrões na escrita da variável: camelCase ou snake_case.
 * O PHP é case sensitive.
 * Para referenciar uma variável no memso ponto da memória, usa-se "&" antes da "$variável" que servirá como referência.
 * Nomes de variáveis precisam dar significado a seus valores.
*/

$firstName = 'Erick';
echo $firstName;
echo '<br>';

$last_name = 'Ferreira';
echo $last_name;
echo '<br>';

$age = 38;
$my_age = &$age;
$age = 39;

echo $age;
echo '<br>';
echo $my_age;