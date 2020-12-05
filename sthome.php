<?php
    /* at the top of 'check.php' */
    if((!isset($_SERVER['HTTP_REFERER'])) || (isset($_SESSION["uid"]))){
    // redirect them to your desired location
    header("Location: http://localhost/Resilient/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <style>
  body{
    /* background-image: repeating-linear-gradient(white,#9933FF); */
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSraJfiuK1417TXvBIDGlMSOWmmy33uevCEyw&usqp=CAU");
  }
      #main_heading{
    font-family: "Sofia";
    font-size: 25px;
    font-weight: bold;
  }
      .card-body{
          height: 200px;
      }
      #card-buttons{
          width: 200px;
      }
      #sub_heading{
            font-family: "Sofia";
            /* font-size: 40px; */
            font-weight: bold;
            color: aqua;
        }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
<a class="navbar-brand" href="#" id="main_heading">Resilient</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="sthome.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="stprofile.php">My Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="viewInternships.php">Internships</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="stskills.php">Skills</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">About us</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search for internships" aria-label="Search">
    <a class="btn btn-outline-danger my-2 my-sm-0" href="logout.php" type="button">Logout</a>
  </form>
</div>
</nav>
<br>
<center><h1  id="sub_heading"> Welcome Home!</h1>
<br><br>
  <div class="row container">
  <div class="col-sm-3">
    <div class="card">
      <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRXe5FMy7t0WmZjZOHMgQV7Cp8vy8exMKp4AQ&usqp=CAU" height="200px" width="10px" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Look for internships</h5>
        <p class="card-text">Go through the internships offered by various organizations</p>
        <a href="viewInternships.php" class="btn btn-primary" id="card-buttons">Look -></a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRXekAHr39b9iwjG_tpwFo-APRbndaxsJa1bQ&usqp=CAU" height="200px" width="10px" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Applied internships</h5>
        <p class="card-text">See the internships that you have applied to and check it's status.</p>
        <a href="myApplications.php" class="btn btn-primary" id="card-buttons">View</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img class="card-img-top" src="https://image.freepik.com/free-psd/ui-ux-designer-resume-template_237398-11.jpg" height="200px" width="10px" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">View my profile</h5>
        <p class="card-text">Click the button below to view details that you have entered.</p>
        <a href="stprofile.php" class="btn btn-primary" id="card-buttons">View</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img class="card-img-top" src="https://i.pinimg.com/originals/28/16/fd/2816fdbf19b86000f5eef641888ea209.png" height="200px" width="10px" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Explore New Skills</h5>
        <p class="card-text">See the skill requirements for different internship posts and learn accordingly.</p>
        <a href="stskills.php" class="btn btn-primary" id="card-buttons">Explore</a>
      </div>
    </div>
  </div>
</div>
</center>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>