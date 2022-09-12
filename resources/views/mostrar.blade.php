@extends('layout.layout')

@section('title', $mostrar->nome_eleicao)

@section('content')

<div id="events-container" class="col-md-12">
    <h2>{{ $mostrar->nome_eleicao}}</h2>
    <h4>Eleição ocorre em: {{date('d/m/Y', strtotime($mostrar->data_eleicao))}}</h4>
    <div id="cards-container" class="row">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Candidatos</th>
                    <th scope="col">Cidade</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach($candidatos as $candidato)
        <tbody>
            <tr>
            <td>{{$candidato->nome_candidato}}</td>
            <td>{{$candidato->city}}</td>
            <td class="col-md-1">
            <button class="buttonVote"type="button">Votar</button></td>
            </tr>
        </tbody>
        @endforeach
        </table>

    </div>
</div>



@endsection