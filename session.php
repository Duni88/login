<?php 
session_start();
require_once "configBD.php";

if(isset($_SESSION['nomeDoUsuario'])){
    //logada
}else{
    //se nao tiver logado, redirecionar para index
    header("location: index.php");
}