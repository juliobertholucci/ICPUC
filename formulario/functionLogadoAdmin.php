<?php
session_start();
$logadoAdmin = $_SESSION['logadoAdmin'] ?? False;
$logadoUser = $_SESSION['logadoUser'] ?? False;

if($logadoAdmin == False || $logadoAdmin == '' || $logadoAdmin == NULL){


     die('Você não possui permissão para esta página <br> <a href="http://localhost/Formspuc/logar0">Clique para retornar</a>');
 
}

 else{

     $userlogin = $_SESSION['Usuario'];
     $_SESSION['logadoAdmin'] = True;
     $nomelogado = $userlogin;

}
?>