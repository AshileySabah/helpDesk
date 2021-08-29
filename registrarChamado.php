<?php
	$arquivo = fopen('arquivo.hd', 'a');

	$textoSeperado = implode('#', str_replace('#', '>*<', $_POST));

	fwrite($arquivo, $textoSeperado.PHP_EOL);

	fclose($arquivo);

	header('Location: abrirChamado.php?status=sucesso');
?>