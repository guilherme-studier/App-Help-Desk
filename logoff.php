<?php

session_start();
/*
echo '<pre>';
print_r ($_SESSION);
echo '</pre>';

//remover índices do array de sessão
//unset()



//destruir a varíavel de sessão
//session_destroy()

session_destroy();

echo '<pre>';
print_r ($_SESSION);
echo '</pre>';
*/
session_destroy();
header('Location: index.php');
?>