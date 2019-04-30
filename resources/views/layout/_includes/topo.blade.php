<!DOCTYPE html>
<html>
	<head>
		<title> @yield('titulo') </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
<body>
	<div class="navbar navbar-expand-lg navbar-light bg-light">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="/">CRUD</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a style="font-size: 25px" class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
		      @if(Auth::guest())
	                <div class="row">
	                	<li>
	                		<a style="margin-left: 900px;margin-top: 7px" class="nav-item nav-link active" href="{{ route('site.login')}}">
	                			Login
	                		</a>
	                	</li>
	            	</div>
	            @else
	            <div class="row">
	                <li><a style="margin-left: 10px;font-size: 25px" class="nav-item nav-link active" href="{{ route('admin.clientes')}}">Cursos</a></li>
	                <li style="margin-left: 900px;font-size: 19px" class="pull-right" href="#"> {{Auth::user()->name }}
	                </li>
	                <li><a style="font-size: 19px;text-align: right;" class="nav-item nav-link active" href=" {{route('site.login.sair')}} ">Sair</a></li>
	            </div>    
	            @endif
		      
		    </div>
		  </div>
		</nav>
	</div>