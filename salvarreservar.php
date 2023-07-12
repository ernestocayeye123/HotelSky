<?php
switch ($_REQUEST["acaoa"]){
case 'cadastrarreservar':

$nomeCliente=$_POST["nomeCliente"];
$contacto=$_POST["contacto"];

$nome=$_POST["nome"];
$descricao=$_POST["descricao"];
$preco_uma_noite=$_POST["preco_uma_noite"];
$preco_um_dia=$_POST["preco_um_dia"];

$datareser=$_POST["datareser"];
$dataentrada=$_POST["dataentrada"];
$datasaída=$_POST["datasaída"];

$sql = "INSERT INTO cliente(nomeCliente, contacto) VALUE ('{$nomeCliente}', '{$contacto}')";
$res=$conn->query($sql);

$sql = "INSERT INTO quarto(nome, descricao, preco_uma_noite, preco_um_dia) VALUE ('{$nome}', '{$descricao}', '{$preco_uma_noite}', '{$preco_um_dia}')";
$res=$conn->query($sql);

$sql = "INSERT INTO reserva(datareser, dataentrada, datasaída) VALUE ('{$datareser}', '{$dataentrada}', '{$datasaída}')";
$res=$conn->query($sql);


if($res==true){

    print"<script>alert('Cadastro de Nova Reserva com Sucesso.');</script>";
    print"<script>location.href='?page=Produto2';</script>";
}else{

    print"<script>alert('Erro de Cadastro de Nova Reserva.');</script>";
    print"<script>location.href='?page=Produto2';</script>";

}

    break;

    case 'editarreservar':

        $nomeCliente=$_POST["nomeCliente"];
        $contacto=$_POST["contacto"];
        
        $nome=$_POST["nome"];
        $descricao=$_POST["descricao"];
        $preco_uma_noite=$_POST["preco_uma_noite"];
        $preco_um_dia=$_POST["preco_um_dia"];
        
        $datareser=$_POST["datareser"];
        $dataentrada=$_POST["dataentrada"];
        $datasaída=$_POST["datasaída"];

        $sql = "UPDATE cliente SET nomeCliente='{$nomeCliente}',contacto='{$contacto}' WHERE codigoClient=".$_REQUEST["codigoClient"];
        $res=$conn->query($sql);

        $sql = "UPDATE quarto SET nome='{$nome}',descricao='{$descricao}',preco_uma_noite='{$preco_uma_noite}',preco_um_dia='{$preco_um_dia}' WHERE codigoQuarto=".$_REQUEST["codigoQuarto"];
        $res=$conn->query($sql);

        $sql = "UPDATE reserva SET datareser='{$datareser}',dataentrada='{$dataentrada}',datasaída='{$datasaída}' WHERE codigoReserva=".$_REQUEST["codigoReserva"];
$res=$conn->query($sql);

if($res==true){

    print"<script>alert('Edição da Reserva feita com Sucesso.');</script>";
    print"<script>location.href='?page=listarreservar';</script>";
}else{

    print"<script>alert('Erro na Edição de Reserva.');</script>";
    print"<script>location.href='?page=listarreservar';</script>";

}

        break;

        case 'excluirreservar':

$sql= "DELETE FROM cliente WHERE codigoClient=".$_REQUEST["codigoClient"];
$res=$conn->query($sql);

$sql= "DELETE FROM quarto WHERE codigoQuarto=".$_REQUEST["codigoQuarto"];
$res=$conn->query($sql);

$sql= "DELETE FROM reserva WHERE codigoReserva=".$_REQUEST["codigoReserva"];
$res=$conn->query($sql);

if($res==true){

    print"<script>alert('Reserva Excluída com Sucesso.');</script>";
    print"<script>location.href='?page=listarreservar';</script>";
}else{

    print"<script>alert('Reserva Não Excluída.');</script>";
    print"<script>location.href='?page=listarreservar';</script>";

}


            break;
}
