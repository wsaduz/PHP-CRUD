<?php

require_once 'validate.php';

class save extends Vadidations{

    public function GetSave() {
        $db = new Model;
        $time = date("F j, Y");
        $insert = "INSERT INTO `users` (`id`, `name`, `email`, `date`) VALUES ('null', '$this->username', '$this->email', '$time')";
        $query = mysqli_query($db->connection(), $insert);
        if($query) {
            echo 'Запрос отправлен';
            echo "<script>self.location='http://crud.gg/index';</script>";
        }
    }
}



?>