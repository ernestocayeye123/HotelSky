<?php

if(!$_SESSION['usuarioBD']){

header('Location: index.html');
exit();
}