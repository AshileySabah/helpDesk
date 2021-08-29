<?php
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
		header('Location: home.php');
		$_SESSION['login'] = 'ok';
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['senha'] = $_POST['senha'];
	}else{
		header('Location: index.php?login=erro');
	}
?>