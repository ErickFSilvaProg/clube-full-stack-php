<?php

// Constantes: Não é possível redefinir o valor de uma constante.

define('NAME','Erick');
echo NAME;
echo '<br>';

define("NAME2","Erick Ferreira");
echo NAME2;
echo '<br>';


// Constantes mágicas:
function teste() {
    echo __FUNCTION__; // Pega o nome da própria função.
    echo DIRECTORY_SEPARATOR; // Imprime uma barra.
    echo __METHOD__; // Pega o nome da própria função.
    echo '<br>';
}

teste();


// Verifica se uma "constante" foi definida:
if (defined('NAME')) {
    echo 'A constante "NAME" foi definida.';
}
echo '<br><br>';


// Para listar todas as "constantes" do PHP:
$cons = get_defined_constants(true);
var_dump($cons); // "var_dump" pega o conteúdo de uma variável.