<?php

function logo(){
    set_include_path(require("views/templates/logo.php"));
}
function menu(){
    set_include_path(require("views/templates/menu.php"));
}
function descricao(){
    set_include_path(require("views/templates/descricao.php"));
}
function destaque(){
    set_include_path(require("views/templates/destaque_noticia.php"));
}
function noticia(){
    set_include_path(require("views/templates/noticia.php"));
}
function categoria(){
    set_include_path(require("views/templates/categoria.php"));
}
?>