<?php 
require_once 'EmailController.php';
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
              <th>Subject</th>
              <th>Email</th>
              <th>Message</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $e = new EmailController; 
          $allEmail = $e->readData();
          foreach($allEmail as $email): ?>
          <tr>
            <td><?php echo $email['name'] ?></td>
            <td><?php echo $email['subject'] ?></td>
            <td><?php echo $email['mail'] ?></td>
            <td><?php echo $email['message'] ?></td>
            <td><a href="EmailDelete.php?id=<?php echo $email['id'];?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
    <br><br>
    <br>
    <a class="home"href="index.php">Go to Homepage.php</a>
</div>