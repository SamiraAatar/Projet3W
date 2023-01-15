<?php

namespace App\Http\Controllers;

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

        return view('admin-views.dashboard', ["reservations_encours"=>$reservations_encours, "reservations_annuler"=>$reservations_annuler, "reservations_valide"=>$reservations_valide]);
    }

    public function detailsReservation(Request $request, $id_reservation){
        return view("admin-views.details-reservation");
    }
}
