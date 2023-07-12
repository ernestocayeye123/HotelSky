<?php
session_start();
include('php/config.php');
if (empty($_POST['usuarioBD']) || empty($_POST['senha'])){

    header('Location: index.html');
}
$usuarioBD=mysqli_real_escape_string($conn, $_POST['usuarioBD']);
$senha=mysqli_real_escape_string($conn, md5($_POST['senha']));
$query="SELECT id_usuario, usuarioBD FROM usuario WHERE usuarioBD='{$usuarioBD}' AND senha='{$senha}'";

$result=mysqli_query($conn, $query);
$row=mysqli_num_rows($result);
if($row==1){

$_SESSION['usuarioBD'] = $usuarioBD;
header('Location: areaprivada.php');
exit();

}else{ 
  
    $_SESSION['nao_autenticado'] = true;
    header('Location: login.php');
   
exit();

}
?>