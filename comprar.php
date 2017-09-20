<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- CDN PARA BIBLIOTECAS
	Bootstrap
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	jQuery
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"
	Bootstrap JS
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
	-->
	<link rel="stylesheet" href="lib/bootstrap.min.css" />
	<script src="lib/jquery.min.js"></script>
	<script src="lib/bootstrap.min.js"></script>

	<!-- CONTE�DO LOCAL -->
	<link rel="stylesheet" href="style/main.css" />
	<link rel="stylesheet" media="all" href="lib/material-icons.css" />
	<script src="file/main.js"></script>
	<title>FreeMarKet - venda descomplicada!</title>
</head>
<!-- CORPO HTML -->
<body>
	<!-- Cabe�alho com �cones de menu, t�tulo e busca -->
	<header class="row" id="header_row">
		<!-- �cone de menu -->
		<a onclick="toggleMenu();" href="#" class="col-xs-2" id="header_menu-btn-container">
			<i class="material-icons header-btn">menu</i><span class="header-text">Menu</span>
		</a>
		<!-- logo e t�tulo -->
		<a href="index.php" class="col-xs-8 header_row-center">
			<img src="file/logo-icon-32.png" class="site-logo" ></img><span class="header-text"><strong>FreeMarKet</strong></span>
		</a>
		<!-- �cone de busca (� s� um stub, n�o funciona de fato )-->
		<a href="#" class="col-xs-2" id="header_search-btn-container">
			<i class="material-icons header-btn">search</i><span class="header-text">Procurar</span>
		</a>
	</header>
	<!-- O container para o menu e o container do conte�do da p�gina -->
	<section class="row">
		
		<!-- O container do conte�do da p�gina -->
		<article class="col-xs-12 col-sm-9" id="container">
			<h2>Bem-vindo! Agradecemos ter nos escolhido como seu intermedi�rio de compra. O que voc� procura?</h2>
			<br>
			<div class="form-group" method="post">
				<form class="form-inline">
					<input type="text" class="text-box form-control" id="product_search-text-box"></input>
					<a href="#" onclick="selectAvailableProducts();" class="btn btn-primary form-control">Ver produtos</a>
				</form>
			</div>
			<div id="search_result_container">
				
			</div>
		</article>
		<!-- ~le menu -->
		<ul class="col-sm-3 col-xs-12 list-group"  id="menu-list">
			<a href="comprar.php"><li class="list-group-item">Comprar</li></a>
			<a href="#"><li class="list-group-item">Vender</li></a>
			<a href="#"><li class="list-group-item">Hist�rico de opera��es</li></a>
		</ul>
	</section>
	<br>
	<footer class="row" id="footer_row">
		
	</footer>
</body>
</html>