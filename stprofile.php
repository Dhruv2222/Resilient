<?php
session_start();
?>
<?php
    $uid=$_SESSION["uid"];
    $stemail=$_SESSION["stemail"];
    $conn = mysqli_connect('localhost','root','','resilient');
    $sql2="SELECT * FROM stdetails WHERE uid='$uid'";
    $result=mysqli_query($conn,$sql2);
    if (mysqli_num_rows($result)>0) {
      while($row = mysqli_fetch_assoc($result)) {
        $name =$row["stname"];
        $profileimg =$row["stpic"];
        $dob =$row["dob"];
        $contact =$row["stcontact"];
        $school =$row["school"];
        $tenth =$row["10th"];
        $twelth =$row["12th"];
        $jrclg=$row["jrclg"];
        $degclg =$row["degreeclg"];
        $deg =$row["degree"];
        $branch =$row["degreebranch"];
      }
    }else {
     echo "0 results";
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
  #main_box{
      border-style: solid;
      border-color: white;
      border-radius: 10px;
      background-color: ;
  }
  #form_font{
      color:aqua;
  }
  #detail_font{
      color:gold;
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
    <li class="nav-item active">
      <a class="nav-link" href="sthome.php">Home </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">My Profile<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Internships</a>
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
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>
</nav>

<br>
<center><h1 style="color:white;"> My Profile</h1>
<br><br>
<div id="main_box">
  <div class="row mt-4">
  <div class="col">
    <?php echo '<img src="data:stpic/jpeg;charset=utf8;base64,'.base64_encode($profileimg).'" height="200" width="200" class="img-thumbnail" />'; ?>
    <h1 id="form_font"><?php echo $name ?></h1>
  </div>
  <div class="col">
    <h5 id="form_font">Date of birth</h5>
    <h6 id="detail_font"><?php echo $dob ?></h6>
    <h5 id="form_font">Contact number</h5>
    <h6 id="detail_font"><?php echo $contact ?></h6>
    <h5 id="form_font">Email ID</h5>
    <h6 id="detail_font"><?php echo $stemail ?></h6>
  </div>
  </div>
  <div class="row mt-4">
    <div class="col">
      <h5 id="form_font">School Name</h5>
      <h6 id="detail_font"><?php echo $school ?></h6>
      <h5 id="form_font">10th Board %</h5>
      <h6 id="detail_font"><?php echo $tenth ?></h6>
      <h5 id="form_font">Junior College</h5>
      <h6 id="detail_font"><?php echo $jrclg ?></h6>
      <h5 id="form_font">12th Board %</h5>
      <h6 id="detail_font"><?php echo $twelth ?></h6>
    </div>
  <div class="col">
    <h5 id="form_font">Degree College</h5>
    <h6 id="detail_font"><?php echo $degclg ?></h6>
    <h5 id="form_font">UnderGrad Degree</h5>
    <h6 id="detail_font"><?php echo $deg ?></h6>
    <h5 id="form_font">Branch</h5>
    <h6 id="detail_font"><?php echo $branch ?></h6>
    </div>
  </div>
</div>
</body>
</html>
