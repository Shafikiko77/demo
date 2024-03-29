<?php

session_start()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      .form-control{
        margin: 7px;
        width: 470px;
      }
   </style>
</head>
<body>
<!-- navbar starts hare -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Posting</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Add post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Your All post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- navbar ends hare -->
  


<!-- user form  -->
   <div class="card col-lg-5 mx-auto mt-5">
      <div class="card-header">Add post</div>
      <div class="card-body"></div>
      <form action="./controllar/shopPost.php" method="post">
          <input value="<?=$_SESSION['old']['title'] ?? '' ?>" name="title" type="text" placeholder="Title" class="form-control my-3">
          <?php
          if(isset($_SESSION['errors']['Title_error'])){
            ?>
            <span class="text-danger">
            <?=$_SESSION['errors']['Title_error']?>
           </span>
          <?php
          }
          ?>
          
          <textarea name="details" class="form-control my-3" placeholder="Details"><?=$_SESSION['old']['details'] ?? '' ?></textarea>
          <?php
          if(isset($_SESSION['errors']['details_error'])){
            ?>
            <span class="text-danger">
            <?=$_SESSION['errors']['details_error']?>
           </span>
          <?php
          }
          ?>
          <input value="<?=$_SESSION['old']['author'] ?? '' ?>" name="author" type="text" placeholder="author" class="form-control my-3">
          <button type="submit" class="btn btn-primary my-2 mx-2">Submit</button>
      </form>
   </div> 

<!-- user form ends -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>



<?php
session_unset()

?>