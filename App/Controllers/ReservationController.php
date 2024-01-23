<?php

namespace App\Controllers;

use App\Core\Request;
use App\Models\Reservation;
use App\Models\Wash;

class ReservationController
{


    public function index()
    {  

        $services = Wash::find(Request::get("id"))->services();
        return view("reservation/index", [
            "services" => $services
        ]);
    }

    public function store()
    {
        $services = Wash::find(Request::get("id"))->services();

        $date = Request::get("date");
        $time = Request::get("time");
        $wash_id = Request::get("id");
        $service_id = Request::get("service_id");
        $user_id = Request::get("user_id");
        $today = implode('',  explode("-", date("Y-m-d")));
        $reserv = implode('',  explode("-", $date));
        $data = [
            "services" => $services
        ];
        
        if(empty($service_id))
        {
            $data["errors"]["service"] = "يرجى اختيار الباقة";
        }
        
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
                "service_id" => $service_id,
                "user_id" => user()->id
            ]);
            return view("reservation/done");
        }


        return view("reservation/index", $data);

    }


    public function all()
    {
        return view("reservation/all");
    }



    public function manage()
    {
        return view("reservation/manage");
    }

    public function update(){
        Reservation::update(Request::get("id"), [
            "status" => Request::get("status")
        ]);

        return back();

    }
    
}
