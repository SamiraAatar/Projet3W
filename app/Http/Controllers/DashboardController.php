<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function deshboard(){
        $reservations_encours = Reservation::where("status", 0)->orderBy("date_reesrvation", "desc")->simplePaginate(20);
        $reservations_valide = Reservation::where("status", 1)->orderBy("date_reesrvation", "desc")->simplePaginate(20);
        $reservations_annuler = Reservation::where("status", -1)->orderBy("date_reesrvation", "desc")->simplePaginate(20);

        $count_reservations_encours = Reservation::where("status", 0)->count();
        $count_reservations_valide = Reservation::where("status", 1)->count();
        $count_reservations_tous = Reservation::count();


        return view('admin-views.dashboard', [
            "reservations_encours"=>$reservations_encours,
         "reservations_annuler"=>$reservations_annuler,
          "reservations_valide"=>$reservations_valide,
        

          "count_reservations_encours"=>$count_reservations_encours,
          "count_reservations_valide"=>$count_reservations_valide,
           "count_reservations_tous"=>$count_reservations_tous
        ]);
    }

    /**details d'une reservation */
    public function detailsReservation(Request $request, Reservation $reservation){
        return view("admin-views.details-reservation", ["reservation"=>$reservation]);
    }

     /**confirmation d'une reservation */
     public function confirmReservation(Request $request, Reservation $reservation){
        $reservation->status = 1;
        $reservation->save();
        return redirect()->route("details.reservation", $reservation->id);

    }

     /**annulation d'une reservation */
     public function annulerReservation(Request $request, Reservation $reservation){
        $reservation->status = -1;
        $reservation->save();
        return redirect()->route("details.reservation", $reservation->id);
    }

    //affichage des prestations 
    public function listeprestation(){
        $prestations=Prestation::all();
        return view("admin-views.prestations",["prestations"=>$prestations]);
    }


}
