<?php
require 'dados.php';
// var_dump($livros);
$id =  $_REQUEST['id'];

$livro_filtrado = array_filter($livros, function ($props) use ($id) {
    return $props['id'] == $id;
});

$livro = reset($livro_filtrado);

$view = 'livro';

require "views/template/base.php";
?>
