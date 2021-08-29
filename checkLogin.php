<?php
  session_start();

  if(!isset($_SESSION['autenticacao']) || $_SESSION['autenticacao'] != 'sim'){
    header('Location: index.php?login=erro2');
  }
?>