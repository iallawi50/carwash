<?php


namespace App\Models;

use Model;

class Reservation extends Model {

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wash()
    {
        return $this->belongsTo(Wash::class, "wash_id");
    }
    public function service()
    {
        return $this->belongsTo(Service::class, "service_id");
    }


} 