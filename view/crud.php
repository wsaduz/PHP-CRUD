<?php
require_once './index.php';
require_once './models/Users.php';
require_once 'css/style.php';

$model = new User;
$model->getUsers();

?>

<div class="container">
    <div class="row">
        <h1>CRUD page</h1> <br>
        <table class="table">
        
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = mysqli_fetch_array($model->data)):?>
    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['email']?></td>
      <td>
            <?php echo $row['date']?>
            <a href="delete/<?echo $row['id']?>" class="btn-delete"><img src="https://mishavoloshchuk.github.io/ico/delete.png" alt="" width="18px" ></a>
            <a class="btn-edit" href="edit/<?echo $row['id']?>"><img src="https://www.seekpng.com/png/full/369-3692649_png-file-svg-sign-up-icon-svg.png" alt="" width="15px"></a>
      </td>
    </tr>
  <?php endwhile?>
  </tbody>
</table>
    <p>
        <a class="btn btn-success" href="/create">Добавить</a>
    </p>
    </div>
</div>


