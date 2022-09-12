@extends('layout.layout')

@section('title', 'Cadastro Eleições')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Cadastro Eleições</h1>
  <form action="/cadastro/eleicoes" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Nome</label>
      <input type="text" class="form-control" id="nome_eleicao" name="nome_eleicao" placeholder="Nome Eleição">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Qual a cidade?">
    </div>
    <div class="form-group md-form md-outline input-with-post-icon datepicker">
    <label for="title">Data:</label>
      <input placeholder="Selecione data" type="date" id="data_eleicao" name="data_eleicao" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>
@endsection