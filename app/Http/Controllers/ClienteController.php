<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
	public function welcome(){
		return view('welcome');
	}

	public function index()
	{
		$registros = Cliente::all();
		return view('admin.clientes.index', compact('registros'));
	}

	public function adicionar(){
		return view('admin.clientes.adicionar');
	}
	public function salvar(Request $req){

		$dados = $req->all();

		if ($req->hasfile('imagem')) {
			$imagem = $req->file('imagem');
			$num = rand(1111,9999);
			$dir = "img/clientes/";
			$ex = $imagem->guessClientExtension();
			$nomeImagem = "imagem_".$num.".".$ex;
			$imagem->move($dir,$nomeImagem);
			$dados['imagem'] = $dir.'/'.$nomeImagem;
		}
		Cliente::create($dados);
		return redirect()->route('admin.clientes');
	}
	public function editar($id){
		$registro = Cliente::find($id);
		return view('admin.clientes.editar',compact('registro'));
	}
	public function atualizar(Request $req,$id){

		$dados = $req->all();

		if ($req->hasfile('imagem')) {
			$imagem = $req->file('imagem');
			$num = rand(1111,9999);
			$dir = "img/clientes/";
			$ex = $imagem->guessClientExtension();
			$nomeImagem = "imagem_".$num.".".$ex;
			$imagem->move($dir,$nomeImagem);
			$dados['imagem'] = $dir.'/'.$nomeImagem;
		}
		Cliente::find($id)->update($dados);
		return redirect()->route('admin.clientes');
	}
	public function deletar($id){
		
		CLiente::find($id)->delete();
		return redirect()->route('admin.clientes');
	}

}

