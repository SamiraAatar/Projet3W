<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function deshboard(){
        $reservations_encours = Reservation::where("status", 0)->orderBy("date_reesrvation", "desc")->get();
        return view('admin-views.dashboard', ["reservations_encours"=>$reservations_encours]);
    }
}
