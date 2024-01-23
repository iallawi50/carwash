<?php

namespace App\Controllers;

use App\Core\Request;
use App\Models\Service;
use App\Models\Wash;
use App\QueryBuilder;

class ServiceController
{

    public function index()
    {
        $services = Wash::find(user()->id, "user_id")->services();
        return view("dashboard/services/index", [
            "services" => $services
        ]);
    }

    public function store()
    {
        $title = Request::get("title");
        $price = Request::get("price");
        $data = [];


        if (empty($title)) {
            $data["errors"]["title"] = "لايمكنك ترك العنوان فارغاً";
        }

        if (empty($price)) {
            $data["errors"]["title"] = "لايمكنك ترك السعر فارغاً";
        }

        if (empty($data["errors"])) {
            Service::create([
                "title" => $title,
                "price" => $price,
                "wash_id" => user()->washes()[0]->id
            ]);
        }

        return redirect("dashboard/services");
    }

    public function delete()
    {
        if(user()->id != Wash::find(Service::find(Request::get("id"))->wash_id)->user_id) {
            return redirect_home();
        }
        Service::delete(Request::get("id"));
        return back();
    }
}
