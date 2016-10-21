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

<form action="/produtos/adiciona" method="post">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<div class="form-group">
		<label for="nome">Nome</label>
		<input name="nome" type="text" class="form-control" placeholder="informe o nome...">
	</div>

	<div class="form-group">
		<label for="">Descrição</label>
		<input name="descricao" type="text" class="form-control" placeholder="informe a descrição...">
	</div>

	<div class="form-group">
		<label for="">Valor</label>
		<input name="valor" type="text" class="form-control" placeholder="informe o valor...">
	</div>

	<div class="form-group">
		<label for="quantidade">Quantidade</label>
		<input name="quantidade" type="text" class="form-control" placeholder="informe a quantidade...">
	</div>

	<div class="form-group">
		<label for="tamanho">Tamanho</label>
		<input name="tamanho" type="text" class="form-control" placeholder="informe o tamanho...">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Adicionar</button>
</form>
@stop