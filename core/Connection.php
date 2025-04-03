<?php
require_once 'Utils.php';
class Connection
{
    use Utils;

    public function getConnection($host, $dbname, $username, $password)
    {
        try {
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
            $pdo = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ]);
            return $pdo;
        } catch (PDOException $e) {
            die($this->response("error","Database connection failed!", $e->getMessage()));
        }
    }
}