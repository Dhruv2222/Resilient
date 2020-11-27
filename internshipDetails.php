<?php
session_start();
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
<center><h1 style="" id="sub_heading"> Look for internships . . .</h1></center>
<?php
$internshipid=$_GET['internshipid'];
if ($_SERVER['REQUEST_METHOD']=='GET') {
  $conn = mysqli_connect('localhost','root','','resilient');
  $sql2="SELECT * FROM internships WHERE internshipid='$internshipid'";
  $result=mysqli_query($conn,$sql2);
  if (mysqli_num_rows($result)>0) {
    while($row = mysqli_fetch_assoc($result)) {
      $organization=$row["organization"];
      $post=$row["post"];
      $jobdesc=$row["jobdesc"];
      $eligibility=$row["eligibility"];
      $stipend=$row["stipend"];
      $interntype=$row["interntype"];
      $duration=$row["duration"];
      $perks=$row["perks"];
}

 ?>
<br>
<center>
<br><br>
  <div class="container">

<!--card code starts here-->
<div class="card bg-light mb-3" style="height: 500px;width: 500px;">
  <div class="card-header"><?php echo $organization; ?></div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $post; ?></h5><br>
      <div class="card-text row">
        <div class="col"><?php echo "<i>Stipend :  </i>Rs.".$stipend; ?></div>
      </div>
      <hr>
      <div class="card-text row">
      <div class="col"><?php echo "<i>Type of Internship :  </i>".$interntype; ?></div>
      </div>
      <hr>
      <div class="card-text row">
      <div class="col"><?php echo "<i>Duration :  </i>".$duration; ?></div>
    </div>
    <hr>
      <div class="card-text row">
        <div class="col"><?php echo "<i>Job Description :  </i>".$jobdesc; ?></div>
      </div>
      <hr>
      <div class="card-text row">
        <div class="col"><?php echo "<i>Eligibility :  </i>".$eligibility; ?></div>
      </div>
      <hr>
      <div class="card-text row">
        <div class="col"><?php echo "<i>Perks :  </i>".$perks; ?></div>
      </div>
      <hr>
      <br><br>
      <a href="#" class="btn btn-success">Apply now</a>
  </div>
</div>

<!--Card code ends here-->
  </div>
  <?php
    }
    } else{
    echo "No Internships Available";
    }
 ?>
</center>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
