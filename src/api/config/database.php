<?php
class Database {

    // укажите свои учетные данные базы данных
    private $host = "";
    private $db_name = "";
    private $username = "";
    private $password = "";
    public $conn;

    public function init() {
        $this->host = $_ENV['DB_HOST'];
        $this->db_name = $_ENV['DB_DATABASE'];
        $this->username = $_ENV['DB_USERNAME'];
        $this->password = $_ENV['DB_PASSWORD'];
    }

    // получаем соединение с БД
    public function getConnection(){

        $this->conn = null;

        try {
            $this->init();
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
