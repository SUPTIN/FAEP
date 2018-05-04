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
          Avaliadores
          <a class="add" href="novoAvaliador"> 
            <i class="fa fa-plus-circle" arian-hidden="true" title="Adicionar novo local de trabalho"></i>
          </a>
        </h3>
      </div>
      <table class="table table-hover">
        <tr>
          <th> Nome </th>
          <th width="80px">Ativo?</th>
          <th width="80px">Ações</th>
        </tr>
        @forelse($avaliadores as $avaliador)
        <tr>
          <td>{{$avaliador->nome }}</td>
          <td align="center"> 
            @if ($avaliador->ativo == '1')   
               <i class="fa fa-thumbs-up" arian-hidden="true" title="Ativo SIM" style="color:green"></i>
            @else  
               <i class="fa fa-thumbs-down" arian-hidden="true" title="Ativo NÃO" style="color:red"></i>            
            @endif
          </td>
          <td>
            <a href="{{url("$avaliador->id/editAvaliador")}}" class="edit">
              <i class="fa fa-pencil-square-o" title="editar Avaliador"></i>
            </a>
          </td>
        </tr>
        @empty
          <tr>
            <td colspan="90"> Nenhum resultado encontrado!</td>
          </tr>
        @endforelse
      </table>
      <div align="center">{!! $avaliadores->links() !!}</div>



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
          <th width="80px">Ações</th>
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
      <div align="center">{!! $locais->links() !!}</div>

</div>
@endsection