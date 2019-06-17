<?php

class Db
{
    protected $db;
    
    public function __construct() {
        $config = require 'app/config_db.php';
        $this->db = new PDO($config['dsn'], $config['user'], $config['password']);
    }

    public function query($sql) {
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public function row($sql) {
        $result = $this->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function lastInsertId()
    {
        return $this->db->lastInsertId();
    }
}