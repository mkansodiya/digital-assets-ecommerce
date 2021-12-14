<?php
session_start();
ob_start();
class database
{
    private $database;
    private $host;
    private $user;
    private $pass;
    protected function connect()
    {
        $this->database = "digi";
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $db = "mysql:host={$this->host};dbname={$this->database}";
        $con = new PDO($db, $this->user, $this->pass);
        if (!$con) {
            die('database connection error');
        } else {

            return $con;
        }
    }
}
