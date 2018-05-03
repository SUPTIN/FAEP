@extends('layout.app')
@section('content')
<div class="container">
	<h1 class="title"> 
		Detalhes da Secretaria
    <a class="add" href="{{url('secretarias')}}" >
        <i class="fa fa-backward" aria-hidden="true" title="Voltar página"></i>
    </a>
    <a href="{{url("$dados->id/editSecretaria")}}" class="edit">
          <i class="fa fa-pencil-square-o" title="Edita a Secretária"></i>
        </a>
	</h1> 
      <div class="row">
       <div class="form-group col-md-6">
         <h3> <label>{{$dados->descricao}} </label> </h3>
       </div>
      </div>
      <div class="form-group">
        <h3 class="title">
          Local de Trabalho
          <a class="add" href="novoLocalTrab"> 
            <i class="fa fa-plus-circle" arian-hidden="true" title="Adicionar novo local de trabalho"></i>
          </a>
        </h3>
      </div>
      <table class="table table-hover">
        <tr>
          <th> Descrição </th>
          <th> Ação </th>
        </tr>
        @forelse($locais as $local)
        <tr>
          <td>{{$local->descricao}}</td>
          <td>
            <a href="{{url("$local->id/editLocalTrab")}}" class="edit">
              <i class="fa fa-pencil-square-o" title="editar local de trabalho"></i>
            </a>
          </td>
        </tr>
        @empty
          <tr>
            <td colspan="90"> Nenhum resultado encontrado!</td>
          </tr>
        @endforelse
      </table>

</div>
@endsection