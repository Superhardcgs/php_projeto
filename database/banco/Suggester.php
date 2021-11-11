<?php
include_once('ConectaBanco.php');

class Suggester{
    private $email;
    private $comment;

    private $conexao;

    function __construct(){
        $this->conexao = ConectaBanco::conexao();
    }
    function __get($propriedade){
        return $this->propriedade;
    }
    function __set($propriedade, $valor){
        $this->propriedade = $valor;
    }

    public function salvar(){
        $stmt = $this->conexao->prepare("INSERT INTO suggesters(email, comment) VALUES(?,?)");
        $stmt->bindParam(1, $this->email);
        $stmt->bindParam(2, $this->comment);

        $stmt->execute();
        $this->id = $this->conexao->lastInsertId();

    }

    public function retornar($id){
        $rs = $this->conexao->query("SELECT * FROM suggesters WHERE id = '$id'");
        $row = $rs->fetch(PDO::FETCH_OBJ);

        if(empty($row)){
            return null;
        }

        $this->id = $row->id;
        $this->email = $row->email;
        $this->comment = $row->comment;
    }

    public function listAll(){
        $rs = $this->conexao->query("SELECT * FROM pessoa");

        $pessoas = null;
        $i = 0;

        while($row = $rs->fetch(PD0::FETCH_OBJ)){
            $suggester = new Suggester();

            $suggester->id = $row->id;
            $suggester->email = $row->email;
            $suggester->comment = $row->comment;
        }
    }

    public function atualizar(){
        $stmt = $this->conexao->prepare("UPDATE pessoa SET email = ?, comment = ? WHERE id = ?");

        $stmt->bindParam(1, $this->email);
        $stmt->bindParam(2, $this->comment);
        $stmt->bindParam(3, $this->id);

        return $stmt->execute();

    }

    public function deletar(){
        $stmt = $this->conexao->prepare("DELETE FROM suggester WHERE id = ?");
        $stmt->bindParam(1, $this->id);

        return $stmt->execute();
    }
}
?>