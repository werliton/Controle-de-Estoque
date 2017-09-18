@extends('layout.principal')

@section('conteudo')

<h1>Novo Produto</h1>

<form>
  <div class="form-group">
    <label for="email">Nome:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Quantidade:</label>
    <input type="password" class="form-control" id="pwd">
  </div>

  <div class="form-group">
    <label for="email">Valor:</label>
    <input type="email" class="form-control" id="email">
  </div>
 
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

@endsection