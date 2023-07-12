<?php
switch($_REQUEST["acao"]){
case 'cadastrar':

$usuarioBD=$_POST["usuarioBD"];
$senha= md5($_POST["senha"]);

$sql = "INSERT INTO usuario (usuarioBD, senha) VALUE ('{$usuarioBD}', '{$senha}')";
$res=$conn->query($sql);
if($res==true){

    print"<script>alert('Cadastro de Novo Usuário com Sucesso.');</script>";
    print"<script>location.href='?page=novo';</script>";
}else{

    print"<script>alert('Erro de Cadastro de Novo Usuário.');</script>";
    print"<script>location.href='?page=novo';</script>";

}

    break;

    case 'editar':

        $usuarioBD=$_POST["usuarioBD"];
        $senha=md5($_POST["senha"]);

        $sql = "UPDATE usuario SET 
        usuarioBD='{$usuarioBD}',
        senha='{$senha}' WHERE 
        id_usuario=".$_REQUEST["id_usuario"];

$res=$conn->query($sql);
if($res==true){

    print"<script>alert('Edição do Usuário com Sucesso.');</script>";
    print"<script>location.href='?page=novo';</script>";
}else{

    print"<script>alert('Erro na Edição de Cadastro de Novo Usuário.');</script>";
    print"<script>location.href='?page=novo';</script>";

}

        break;

        case 'excluir':

$sql= "DELETE FROM usuario WHERE id_usuario=".$_REQUEST["id_usuario"];

$res=$conn->query($sql);
if($res==true){

    print"<script>alert('Usuário Excluído com Sucesso.');</script>";
    print"<script>location.href='?page=listar';</script>";
}else{

    print"<script>alert('Usuário Não Excluído.');</script>";
    print"<script>location.href='?page=listar';</script>";

}


            break;
}