<?php
/**
 * Created by PhpStorm.
 * User: aleksandr
 * Date: 14.11.16
 * Time: 2:54
 */
namespace models;

class Connector
{
    private $pdo;

    public function __construct($databasename, $user, $pass)
    {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=' . $databasename . ';charset=UTF8', $user, $pass);
        if (!$this->pdo) {
            return false;
            //throw new Exception('Error connecting to the database');
        }

    }

    public function getPdo()
    {
        return $this->pdo;
    }
}