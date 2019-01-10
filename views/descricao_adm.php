<?php
if(isset($_SESSION["id"])){
    print_r("ID: ".$_SESSION["id"]."<br>");
    print_r("NOME: ".$_SESSION["nome"]."<br>");
    print_r("USUARIO: ".$_SESSION["usuario"]."<br>");
    print_r("DATA DO CADASTRO: ".$_SESSION["data"]."<br>");
    print_r("<img src=views/img/".$_SESSION["foto"].">");
}
?>