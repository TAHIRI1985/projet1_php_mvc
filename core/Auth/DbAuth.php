<?php

namespace Core\Auth;

use Core\Database\Database;

class DbAuth
{
    private $db;


    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function login($psudo_Client, $pass_Client)
    {
        $user = $this->db->prepare("SELECT * FROM clients WHERE psudo_Client=?", [$psudo_Client], null, true);
    }


    public function logged()
    {
        return isset($_SESSION['auth']);
    }
}
