<?php

namespace App\Models;

use Model;

class User extends Model
{ 

    public $id;
    public $name;
    public $username;
    public $password;
    public $phone;
    public $account_type;

    public function washes()
    {
        return $this->hasMany(Wash::class);
    }

    public function wash()
    {
        return $this->washes()[0];
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }


}
