<?php
include_once('ConectaBanco.php');

class Suggester{
    private $email;
    private $comment;

    private $conexao;

    function __construct(){
        $this->conexao = ConectaBanco::conexao();
    }
    function __get($)
}
?>