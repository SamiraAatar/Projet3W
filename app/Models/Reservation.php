<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**prestation relation */
    public function prestation(){
        return $this->belongsTo(Prestation::class, "prestation_id","id");
    }
}
