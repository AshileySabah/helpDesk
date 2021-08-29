<?php
	session_start();

	$validado = false;

	$usuariosValidos = array(
		array('email' => 'adm@gmail.com', 'senha' => '123'),
		array('email' => 'user@gmail.com', 'senha' => 'abc')
	);

	foreach ($usuariosValidos as $contaUsuario) {
		if($contaUsuario['email'] == $_POST['email'] && $contaUsuario['senha'] == $_POST['senha']){
			$validado = true;
			break;
		}
	}

	if($validado){
		$_SESSION['autenticacao'] = 'sim';
		header('Location: home.php');
	}else{
		$_SESSION['autenticacao'] = 'nao';
		header('Location: index.php?login=erro');
	}
?>