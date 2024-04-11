<?php

class User
{
    private $id;
    private $name;
    private $email;
    private $userName;
    private $password;

    public function __construct($name, $email, $userName, $password)
    {
        $this->id = uniqid();
        $this->name = $name;
        $this->email = $email;
        $this->userName = $userName;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function add($userData)
    {
        array_push($userData, $this);
        return $userData;
    }
}