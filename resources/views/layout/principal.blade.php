<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/custom.css">
	<meta charset="UTF-8">
	<title>Controle de Estoque</title>
</head>
<body>
	<div class="container">
	<nav class="navbar navbar-default">
	    <div class="container-fluid">

	    <div class="navbar-header">      
	      <a class="navbar-brand" href="/produtos">ESTOQUE</a>
	    </div>

	      <ul class="nav navbar-nav navbar-right">
			@if (Auth::guest())
				<li><a href="/auth/login">Login</a></li>
				<li><a href="/auth/register">Register</a></li>
			@else
				<li>{{ Auth::user()->name }} </li>
				<li><a href="/auth/logout">Logout</a></li>
			@endif
	      	<li><a href="/produtos">Listagem</a></li>
	        <li><a href="/produtos/novo">Novo</a></li>
	      </ul>

	    </div>
  	</nav>
		
		@yield('conteudo')

	<footer class="footer">
		<p>© Desenvolvimento com Laravel para controle de estoque</p>
	</footer>

	</div>
</body>
</html>