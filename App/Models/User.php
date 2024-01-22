<?php

namespace App\Models;

use Model;

class User extends Model
{ 

    private $id;
    private $name;
    private $username;
    private $password;

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }

}
