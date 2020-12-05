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
<br>
<center><h1 style="" id="sub_heading">My Applications:</h1></center>
<?php
$uid = $_SESSION["uid"];
$conn = mysqli_connect('localhost','root','','resilient');
$sql2="SELECT * FROM applicants WHERE uid='$uid'";
$result=mysqli_query($conn,$sql2);
if (mysqli_num_rows($result)>0) {
  while($row = mysqli_fetch_assoc($result)) {
    $intid = $row["internshipid"];
    $sql3 = "SELECT * FROM internships WHERE internshipid='$intid'";
    $result3=mysqli_query($conn,$sql3);
    while($row3 = mysqli_fetch_assoc($result3)){
        $post = $row3["post"];
        $organization=$row3["organization"];
 ?>
<center>
<br>
  <div class="container">

<!--card code starts here-->
<div class="card bg-light mb-3" style="max-width: 50rem; ">
  <div class="card-header"><?php echo $organization; ?></div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $post; ?></h5><br>
      <div class="card-text row">
        <div class="col"><u>Stipend</u></div>
        <div class="col"><u>Duration</u></div>
        <div class="col"><u>Internship Type</u></div>

      </div>
      <div class="card-text row">
        <div class="col"><?php echo $row3["stipend"]; ?></div>
        <div class="col"><?php echo $row3["duration"]; ?></div>
        <div class="col"><?php echo $row3["interntype"]; ?></div>

      </div>
      <hr>
      <div class="row">
        <?php
        if ($row["status"]==1) {
          echo '<div class="col" style="color: green;"><h6>Status:  Approved</h6></div>';
        } else{
          echo '<div class="col" style="color: black;"><h6>Status: Pending</h6></div>';
        }?>


      </div>

  </div>
</div>

<!--Card code ends here-->
  </div>
  <?php
        }
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