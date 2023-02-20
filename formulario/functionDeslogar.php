<?php
if(isset($_POST['btnLogoff'])){
    header('Location: http://localhost/Formspuc/logar');
    session_destroy();
    // session_unset();
}
?>