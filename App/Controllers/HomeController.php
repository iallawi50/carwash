<?php

namespace App\Controllers;

use App\Models\Wash;

class HomeController
{

    public function index()
    {
        return view("home", [
            "washes" => Wash::all()
        ]);
    }

    
}
