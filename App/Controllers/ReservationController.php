<?php

namespace App\Controllers;

use App\Core\Request;
use App\Models\Reservation;

class ReservationController
{


    public function index()
    {  
        return view("reservation");
    }

    public function store()
    {
        $date = Request::get("date");
        $time = Request::get("time");
        $wash_id = Request::get("wash_id");
        $user_id = Request::get("user_id");
        $today = implode('',  explode("-", date("Y-m-d")));
        $reserv = implode('',  explode("-", $date));
        $data = [];
        
        if(empty($date))
        {
            $data["errors"]["date"] = "لايمكنك ترك التاريخ فارغاً";
        }
        
        if($today > $reserv)
        {
            $data["errors"]["date"] = "لايمكنك اختيار تاريخ قديم";
        }
        
        if(empty($time))
        {
            $data["errors"]["time"] = "لايمكنك ترك الوقت فارغاً";
        }


        if(empty($data["errors"])){
            Reservation::create([
                "date" => $date,
                "time" => $time,
                "wash_id" => $wash_id,
                "user_id" => user()->id
            ]);
            return view("reservation/done");
        }


        return view("reservation", $data);

    }


    
}
