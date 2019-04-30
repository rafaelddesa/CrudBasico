
@extends('layout.site')

@section('titulo','Editar Cliente')
    
@section('conteudo')
    <div class="container">
        <h3 style="text-align: center" class="center">Editando Cliente</h3>
            <div style="margin-top:20px ; text-align: center" class="container-fluid">
                <form action=" {{route('admin.clientes.atualizar',$registro->id)}} " method="post" enctype="multipart/form-data">  
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                    @include('admin.clientes._form')                        
                    <button class=" btn btn-warning">Atualizar</button>
                </form>

            </div>
    </div>




@endsection

@include('layout._includes.footer')
