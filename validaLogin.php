<?php
	session_start();

	$usuarioID = null;

	$validado = false;

	$usuariosValidos = array(
		array('id' => 1, 'email' => 'adm@gmail.com', 'senha' => '123', 'perfil' => 'administrador'),
		array('id' => 2, 'email' => 'user1@gmail.com', 'senha' => '123', 'perfil' => 'usuario'),
		array('id' => 3, 'email' => 'user2@gmail.com', 'senha' => '123', 'perfil' => 'usuario')
	);

	foreach ($usuariosValidos as $contaUsuario) {
		if($contaUsuario['email'] == $_POST['email'] && $contaUsuario['senha'] == $_POST['senha']){
			$usuarioID = $contaUsuario['id'];
			$perfil = $contaUsuario['perfil'];
			$validado = true;
			break;
		}
	}

	if($validado){
		$_SESSION['autenticacao'] = 'SIM';
		$_SESSION['usuarioID'] = $usuarioID;
		$_SESSION['perfil'] = $perfil;
		header('Location: home.php');
	}else{
		$_SESSION['autenticacao'] = 'NAO';
		header('Location: index.php?login=erro');
	}

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
?>