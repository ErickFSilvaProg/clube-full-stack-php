<?php

/* 
- "include" ou "include-once": O PHP contunua executando a página mesmo se o 'include' retornar um erro.
O 'include-once' permite apenas a chamada do mesmo arquivo uma única vez.

- "require" ou "require-once": O PHP paralisa a execução da página, apartir do local do erro, com o 'require' e retorna um erro.
O 'require-once' permite a chamada do mesmo arquivo apenas uma única vez.
*/

include './teste-include.php';
echo $name;

require './teste-require.php';
echo $lastname;

echo ' - Programador PHP';