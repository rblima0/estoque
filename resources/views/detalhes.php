<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="/css/app.css">
	<meta charset="UTF-8">
	<title>Controle de Estoque</title>
</head>
<body>
	<div class="container">
		<h1>Detalhes do produto: <?= $p->nome ?> </h1>

		<ul>
		  <li>
		    <b>Valor:</b> R$ <?= $p->valor ?> 
		  </li>
		  <li>
		    <b>Descrição:</b> <?= $p->descricao ?> 
		  </li>
		  <li>
		    <b>Quantidade em estoque:</b> <?= $p->quantidade ?>
		  </li>
		</ul>

	</div>
</body>
</html>