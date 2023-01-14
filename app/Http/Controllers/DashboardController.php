<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function deshboard(){
        $reservations_encours = DB::table("reservations")->where("status", 0)->get();
        return view('admin-views.dashboard', ["reservations_encours"=>$reservations_encours]);
    }
}
