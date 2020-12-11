<?php


class DBConnection
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'hospital';
    private $port = '3306';

    private $connection;

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection = new Mysqli($this->host,$this->username,$this->password,$this->database,$this->port);
    }

    /**
     * @return Mysqli
     */
    public function getConnection()
    {
        return $this->connection;
    }
}