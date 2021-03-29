<?php

require_once 'validate.php';


class UserEdit extends Vadidations{

    public $data;
    public $id;

    public function GetData($id) {
        $db = new Model;
        $select = "SELECT * FROM `users` WHERE id = $id";
        $query = mysqli_query($db->connection(), $select);
        if($query) {
            $this->data = $query;
        }
    }
    public function GetUpdate($id, $username, $email) {
        $db = new Model;
        $sql = "UPDATE `users` SET name='$username', email='$email' WHERE id= $id";
        $query = mysqli_query($db->connection(), $sql);
        if($query) {
            echo "<script>self.location='/index';</script>";
        }
    }
    public function GetDelete($id) {
        $db = new Model;
        $sql = "DELETE FROM `users` WHERE id='$id'";
        $query = mysqli_query($db->connection(), $sql);
        if($query) {
            echo "<script>self.location='/index';</script>";
        }
    }

}

?>