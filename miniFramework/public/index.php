<?php

	require_once "../vendor/autoload.php";
	
	//criando um objeto do tipo Route
	$route = new \App\Route;

	//rota que o usuario esta acessando
	print_r($route->getUrl());


	echo 'ta aqui';
?>