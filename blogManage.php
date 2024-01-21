<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
    exit;
}
require_once 'ContentController.php';
?>

<head>
  <style>
    * {
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
    .content-table thead tr{
      background-color: rgb(60, 104, 60);
      color: #ffffff;
      text-align: left;
      font-weight: bold;
    }
    .content-table th,
    .content-table td {
      padding: 20px 25px;
    }
    .create-button{
      text-decoration: none;
      color: white;
    }
    .create-button:hover{
      color: black;
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
</head>

<body>
  <?php include 'Dashboard.php'; ?>
  
  <div class="table-container">
    <table class="content-table">
      <thead>
        <tr>
          <th style="background-color: #CC5500"><a class="create-button" href="create-blog.php">Create</a></th>
          <th>Blog image</th>
          <th>Blog title</th>
          <th>Blog body</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $b = new ContentController;
          $allBlog = $b->readData();
          foreach ($allBlog as $blog) : 
        ?>
        <tr>
          <td></td>
          <td><?php echo $blog['blog_image']; ?></td>
          <td><?php echo $blog['blog_title']; ?></td>
          <td><?php echo $blog['blog_body']; ?></td>
          <td><?php echo '<p>Posted by: ' . $blog['admin_name'] . '</p>'; ?></td>

          <td>
            <a class="action-link edit-link" href="edit-blog.php?id=<?php echo $blog['id']; ?>">Edit</a>
            <a class="action-link delete-link" href="delete-blog.php?id=<?php echo $blog['id']; ?>">Delete</a>
          </td>
          
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
