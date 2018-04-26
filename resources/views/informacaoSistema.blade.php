@extends('layout.app')
@section('content')
<div class="container">
	<h1 class="title"> 
		Informações do Sistema
    <a class="add" href="{{url('/')}}" >
        <i class="fa fa-backward" aria-hidden="true" title="Voltar página"></i>
    </a>
	</h1> 
  <div class="row">
    <div class="col-sm-12">
     <p>Sistema de Avaliação de Desempenho para Servidores em Estágio Probatório.</p>

     <p> Versão: beta - 0.1</p>
     
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
     <p>Desenvolvida e mantida pelo Setor e Superintendência de Informática da Prefeitura de Santa Maria de Jetibá - ES.</p>

     <p> Desenvolvido com tecnologia de código aberto e free, com finalidade de agilizar e melhorar performace da avaliação dos funcionários em estágio probatório da Prefeitura de Santa Maria de Jetibá - ES.</p>
     <p> Link para download do programa: <a href="http://github.com/SUPTIN/FAEP"> Git - SUPTIM Projeto FAEP</a>.
     <p> 
        Desenvolvedor: Ewerton L. Nascimento - <a href="http://github.com/elyrio">Git</a>
     </p>
    </div>
  </div>

</div>
@endsection