<?php


namespace App\Models;

use App\Core\Request;
use Model;

class Service extends Model {

    public function wash()
    
    {
        return $this->belongsTo(Wash::class);
    }





} 