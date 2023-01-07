<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //fonction pour afficher la page d'acceuil
    public function home (){
        //db permet de faire une liaison entre la base de donnée et notre application
        //table va nous permette de savoir a quel table on s'adresse
        //get nous permet de récuperer toute les informations
        $categorie_prestation=DB::table('categories')->get();
        dd($categorie_prestation);
        
        return view('home');
    }


    /**affichage de la page histoire */
    public function histoire(){
       
        $titre="Ns.Beauty";
        return view('histoire',["titre"=>$titre]);
    }


}



