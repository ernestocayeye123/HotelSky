<?php

class usuario{

    private $pdo;
public $msgErro="";

    public function conectar($nome, $host, $usuario, $senha){

global $pdo;
try {
$pdo=new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
}catch (PDOException $e){

    $msgErro=$e->getMessage();
}

}

    public function Cadastrar($nomeCliente, $contacto, $nome, $descricao, $preco_uma_noite, $preco_um_dia, $datareser, $dataentrada, $datasaída){

        global $pdo;
        //Verifica


$sql=$pdo->prepare("SELECT codigoClient FROM cliente WHERE nomeCliente = :e");
$sql->bindValue(":e",$nomeCliente);
$sql->execute();


$sql=$pdo->prepare("SELECT codigoQuarto FROM quarto WHERE nome = :q");
$sql->bindValue(":q",$nome);
$sql->execute();



$sql=$pdo->prepare("SELECT codigoReserva FROM reserva WHERE datareser = :w");
$sql->bindValue(":w",$datareser);
$sql->execute();



if($sql->rowCount()>0){

    return false; //Já_Está_Cadastrado
}else{
//Caso_não_esteja_cadastrado

$sql=$pdo->prepare("INSERT INTO cliente (nomeCliente, contacto) VALUES (:e, :n)");

$sql->bindValue(":e",$nomeCliente);
$sql->bindValue(":n",$contacto);
$sql->execute();


$sql=$pdo->prepare("INSERT INTO quarto (nome, descricao, preco_uma_noite, preco_um_dia) VALUES (:q, :r, :t, :y)");

$sql->bindValue(":q",$nome);
$sql->bindValue(":r",$descricao);
$sql->bindValue(":t",$preco_uma_noite);
$sql->bindValue(":y",$preco_um_dia);
$sql->execute();



$sql=$pdo->prepare("INSERT INTO reserva (datareser, dataentrada, datasaída) VALUES (:w, :u, :i)");

$sql->bindValue(":w",$datareser);
$sql->bindValue(":u",$dataentrada);
$sql->bindValue(":i",$datasaída);
$sql->execute();



return true;
} 
    }  
}
?>