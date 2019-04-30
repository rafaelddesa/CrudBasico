@extends('layout.site')

@section('titulo','Clientes')
    
@section('conteudo')



	<div class="container">
		<br><br>
		<h2 style="text-align: center" >Lista de clientes</h2>
		<div class="row">
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">Nome</th>
			      <th scope="col">Email</th>
			      <th scope="col">Telefone</th>
			      <th scope="col">Imagem</th>
			      <th scope="col">Ações</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($registros as $registro)
				    <tr>
				      <th> {{ $registro->id }} </th>
				      <th> {{ $registro->nome }} </th>
				      <td> {{ $registro->email }} </td>
				      <td> {{ $registro->telefone }} </td>
				      <td><img width="60" src=" {{asset($registro->imagem)}} " alt=" {{ $registro->nome }} "></td>
				      <td>
				      	<a class="btn btn-warning" href=" {{ route('admin.clientes.editar',$registro->id) }} "> Editar </a>
				      	<a class="btn btn-danger"href=" {{ route('admin.clientes.deletar',$registro->id) }} "> Deletar </a>
				      </td>
				    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>

		<div class="row">
			<a class="btn btn-success" href=" {{route('admin.clientes.adicionar')}} ">Adicionar</a>
		</div>
	</div>

@endsection