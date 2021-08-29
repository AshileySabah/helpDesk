<?php
	session_start();

	$usuarioID = $_SESSION['usuarioID'];
	echo "<pre>";
	print_r($usuarioID);
	echo "</pre>";

	$arquivo = fopen('arquivo.hd', 'a');

	$textoSeperado = implode('#', str_replace('#', '>*<', $_POST));

	fwrite($arquivo, $textoSeperado."#$usuarioID".PHP_EOL);

	fclose($arquivo);

	header('Location: abrirChamado.php?status=sucesso');
?>