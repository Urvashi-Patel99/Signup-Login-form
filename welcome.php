<?php
include 'connect.php';
session_start();
if(!isset($_SESSION['username'])){
  header('location:index.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
  <div class="container bg-info-subtle my-5 mx-5">
<div class="jumbotron">
  <h1 class="display-4 text-center text-success">Welcome <?php echo $_SESSION['username']
  ?></h1>
  <p>Where you can explore necessary resources! </p>
  <p class="lead">
    <a href="logout.php" class="btn btn-danger btn-lg" role="button">Logout</a>
  </p>
</div>
  </div>
</body>
</html>