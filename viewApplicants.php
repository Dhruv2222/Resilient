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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#" id="main_heading">Resilient</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item ">
      <a class="nav-link" href="rehome.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="viewAddedInternships.php">Internships-offered</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="reAddInternship.php">Add-internship</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="viewApplicants.php">Applicants</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">TnC</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0" >
      <a class="nav-link disabled" href="#">My profile</a>
      <a class="btn btn-outline-danger my-2 my-sm-0" href="logout.php" type="button">Logout</a>
  </form>
</div>
</nav> 
<br>
<br>
<center><h1 style="" id="sub_heading"> Applicants:</h1></center>
<?php
$conn = mysqli_connect('localhost','root','','resilient');
$uid = $_SESSION["uid"];
$sql2="SELECT * FROM internships WHERE uid='$uid'";
$result=mysqli_query($conn,$sql2);
if (mysqli_num_rows($result)>0) {
  while($row = mysqli_fetch_assoc($result)) {
    $intid = $row["internshipid"];
    $sql3 = "SELECT * FROM applicants WHERE internshipid='$intid'";
    $result3=mysqli_query($conn,$sql3);
    while($row3 = mysqli_fetch_assoc($result3)){
        $uuid = $row3["uid"];
        $sql4="SELECT * FROM stdetails WHERE uid='$uuid'";
        $result4=mysqli_query($conn,$sql4);
        $row4 = mysqli_fetch_assoc($result4);
        $name=$row4["stname"];
 ?>
<center>
<br>
  <div class="container">

<!--card code starts here-->
<div class="card bg-light mb-3" style="max-width: 50rem; ">
  <div class="card-header"><?php echo "Applicant ".$name; ?></div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $name; ?></h5><br>
      <div class="card-text row">
        <div class="col"><u>UGDegree</u></div>
        <div class="col"><u>Branch</u></div>
        <div class="col"><u>Contact</u></div>

      </div>
      <div class="card-text row">
        <div class="col"><?php echo $row4["degree"]; ?></div>
        <div class="col"><?php echo $row4["degreebranch"]; ?></div>
        <div class="col"><?php echo $row4["stcontact"]; ?></div>


      </div>
      <hr>
      <div class="row">
          <div class="col">
          <form method="post"> <button class="btn btn-success" type="submit">Hire</button></form>
          </div>
          <div class="col">
           <button class="btn btn-success">View Resume</button>
          </div>

      </div>



  </div>
</div>

<!--Card code ends here-->
  </div>
  <?php
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $query="UPDATE applicants SET status=1 WHERE uid='$uuid' and internshipid='$intid'";
    $resultUpdate=mysqli_query($conn,$query);
    echo "HIRED";
  }
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