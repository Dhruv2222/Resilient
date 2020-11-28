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
    <li class="nav-item ">
      <a class="nav-link" href="sthome.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="stprofile.php">My Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="viewInternships.php">Internships</a>
    </li>
    <li class="nav-item active">
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
<center><h1  id="sub_heading">Skills required for different internships</h1>
<br><br>
  <div class="container">
    
      <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/marketing.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Marketing</h5>
      <p class="card-text">Good communication skills, Interpersonal skills, Creativity and Imagination, Influencing and Negotiation skills, Teamwork.</p>
      <p class="card-text"><small class="text-muted">Last updated on 28th Nov 2020.</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/datascience.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Data Scientist</h5>
      <p class="card-text">Programming Skills, Statistics, Machine Learning, Data Wrangling, Data Visualization.</p>
      <p class="card-text"><small class="text-muted">Last updated on 28th Nov 2020.</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/humanresources.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Human Resources</h5>
      <p class="card-text">Employee relations, Human Resources Information Software, Performance management, Teamwork and collaboration.</p>
      <p class="card-text"><small class="text-muted">Last updated on 28th Nov 2020.</small></p>
    </div>
  </div>
</div>
      <br><br>
      <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/socialmedia.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Social Media Handler</h5>
      <p class="card-text">Communication, Writing, Creativity, Efficiency and top-notch organization, Customer care.</p>
      <p class="card-text"><small class="text-muted">Last updated on 28th Nov 2020.</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/softwaredev.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Software Developer</h5>
      <p class="card-text">Problem-solving skills, Programming languages, Excellent organisational and time management skills, Accuracy.</p>
      <p class="card-text"><small class="text-muted">Last updated on 28th Nov 2020.</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/appdev2.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Application Developer</h5>
      <p class="card-text">High-level programming and related technical skills, Problem solving, Ability to work well under pressure, analytical capabilities.</p>
      <p class="card-text"><small class="text-muted">Last updated on 28th Nov 2020.</small></p>
    </div>
  </div>
</div>
      <br><br>
      
  </div>
</center>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>