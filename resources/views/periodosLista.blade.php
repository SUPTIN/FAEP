@extends('layout.app')
@section('content')
<div class="container">
	<h1 class="title"> 
		Períodos de Avaliação
    <a class="add" href="{{url('/')}}" >
        <i class="fa fa-backward" aria-hidden="true" title="Voltar página"></i>
    </a>
	</h1> 

  <div class="row">
    <table class="table table-hover">
	  <tr>
	  	<th>Período inicial</th>
	  	<th>Período final</th>
	  	<th width="80px">Ativo?</th>
	  	<th width="80px">Ações</th>
	  </tr>
	  @forelse($periodos as $periodo)
	    <tr>
	  	  <td>{{$periodo->periodoAvaliacaoIni}}</td>
	  	  <td>{{$periodo->periodoAvaliacaoFim}}</td>
	  	  <td align="center"> 
	  	  	  @if ($periodo->ativo == '1')   
	  	  	     <i class="fa fa-thumbs-up" arian-hidden="true" title="Ativo SIM" style="color:green"></i>
	  	  	  @else  
	  	  	     <i class="fa fa-thumbs-down" arian-hidden="true" title="Ativo NÃO" style="color:red"></i>            
	  	  	  @endif
	  	  </td>
	  	  <td>
	  		<a href="{{url("$periodo->id/edit")}}" class="edit">
	  			<i class="fa fa-pencil-square-o" title="Edita o Período"></i>
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
  </div>

</div>
@endsection