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
    <li class="nav-item active">
      <a class="nav-link" href="viewInternships.php">Internships</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Skills</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">About us</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search for internships" aria-label="Search">
    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
  </form>
</div>
</nav>
<br>
<center><h1 style="" id="sub_heading"> Look for internships . . .</h1>
<br><br> 
  <div class="container">
      
<!--card code starts here-->
<div class="card bg-light mb-3" style="max-width: 50rem; max-height: 50rem;">
  <div class="card-header">Interns Post</div>
  <div class="card-body">
    <h5 class="card-title">Organizaton's Name</h5><br>
      <div class="card-text row">
        <div class="col">Stipend</div>
        <div class="col">Type of internship</div>
        <div class="col">Duration</div>
      
      </div>
      <hr>
      <a href="#" class="btn btn-success">Apply now</a>

  </div>
</div>
<br>
<!--Card code ends here-->
    
    
    
  </div>
</center>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>