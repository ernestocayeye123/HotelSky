<?php
switch ($_REQUEST["acaoquarto"]) {
    case 'cadastrar':

        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $preco_uma_noite = $_POST["preco_uma_noite"];
        $preco_um_dia = $_POST["preco_um_dia"];

        $sql = "INSERT INTO quarto (nome, descricao, preco_uma_noite, preco_um_dia) VALUE ('{$nome}', '{$descricao}', '{$preco_uma_noite}', '{$preco_um_dia}')";
        $res = $conn->query($sql);
        if ($res == true) {

            print "<script>alert('Cadastro de Novo Quarto com Sucesso.');</script>";
            print "<script>location.href='?page=cadastroquarto';</script>";
        } else {

            print "<script>alert('Erro de Cadastro de Novo Quarto.');</script>";
            print "<script>location.href='?page=cadastroquarto';</script>";
        }

        break;

    case 'editar':

        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $preco_uma_noite = $_POST["preco_uma_noite"];
        $preco_um_dia = $_POST["preco_um_dia"];

        $sql = "UPDATE quarto SET nome='{$nome}', descricao='{$descricao}', preco_uma_noite='{$preco_uma_noite}', preco_um_dia='{$preco_um_dia}' 
        WHERE codigoQuarto=" . $_REQUEST["codigoQuarto"];

        $res = $conn->query($sql);
        if ($res == true) {

            print "<script>alert('Edição do Quarto com Sucesso.');</script>";
            print "<script>location.href='?page=listarquarto';</script>";
        } else {

            print "<script>alert('Erro na Edição de Cadastro de Novo Quarto.');</script>";
            print "<script>location.href='?page=listarquarto';</script>";
        }

        break;

    case 'excluir':

        $sql = "DELETE FROM quarto WHERE codigoQuarto=" . $_REQUEST["codigoQuarto"];

        $res = $conn->query($sql);
        if ($res == true) {

            print "<script>alert('Quarto Excluído com Sucesso.');</script>";
            print "<script>location.href='?page=listarquarto';</script>";
        } else {

            print "<script>alert('Quarto Não Excluído.');</script>";
            print "<script>location.href='?page=listarquarto';</script>";
        }


        break;
}
