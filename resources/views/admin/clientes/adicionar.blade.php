
@extends('layout.site')

@section('titulo','Adicionar Cliente')
    
@section('conteudo')
    <div class="container">
        <br><br>
        <h3 style="text-align: center">Adicionar Cliente</h3>
            <div class="container-fluid">
                    <!-- QUANDO ESTIVER TRABALHANDO COM IMAGEM MUITO IMPORTANTE USAR O ENCTYPE COM MULTIPART/FORM-DATA -->
                <form action=" {{route('admin.clientes.salvar')}} " method="post" enctype="multipart/form-data">  
                    <!-- PARA ADICIONAR UM FORMULARIO PRECISA DE UM UM TOCKEN, É SUPER IMPORTANTE POR CAUSA DA SEGURANÇA -->
                    {{ csrf_field() }}
                    @include('admin.clientes._form')
                
                   
                    <button class="btn btn-warning">Salvar</button>
                </form>

            </div>
    </div>




@endsection


