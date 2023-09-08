<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login == 'Manoel' && $senha == 'manoel123'){
    header('location: galeria.html');
} else {
    header('location: index.html');
}

?>