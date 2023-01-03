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

    public function getUserId()
    {
        if ($this->logged()) {
            return $_SESSION['auth'];
        } else {
            return false;
        }
    }


    public function login($pseudo_Client, $pass_Client)
    {
        $user = $this->db->prepare('SELECT * FROM clients WHERE pseudo_Client=?', [$pseudo_Client], null, true);
        if ($user) {
            if ($user->pass_Client === sha1($pass_Client)) {
                $_SESSION['auth'] = $user->id;
                return true;
            }
        } else {
            return false;
        }
    }


    public function logged()
    {
        return isset($_SESSION['auth']);
    }
}
