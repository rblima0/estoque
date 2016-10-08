<?php

Route::get('/', function()
{
  return '<h1>Primeira lógica com Laravel</h1';
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra') ->where ('id', '[0-9]+');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove') ->where ('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::get('/produtos/altera', 'ProdutoController@altera');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/json', 'ProdutoController@listaJson');