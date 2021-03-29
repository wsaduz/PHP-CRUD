<?php

require_once './index.php';
require_once './models/Edit.php';
require_once 'css/style.php';
require_once './models/save.php';


$model = new UserEdit;
$rout = explode('/', $_SERVER['REQUEST_URI']);
$id = array_pop($rout);
$model->GetData($id);
if($_POST['username'] && $_POST['email']) {
    if($model->GetUpdate($id, $_POST['username'], $_POST['email'])) {
        echo 'True';
    } 
}
$row = mysqli_fetch_array($model->data);

?>





<div class="container">
    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" value="<?php echo $row['name']?>" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите логин">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" value="<?php echo $row['email']?>" name="email" class="form-control" id="exampleInputPassword1" placeholder="Введите email">

        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Редактировать</button>
    </form>
</div>