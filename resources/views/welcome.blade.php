@extends('layout.layout')

@section('title', 'Teste')

@section('content')

<div id="events-container" class="col-md-12">
    <h2>Eleições</h2>
    <div id="cards-container" class="row">
    @foreach ($elections as $eleicao)
        <div class="card col-md-3">
            <div class="card-body">
                <p class="card-date">Data: {{date('d/m/Y', strtotime($eleicao->data_eleicao))}}</p>
                <h5 class="card-title">{{ $eleicao->nome_eleicao}}</h5>
                <p class="card-participants">Candidatos Participando: </p>
                <a href="/eleicoes/{{ $eleicao->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
       @endforeach

       <div class="col-md-12 buttonAdd">
       <a href="/cadastro/eleicoes" class="btn btn-primary">Criar Eleição</a>
       </div>

    </div>
</div>



@endsection