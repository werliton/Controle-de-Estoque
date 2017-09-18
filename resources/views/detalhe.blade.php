@extends('layout.principal')

@section('conteudo')
<h1>Detalhe do produto: {{$produto->nome}}</h1>
<ul>
	<li>
		<b>Valor:</b> R$ {{$produto->valor }}
	</li>
	<li>
		<b>Quantidade:</b> R$ {{$produto->quantidade}}
	</li>
	
</ul>
@stop