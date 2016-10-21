<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use estoque\Produto;

class ProdutoController extends Controller {
	
	public function lista(){
        $produtos = Produto::all();
		return view('produto/listagem')->with('produtos', $produtos);
	}

    public function mostra($id){
        $produto = Produto::find($id);
        if(empty($produto)) {
            return "Esse produto não existe !!!";
        }
        return view('produto/detalhes')->with('p', $produto);
    }

    public function remove($id){
      $produto = Produto::find($id);
      $produto->delete();
      return redirect()->action('ProdutoController@lista');
    }

    public function novo(){
        return view('produto/formulario');
    }

    public function adiciona(){

        $validator = Validator::make(
                ['nome' => Request::input('nome')],
                ['nome' => 'required|min:5'],
                ['descricao' => Request::input('descricao')],
                ['descricao' => 'required|max:255'],
                ['valor' => Request::input('valor')],
                ['valor' => 'required|numeric'],
                ['quantidade' => Request::input('quantidade')],
                ['quantidade' => 'required|numeric'],
                ['tamanho' => Request::input('tamanho')],
                ['tamanho' => 'required|numeric']
            );

        if($validator->fails()){
            $validator->messages();
            return redirect()->action('ProdutoController@novo');
        }

        Produto::create(Request::all());
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function listaJson(){
        $produtos = DB::select('select * from produtos');
        return response()->json($produtos);
    }

    public function altera(){
        
        return redirect()->action('ProdutoController@lista');
    }
}