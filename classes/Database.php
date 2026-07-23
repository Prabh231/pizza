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
}
?>