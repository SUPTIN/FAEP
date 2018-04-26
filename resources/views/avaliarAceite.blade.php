@extends('layout.app')
@section('content')
<div class="container">
	<h1 class="title"> 
		Aceite e Instruções de avaliação.
    <a class="add" href="{{url('/')}}" >
        <i class="fa fa-backward" aria-hidden="true" title="Voltar página"></i>
    </a>
	</h1> 
  <div class="row" align="center">
      <table>
      	<tr>
      		<td align="center">INSTRUÇÕES BÁSICAS DE PREENCHIMENTO</td>
      	</tr>
      	<tr>
      		<td>1. Leia com atenção as descrições dos fatores/itens contidos neste formulários</td>
      	</tr>
      	<tr>
      		<td>2. Seja o mais objetivo e imparcial possível em suas escolhas.</td>
      	</tr>
      	<tr>
      		<td>3. Não deixe nenhum fator/item sem avaliação. Confira bem o preenchimento.</td>
      	</tr>
      	<tr>
      		<td>4. Indique apenas uma alternativa para cada item avaliado.</td>
      	</tr>
      	<tr>
      		<td>5. Selecione a opção que melhor descreva a atuação do servidor diante dos fatores/itens analisados.</td>
      	</tr>
      	<tr>
      		<td>6. Ao final, confirme a pontação calculada.</td>
      	</tr>
      	<tr>
      		<td align="center">Alternatica (a) - 20 pontos  |  Alternatica (b) - 16 pontos  |  Alternatica (c) - 12 pontos  |  Alternatica (d) - 8 pontos</td>
      	</tr>
      </table>
      <a href="{{url('listaAvaliados')}}">
          <img src="icones/aceite.png" alt="Termo de aceite"/>
          <div class="caption">
              <h4 align="center">Concordo e aceitos os termos da avaliação</h4>
          </div>
      </a>
  </div>

</div>
@endsection