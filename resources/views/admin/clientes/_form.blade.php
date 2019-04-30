<div class="container-fluid">
	
	  <div class="form-group row">
	    <label style="text-align: right;" class="col-sm-2 col-form-label">Nome:</label>
	    <div class="col-sm-10">
	      <input type="text"  class="form-control" name="nome" placeholder="Nome" value="{{isset($registro->nome) ? $registro->nome : '' }}">
	    </div>
	  </div>

	  <div class="form-group row">
	    <label style="text-align: right;" for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="ex@mail.com" value=" {{ isset($registro->email) ? $registro->email : '' }}">
	    </div>
	  </div>

	  <div class="form-group row">
	    <label style="text-align: right;" class="col-sm-2 col-form-label">Telefone:</label>
	    <div class="col-sm-10">
	      <input type="text" name="telefone" class="form-control" placeholder="Telefone" value="{{ isset($registro->telefone) ? $registro->telefone : '' }}">
	    </div>
	  </div>

	  <div class="form-group row">
	    <label style="text-align: right;" for="exampleFormControlFile1" class="col-sm-2 col-form-label" >Imagem:</label>
	    <div class="col-sm-10">
	    <input type="file" name="imagem" class="form-control-file" id="exampleFormControlFile1">
		</div>
	  </div>
	  	@if(isset($registro->imagem))
	      <div class="form-group row">
	        	<img style="margin-left: 200px" width="60" height="60" src="{{asset($registro->imagem)}}" />
	      </div>
    	@endif

</div>