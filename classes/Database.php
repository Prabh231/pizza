<?php

class Database {

    private string $host = '172.31.22.43';
    private string $db_name = 'Prabhjot200651351';
    private string $username = 'Prabhjot200651351';
    private string $password = 'zsNffVJ0B-';

    private ?PDO $connection = null;
    public function connect() {
        if ($this->connection !== null) {
            return $this->connection;
        }
        $dsn = "mysql:host={$this->host};dbname={$this->dbName};charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        try {
            $this->connection = new PDO($dsn,$this->username,$this->password,$options);
            return $this->connection;
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
}
}
?>