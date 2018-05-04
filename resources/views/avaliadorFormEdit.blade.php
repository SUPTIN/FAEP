@extends('layout.app')
@section('content')
<div class="container">
	<h1 class="title"> 
		Atualiza Secretaria
    <a class="add" href="{{url("$dados->setor/viewSecretaria")}}" >
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

	<form method="post" action="updateAvaliador">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <input type="hidden" name="id" value="{{$dados->id}}" />
      <input type="hidden" name="setor" value="{{$dados->setor}}" />
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
        <div class="form-group">
          @if ($dados->aceite == '1')
            <label> Retirar aceite? </label>
            <input class="form-check-input" name="aceite" value="0" type="radio"/> Sim
            <input class="form-check-input" name="aceite" value="1" type="radio" checked="checked"  value="{{old('aceite')}}"/> Não
          @else
            <label> Aplicar aceite? </label>
            <input class="form-check-input" name="aceite" value="1" type="radio"/> Sim
            <input class="form-check-input" name="aceite" value="1" type="radio" checked="checked"  value="{{old('aceite')}}"/> Não
          @endif
        </div>
       <div class="form-group col-md-6">
         <label> Nome: </label>
         <input class="form-control" name="nome" value="{{$dados->nome}}" />
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