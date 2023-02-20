<?php
session_start();
$logadoAdmin = $_SESSION['logadoAdmin'] ?? False;
$logadoUser = $_SESSION['logadoUser'] ?? False;

if($logadoUser == False || $logadoUser == '' || $logadoUser == NULL){


     die('Você não possui permissão para esta página <br> <a href="http://formspuc.local/logar">Clique para retornar</a>');
 
}

 else{

     $userlogin = $_SESSION['Usuario'];
     $_SESSION['logadoUser'] = True;
     $nomelogado = $userlogin;

}
?>