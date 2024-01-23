<?php

namespace App\Controllers;

use App\Core\Request;
use App\Models\Wash;

class WashController
{

    public function index()
    {
        return view("dashboard/index");
    }

    public function create()
    {
        return view("dashboard/create");
    }

    public function store()
    {
        $name = Request::get("name");
        $description = Request::get("description");
        $location = Request::get("location");
        $data = ["errors"];
        
         if(empty($name))
         {
            $data["errors"]["name"] = "لايمكنك ترك الاسم فارغاً.";
         }
         if(empty($description))
         {
            $data["errors"]["description"] = "لايمكنك ترك الوصف فارغاً.";
        }
         if(empty($location))
         {
            $data["errors"]["location"] = "لايمكنك ترك الموقع فارغاً.";
        }
         
        if(empty($data["errors"])) 
        {       
            Wash::create([
                "name" => $name,
                "description" => $description,
                "location" => $location,
                "user_id" => user()->id,
            ]);

            return redirect("dashboard");

        } else {

        }
        return view("dashboard/create", $data);
    }


    public function services()
    {
        
    }

    
}
