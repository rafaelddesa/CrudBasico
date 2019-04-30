
@extends('layout.site')

@section('titulo','Login ADM')
    
@section('conteudo')
    <div class="container">
        <br><br>
        <h3 style="text-align: center">Entrar</h3>
            <div class="container-fluid">

                <form action=" {{route('site.login.entrar')}} " method="post">  
                    <!-- PARA ADICIONAR UM FORMULARIO PRECISA DE UM UM TOCKEN, É SUPER IMPORTANTE POR CAUSA DA SEGURANÇA -->
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                   
                    <button class="btn btn-warning">Entrar</button>
                </form>

            </div>
    </div>




@endsection


