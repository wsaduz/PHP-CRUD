<?php

require_once './index.php';
require_once './models/Edit.php';

$model = new UserEdit;
$rout = explode('/', $_SERVER['REQUEST_URI']);
$id = array_pop($rout);
$model->GetData($id);
$row = mysqli_fetch_array($model->data);
if($_POST) {
    $model->GetDelete($id);
}
?>

<div class="container" style="margin-top: 10px;">

        <form action="" method="post">
        
        <input class="form-control" type="text" placeholder="<?php echo $row['name']?>" readonly> <br>
        <input class="form-control" type="text" placeholder="<?php echo $row['email']?>" readonly> <br>
        <button type="submit" name="delete" class="btn btn-danger btn-lg btn-block">Удалить</button>  

        </form>

</div>