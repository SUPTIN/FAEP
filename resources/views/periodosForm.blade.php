@extends('layout.app')
@section('content')
<div class="container">
	<h1 class="title"> 
		Novo Período de Avaliação
    <a class="add" href="{{url('periodos')}}" >
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

	<form method="post" action="addPeriodo">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="row">
      	<div class="form-group">
      	  <label class="form-check-inline">
      	    <input class="form-check-input" name="ativo" value="1" type="checkbox" checked="checked"  value="{{old('ativo')}}"/>
      	    Ativo
      	  </label>
      	</div>
      </div>
      <div class="row">
       <div class="form-group col-md-6">
         <label> Data início da avaliação: </label>
         <input class="form-control" name="periodoAvaliacaoIni" value="{{old('periodoAvaliacaoIni')}}" />
       </div>
       <div class="form-group col-md-6">
         <label> Data final da avaliação: </label>
         <input class="form-control" name="periodoAvaliacaoFim" value="{{old('periodoAvaliacaoFim')}}"/>
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