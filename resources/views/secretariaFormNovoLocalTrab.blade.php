@extends('layout.app')
@section('content')
<div class="container">
	<h1 class="title"> 
		Novo Local de Trabalho
    <a class="add" href="{{url("$secretaria/viewSecretaria")}}" >
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

	<form method="post" action="addLocalTrab">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <input type="hidden" name="secretaria" value="{{$secretaria}}" />
      <div class="row">
       <div class="form-group col-md-6">
         <label> Nome: </label>
         <input class="form-control" name="descricao" value="{{old('descricao')}}" />
       </div>
      </div>
      <div class="row">
       <div class="form-group" align="center">
       	 <button class="btn btn-primary"> Cadastrar </button>
       </div>
      </div>
    </form>

</div>
@endsection