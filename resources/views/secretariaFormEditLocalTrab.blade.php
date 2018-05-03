@extends('layout.app')
@section('content')
<div class="container">
	<h1 class="title"> 
		Atualiza Local de Trabalho
    <a class="add" href="{{url("$dados->secretaria/viewSecretaria")}}" >
        <i class="fa fa-backward" aria-hidden="true" title="Voltar página"></i>
    </a>
	</h1> 
    @if (isset($errors) && count($errors) > 0)
      <div class="alert alert-danger">
      	@foreach ($errors->all() as $error)
      	  <ul>
      		<li>{{ $error }} </li>
      	  </ul>
      	@endforeach
      </div>
    @endif

	<form method="post" action="updateLocalTrab">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <input type="hidden" name="secretaria" value="{{"$dados->secretaria"}}" />
      <div class="row">
      </div>
      <div class="row">
       <div class="form-group col-md-6">
         <label> Nome: </label>
         <input class="form-control" name="descricao" value="{{$dados->descricao}}" />
       </div>
    
      </div>
      <div class="row">
       <div class="form-group" align="center">
       	 <button class="btn btn-primary"> Atualizar </button>
       </div>
      </div>
    </form>

</div>
@endsection