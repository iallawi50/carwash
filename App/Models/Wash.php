<?php


namespace App\Models;

use Model;

class Wash extends Model {

    public static $table = "washes";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class, "wash_id");
    }


} 