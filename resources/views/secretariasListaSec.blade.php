@extends('layout.app')
@section('content')
<div class="container">
	<h1 class="title"> 
		Lista das Secretarias
    <a class="add" href="{{url('/')}}" >
        <i class="fa fa-backward" aria-hidden="true" title="Voltar página"></i>
    </a>
    <a class="add" href="{{url('novaSecretaria')}}" >
        <i class="fa fa-plus-circle" aria-hidden="true" title="Cria nova Secretária"></i>
    </a>
	</h1> 
  <div class="row">

    <table class="table table-hover">
	  <tr>
	  	<th>Descrição</th>
	  	<th width="80px">Ativo?</th>
	  	<th width="80px">Ações</th>
	  </tr>
	  @forelse($secretarias as $secretaria)
	    <tr>
	  	  <td>{{$secretaria->descricao}}</td>
	  	  <td align="center"> 
	  	  	  @if ($secretaria->ativo == '1')   
	  	  	     <i class="fa fa-thumbs-up" arian-hidden="true" title="Ativo SIM" style="color:green"></i>
	  	  	  @else  
	  	  	     <i class="fa fa-thumbs-down" arian-hidden="true" title="Ativo NÃO" style="color:red"></i>            
	  	  	  @endif
	  	  </td>
	  	  <td>
	  	  	<a href="{{url("$secretaria->id/viewSecretaria")}}" class="view">
	  			<i class="fa fa-eye" title="Visualiza a Secretária"></i>
	  		</a> 
	  		<a href="{{url("$secretaria->id/editSecretaria")}}" class="edit">
	  			<i class="fa fa-pencil-square-o" title="Edita a Secretária"></i>
	  		</a>
	  	  </td>
	  	</tr>
	  @empty
	    <tr>
	      <td colspan="90">
	      	<p>Nenhum resultado encontrado!</p>
	      </td>
	    </tr>
	  @endforelse 
	</table>
	<div align="center">{!! $secretarias->links() !!}</div>
  </div>

</div>
@endsection