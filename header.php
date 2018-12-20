<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
	<title>Associação Batista do Norte Pioneiro</title>
	<link rel="stylesheet" href="css/geral.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/<?php echo $style; ?>.css">
	<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>

<body>
	<nav class="menu-responsivo">
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="igrejas.php">Igrejas</a></li>
			<li><a href="departamentos.php">Departamentos</a></li>
			<li><a href="contato.php">Contato</a></li>
		</ul>
	</nav>

	<div class="layout">
		<header>
			<div class="container">
				<div class="logo wow bounceInLeft"  data-wow-duration="1s" data-wow-delay="0s">
					<a  href="index.php">
						<img src="imagens/logo.png" alt="logo ABANORPI">
					</a>
				</div>
				
				<div class="menu wow bounceInDown"  data-wow-duration="1s" data-wow-delay="0.2s">
					<nav>
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="sobre.php">Sobre</a></li>
							<li><a href="igrejas.php">Igrejas</a></li>
							<li><a href="departamentos.php">Departamentos</a></li>
							<li><a href="contato.php">Contato</a></li>
						</ul>
					</nav>

					<ul class="hanburger">
						<li><a class="toggle" href="javascript:;"><i class="fas fa-bars"></i></a></li>
					</ul>
					
				</div>
				

				<h1><strong><?php echo $titulo ?></strong></h1>
				<p>Associação batista do norte pioneiro do Paraná</p>
			</div>
		</header>

		<main>