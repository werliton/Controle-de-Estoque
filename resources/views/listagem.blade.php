<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<title>Listagem de produtos</title>
</head>
<body>
	<h1>Listagem de produtos</h1>
<table class="table">
	@foreach ($produtos as $produto)
	<tr class="{{$produto->quantidade <= ($produto->quantidade * 30 /100)? 'danger':''}}">
		<td>{{$produto->nome}}</td>
		<td>{{$produto->valor}}</td>
		<td>{{$produto->quantidade}}</td>
		<td><a href="/produtos/mostra/{{$produto->id}}">Ver mais</a></td>
	</tr>
	@endforeach
</table>
</body>
</html>