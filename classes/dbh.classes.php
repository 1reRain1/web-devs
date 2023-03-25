<?php
class Dbh
{
    protected function connect()
    {
        $username = "root";
        $password = "";
        $dsn = 'mysql:host=localhost;dbname=webdevs';
        try {
            $dbh = new PDO($dsn, $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            echo "connection is not fine " . $e->getMessage() . "</br>";
        }
    }
}