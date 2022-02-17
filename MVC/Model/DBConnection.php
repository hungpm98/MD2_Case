<?php
namespace App\Model;

use PDO;
use PDOException;

class DBConnection{
    public $dsn;
    public $username;
    public $password;
    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=casestudy;charset=utf8";
        $this->username = "root";
        $this->password = "";
    }
    public function connect(){
        try{
            return new PDO($this->dsn,$this->username,$this->password);
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
}
