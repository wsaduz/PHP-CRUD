<?php

require_once './db/config.php';

class User {

    public $data;

    public function getUsers() {
        $db = new Model;
        $select = "SELECT * FROM users";
        $query = mysqli_query($db->connection(), $select);
        if($query) {
            $this->data = $query;
        }
    }

}


?>