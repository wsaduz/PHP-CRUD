<?php

require_once './index.php';
require_once './models/save.php';

    $model = new save;
    $username = $_POST['username'];
    $email = $_POST['email'];
    if($model->validate($username, $email)) {
        $model->GetSave();
    }
    

?>

<div class="container">
    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите логин">
            <small id="emailHelp" class="" style="color: red;">
            <?php 
            if(!$model->UserErrorMessageUser == null) {
                echo $model->UserErrorMessageUser;
            }?>
            </small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Введите email">
            <small id="emailHelp" class="" style="color: red;">
            <?php 
            if(!$model->MailErrorMessageUser == null) {
                echo $model->MailErrorMessageUser;
            }?>
            </small>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Создать</button>
    </form>
</div>