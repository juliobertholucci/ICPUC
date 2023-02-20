<?php
global $wpdb;
try {
  session_start();
  $_SESSION['logadoAdmin'] = $_SESSION['logadoAdmin'] ?? False; //admite se a session existe ou não

  $_SESSION['logadoUser'] = $_SESSION['logadoUser'] ?? False; //admite se a session existe ou não

  if (!empty($_POST['botao3'])) { //se o botão p/ logar foi clicado
    $userlogin = sanitize_text_field($_POST['usuarioLogin']); //filtra o campo de usuario
    $usersenha = sanitize_text_field($_POST['usuarioSenha']);//filtra o campo de senha
    $senhadecript = md5($usersenha); //traduz a senha do hash
    try {

      $Result = $wpdb->get_results("SELECT * FROM `wp_tblusuario1` WHERE usuario = '$userlogin' AND senha = '$senhadecript'"); //busca se a senha e o usuario batem

      if ($Result != NULL) { //se deu resultado executa

        $idfromUser = $wpdb->get_results("SELECT idUsuario FROM `wp_tblusuario1` WHERE usuario = '$userlogin'"); //pega o id da tabela usuario usando o nome de usuário digitado
        $Perfil = $wpdb->get_results("SELECT perfil, idUsuario FROM `wp_tblempresausuario` WHERE idUsuario = {$idfromUser[0]->idUsuario}"); //buscando qual é o perfil do usuário que fez o login com base no id dele.

        if ($Perfil != NULL) { //se o perfil foi localizado

          if ($Result != null && $Perfil[0]->perfil == 'D' || $Perfil[0]->perfil == 'S') { //filtra se o usuário logado é Dono (D) ou SysAdmin (S)
            
            session_regenerate_id(); //refaz a session
            $_SESSION['Usuario'] = $userlogin; //passa o nome de usuario
            $_SESSION['Senha'] = $usersenha; //passa a senha
           // $_SESSION['idUsuario'] = $idfromUser[0]->idUsuario; 
            $_SESSION['Perfil'] = $Perfil[0]->perfil; //passa o perfil
            $_SESSION['session_id'] = session_id(); //passa a session
            $_SESSION['logadoAdmin'] = True; //Afirma ter logado como admin
            $_SESSION['logadoUser'] = False; //Afirma false para logar como usuario
            header('Location: http://localhost/Formspuc/sys'); //envia o usuario p/ pagina de administração         
          } 
          else if ($Result != null && $Perfil[0]->perfil == 'P' || $Perfil[0]->perfil == 'A' || $Perfil[0]->perfil == 'F') { //se não for admin ou dono passa pelo filtro de usuario

            session_regenerate_id(); //refaz a session
            $_SESSION['session_id'] = session_id(); //passa a session
            $_SESSION['logadoUser'] = True; //Afirma o login como usuario
            $_SESSION['logadoAdmin'] = False; //Afirma não ter logado como admin
            $_SESSION['Usuario'] = $userlogin; //passa o Usuario
            header('Location: http://localhost/Formspuc/sysu'); //Envia p/ pagina de usuarios
           
          } 
          else { //se não for nenhum dos dois, dá erro

            $_SESSION['logadoUser'] = False; //confirma não ter logado
            $_SESSION['logadoAdmin'] = False;//confirma não ter logado
            $error = "Erro ao Logar!"; //exibe menssagem de erro
          }
        }
      } 
      else { //se não clicou no botão exibe isso

        $error = "Erro ao Logar!";
        $_SESSION['logadoUser'] = False;
        $_SESSION['logadoAdmin'] = False;
      }
      
    }catch (Exception $e) {

      echo "Excecao: ";
      echo $e->getMessage();
    }

  }  
  
} catch (Exception $e) {
  echo "Excecao: ";
  echo $e->getMessage();
}
?>