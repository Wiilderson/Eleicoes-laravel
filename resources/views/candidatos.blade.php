@extends('layout.layout')

@section('title', 'Ala Candidatos')

@section('content')

<div id="events-container" class="col-md-12">
    <h2>Candidatos</h2>
    <div id="cards-container" class="row">
    @foreach($candidatos as $candidato)
        <div class="card col-md-3">
        <img src="/img/events/{{ $candidato->image }}" alt="{{ $candidato->nome_candidato }}">
            <div class="card-body">
                <p class="card-date">Cidade: {{$candidato->city}}</p>
                <h5 class="card-title">{{$candidato->nome_candidato}}</h5>
                <p class="card-participants">idade: {{$candidato->idade}}</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
       @endforeach
    </div>
</div>


@endsection