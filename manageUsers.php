<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if(!isset($_SESSION['admin_name'])){
  header('location:login_form.php');
  exit;
}
require_once 'MenuController.php';
?>
<head>
  <style>
    a{
      text-decoration: none;

    }
    .home{
      margin-left: 800px;
      font-size: 20px;
    }

  </style>
</head>

<style>
*{
  font-family: sans-serif; 
}
.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 10px 30px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.content-table thead tr {
  background-color: rgb(60, 104, 60);
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}
.content-table th,
.content-table td {
  padding: 20px 25px;
}
.link{
  text-decoration: none;
  color: red;
  font-size: 17px;
}
.first-link{
  color: black;
  font-size: 25px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
  font-size: 30px;
  color: black;
  padding: 30px;
  text-decoration: none;
}
.action-link {
  padding: 5px 10px;
  border-radius: 4px;
  text-decoration: none;
  color: white;
}
.edit-link {
  background-color: #0D8066;
}
.delete-link {
  background-color: #D9001D;
}
.action-link:hover {
  opacity: 0.8;
}
</style>
<?php include 'Dashboard.php';  ?>
<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Usertype</th>
              <th>Actions</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $m = new MenuController; 
          $allMenu = $m->readData();
          foreach($allMenu as $menu): ?>
          <tr>
            <td><?php echo $menu['name'] ?></td>
            <td><?php echo $menu['email'] ?></td>
            <td><?php echo $menu['password'] ?></td>
            <td><?php echo $menu['user_type'] ?></td>
            <td>
              <a class="action-link edit-link" href="Edit.php?id=<?php echo $menu['id'];?>">Edit</a>
              <a class="action-link delete-link" href="Delete.php?id=<?php echo $menu['id'];?>">Delete</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>

</div> 