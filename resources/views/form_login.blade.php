@extends('layout/principal')

@section('conteudo')

<h1>Novo Produto</h1>

@if(count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif

<form action="/login" method="post">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<div class="form-group">
		<label for="email">Email</label>
		<input name="email" type="text" class="form-control" placeholder="informe o email...">
	</div>

	<div class="form-group">
		<label for="">Senha</label>
		<input name="password" type="password" class="form-control" placeholder="informe a senha...">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Login</button>
</form>
@stop