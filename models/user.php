<?php
class User
{
    public $name;
    public $lastname;
    public $email;
    public $password;

    public function __construct(String $_name, String $_lastname, String $_email, String $_password)
    {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->password = $_password;
    }
}
