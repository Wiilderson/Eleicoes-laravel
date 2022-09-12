<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ElectionsModel;

use App\Models\CandidatosModel;

class ElectionController extends Controller
{
    //
    public function home() {

        $Elections = ElectionsModel::all();
        return view('welcome', ['elections' => $Elections]);
    }


    public function cadastro() {
        return view('cadastro');
    }

    public function addCandidato(Request $request) {

        $ADD =  new CandidatosModel;

        $ADD->nome_candidato = $request->nome_candidato;
        $ADD->idade = $request->idade;
        $ADD->city = $request->city;

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $ADD->image = $imageName;

        }
       
        $ADD->save();

        return redirect('/candidatos');
    }

    public function getCandidatos() {

        $Candidatos = CandidatosModel::all();
        return view('candidatos', ['candidatos' => $Candidatos]);
    }

    public function showEleicoes($id) {

        $Elections = ElectionsModel::findOrFail($id);

        $Candidatos = CandidatosModel::all();


        return view('mostrar', ['mostrar' => $Elections], ['candidatos' => $Candidatos]);
    }


    public function store(Request $request) {

        $ADD =  new ElectionsModel;

        $ADD->nome_eleicao = $request->nome_eleicao;
        $ADD->city = $request->city;
        $ADD->data_eleicao = $request->data_eleicao;
       
        $ADD->save();

        return redirect('/');
    
    }

    public function eleicoes() {
        return view('EleicoesAdd');
    }



}
