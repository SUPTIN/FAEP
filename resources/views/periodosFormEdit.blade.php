@extends('layout.app')
@section('content')
<div class="container">
	<h1 class="title"> 
		Atualiza Período de Avaliação
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

	<form method="post" action="updatePeriodo">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <input type="hidden" name="id" value="{{$dados->id}}" />
      <div class="row">
      	<div class="form-group">
      	  @if ($dados->ativo == '1')
      	    <label> Desativar? </label>
      	    <input class="form-check-input" name="ativo" value="0" type="radio"/> Sim
      	    <input class="form-check-input" name="ativo" value="1" type="radio" checked="checked"  value="{{old('ativo')}}"/> Não
      	  @else
      	    <label> Ativar? </label>
      	    <input class="form-check-input" name="ativo" value="1" type="radio"/> Sim
      	    <input class="form-check-input" name="ativo" value="1" type="radio" checked="checked"  value="{{old('ativo')}}"/> Não
      	  @endif
      	</div>
      </div>
      <div class="row">
       <div class="form-group col-md-6">
         <label> Data início da avaliação: </label>
         <input class="form-control" name="periodoAvaliacaoIni" value="{{$dados->periodoAvaliacaoIni}}" />
       </div>
       <div class="form-group col-md-6">
         <label> Data final da avaliação: </label>
         <input class="form-control" name="periodoAvaliacaoFim" value="{{$dados->periodoAvaliacaoFim}}"/>
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