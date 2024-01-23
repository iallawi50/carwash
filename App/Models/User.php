<?php

namespace App\Models;

use Model;

class User extends Model
{ 

    public $id;
    public $name;
    public $username;
    public $password;
    public $account_type;

    public function washes()
    {
        return $this->hasMany(Wash::class);
    }

}
