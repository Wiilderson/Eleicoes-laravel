@extends('layout.layout')

@section('title', 'Cadastro')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Cadastro candidato</h1>
  <form action="/cadastro" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Foto candidato:</label>
      <input type="file" id="image" name="image" class="from-control-file">
    </div>
    <div class="form-group">
      <label for="title">Nome</label>
      <input type="text" class="form-control" id="nome_candidato" name="nome_candidato" placeholder="Nome completo">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Qual a cidade?">
    </div>
    <div class="form-group">
    <label for="title">Idade:</label>
      <input type="text" class="form-control" id="idade" name="idade" placeholder="Insira a idade">
    </div>
    <input type="submit" class="btn btn-primary" value="Criar candidato">
  </form>
</div>
@endsection