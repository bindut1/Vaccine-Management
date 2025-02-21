<?php
class Entity_DangKy
{
    public $username;
    public $password;
    public $name;
    public $email;
    public $phone_number;
    public $address;
    public $role;

    public function __construct($_username, $_password, $_name, $_email, $_phone_number, $_address, $role)
    {
        $this->username = $_username;
        $this->password = $_password;
        $this->name =  $_name;
        $this->email = $_email;
        $this->phone_number = $_phone_number;
        $this->address = $_address;
        $this->role = $role;
    }
};
