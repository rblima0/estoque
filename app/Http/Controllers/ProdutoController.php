<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {
	
	public function lista(){
        $produtos = DB::select('select * from produtos');
		return view('produto/listagem')->with('produtos', $produtos);
	}

    public function mostra(){
        $id = Request::route('id');
        $produto = DB::select('select * from produtos where id = ?', [$id]);
        if(empty($produto)) {
            return "Esse produto não existe !!!";
        }
        return view('produto/detalhes')->with('p', $produto[0]);
    }

    public function novo(){
        return view('produto/formulario');
    }

    public function adiciona(){

        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');

        DB::insert('insert into produtos (nome, descricao, valor, quantidade) values (?, ?, ?, ?)', array($nome, $descricao, $valor, $quantidade));
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
        //return redirect('/produtos')->withInput();
        //return view('produto/adicionado')->with('nome', $nome);
    }

    public function listaJson(){
        $produtos = DB::select('select * from produtos');
        return response()->json($produtos);
    }
}