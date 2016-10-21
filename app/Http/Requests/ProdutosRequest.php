<?php namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class ProdutosRequest extends Request {

	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
			'nome' => 'required|max:100',
	        'descricao' => 'required|max:255',
	        'valor' => 'required|numeric',
	        'quantidade' => 'required|numeric',
	        'tamanho' => 'required|max:100'
		];
	}

	public function messages(){
		return [
			'required' => ':attribute é obrigatorio !'
		];
	}

}
