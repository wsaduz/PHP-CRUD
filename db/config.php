<?php


class Model {
    public $host = 'localhost';
    public $usename = 'root';
    public $password = '';
    public $dbname = 'news';
    function connection() {
        $connection = mysqli_connect($this->host, 'root', $this->password, $this->dbname);
        if(mysqli_connect_error()) {
            echo "Ошибка подключении БД";
        } else {
            return $connection;
        }
    }
}
?>