<?php
session_start();
if (!isset($_SESSION['email'])) {
  ?>
  <script>
    window.location='index.html';
  </script>
  <?php
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Dashboard</title>
    <style media="screen">
      body{
        background-color: #f5f5f5;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
     <div class="container-fluid">
       <a class="navbar-brand">Dashboard</a>
       <form class="d-flex">
         <a href="logout.php" class="btn btn-outline-success">Logout</a>
       </form>
     </div>
   </nav>
        </div>
        <div class="col-md-12 mt-2">
          <div class="card">
  <div class="card-body">
    <div class="card mb-12">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/<?php echo $_SESSION['img']; ?>" class="img-fluid rounded-start" style="height:100%;width:100%" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4>Your Details</h4>
          <h5 class="card-title" style="font-weight:400">Name : <?php echo $_SESSION['name'] ;?></h5>
          <p class="card-text">Email: <?php echo $_SESSION['email'] ;?></p>
          <p class="card-text">Mobile Number: <?php echo $_SESSION['mobile'] ;?></p>
          <p class="card-text">Password: <?php echo $_SESSION['password'] ;?></p>
          <p class="card-text">Hobbies:  <?php $hobby=$_SESSION['hobbies'] ;
                                               $s=str_replace(',','',$hobby);
                                               echo $s;
          ?></p>
            <p class="card-text">Gender: <?php echo $_SESSION['gender'] ;?></p>
      </div>
    </div>
  </div>
  </div>
</div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
