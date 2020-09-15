<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\filmeModel;

class filmeController extends Controller
{
    public function listarFilmes(){
       $filmes = filmeModel::paginate(10);
       return view('filmes', ["filmes"=>$filmes]);
    }
    public function detalhesFilmes($id){
        $filmes = filmeModel::find($id);
       return view('detalhesfilmes', ["filmes"=>$filmes]);
    }
    public function cadastrarFilme(Request $request){
        if ($request->isMethod('GET')){
            return view ('cadastrarFilme');
        }

        $novoFilme = new filmeModel();
        $novoFilme->title = $request->title;
        $novoFilme->rating = $request->rating;
        $novoFilme->awards = $request->awards;
        $novoFilme->release_date = $request->release_date;
        $novoFilme->length = $request->length;
        $resultado = $novoFilme->save();

        return view ("cadastrarFilme", ['resultado'=>$resultado]);

    }
    public function deletarFilme($id){
        $filmes = filmeModel::find($id);
        $filmes->delete();

        return redirect()->action("filmeController@listarFilmes");
    }
    
}
