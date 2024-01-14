<?php 
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
            <td><a href="Edit.php?id=<?php echo $menu['id'];?>">Edit</a></td>
            <td><a href="Delete.php?id=<?php echo $menu['id'];?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
    <br><br>
    <br>
    <a class="home"href="index.php">Go to Homepage.php</a>
</div> 