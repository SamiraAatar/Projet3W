<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
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
        $categorie_prestation=DB::table('categories')-> paginate(4);
            
        return view('home',["listecategories"=>$categorie_prestation]);
    }
    //cette methode sert à afficher la page histoire
    public function histoire () {
        $titre="Ns.Beauty";
    return view('histoire',["titre"=>$titre]);
    }

    //methode pour afficher la page prestations 
    public function prestations (){
        $categorie_prestation=DB::table('categories')-> get();
        return view('prestations',["listecategories"=>$categorie_prestation]);
    }

     

    //methode pour afficher la page contact 
    public function contact (){
        return view('contact');
    }

    //methode pour afficher servicedetail 
    public function servicedetail (Request $request,$categorieId){
        $categorie_prestations=DB::table('prestations')->where('categorie_id',$categorieId)->get();
        return view('servicedetail',["listeprestations"=>$categorie_prestations]);
    }

    // TODO: Reservation de service
    public function ReserverService(Request $request, $serviceId){
        $service_details = DB::table('prestations')->where('id',$serviceId)->first();
        if (!$service_details){
            abort(404);
        }
        return view('reservation',["service_details"=>$service_details]);
    }

    // enregistrer reservation de service
    public function enregisterReservationService(Request $request, $prestation_id){

        DB::table("reservations")->insert([
             "prestation_id"=>$prestation_id,
             "nom"=>$request->nom,
              "prenoms"=>$request->prenoms,
               "numero"=>$request->numero, 
               "prix"=>DB::table("prestations")->where("id", $prestation_id)->first()->prix, 
               "adresse"=>$request->adresse,
                "date_rdv"=>$request->date_rdv,
                 "heure_rdv"=>$request->heure_rdv,
                  "date_reesrvation"=>now()
        ]);
        return response()->json(["status"=>true,"msg"=>"Reservation enregistré"], 200);
    }
}
