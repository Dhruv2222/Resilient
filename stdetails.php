<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<style>
body{
        background-image:url("https://media.gettyimages.com/photos/abstract-blurred-office-interior-room-blurry-working-space-with-use-picture-id1019217082?b=1&k=6&m=1019217082&s=612x612&w=0&h=OL2CzvqBfdXPVlws7fTrMf0gNAZ_oRKaEBIjOXm998Y=");
        background-size:cover;
        background-repeat: no-repeat;
        background-position: center;
        background-color: rgba(255,255,255,0.2);
        background-blend-mode: lighten;
        font-family:Arial;
      }
#Form{
        margin-top: 6%;
        display: block;
        border: solid #200122 1px ;
        text-align: center;
        padding-top: 35px;
        padding-bottom: 55px;
        background-color: white;
        border-radius:20px;
        width:700px;
        background-color:#FAF0E6;
        margin: 110px auto;
      }
      #Button{
        border: solid #200122 1px;
        border-radius: 18px;
        padding: 5px;
        padding-left: 15px;
        padding-right: 20px;
        color: white;
        background-image: linear-gradient(to right ,#200122,#6f0000);
      }
      #Button a:link{
        text-decoration: none;
        display: block;
      }
      #Button:hover{
        color: greenyellow;
      }
    #main_heading{
        font-family: "Sofia";
        font-size: 25px;
        font-weight: bold;
    }
</style>
<title>Student Details</title>
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
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categories
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
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
<div id="Form">
      <form method="POST" >
        <h4 style="font-weight: bold;">Enter details to complete application</h4>
        <input type="text" name="name" placeholder="Enter your Name" id="ep" autocorrect="off" style="border-color: #200122; padding:8px;border-radius: 10px;width:250px;" />
        <br><br>
        Enter DOB :<br>
        <input type="date" name="dob" max="2002-12-31" placeholder="Enter your Age" id="ep" style="border-color: #200122; padding:8px; border-radius: 10px;width:250px; " />
        <br><br>

        <input type="number" name="contact" placeholder="Enter your Contact no." id="ep" autocorrect="off" style="border-color: #200122; padding:8px;border-radius: 10px;width:250px;" />
        <br><br>

        <input type="text" name="clgname" placeholder="Enter your College name" id="ep" autocorrect="off" style="border-color: #200122; padding:8px;border-radius: 10px;width:250px;" />
        <br><br>

        Select Degree :<br>
        <!-- <select name="degrees">
          <option value="BTech">Bachelor of Technology</option>
          <option value="BCom">Bachelor of Commerce</option>
          <option value="B.Ed">B.Ed</option>
          <option value="BA">Bachelor of Arts</option>

        </select> -->
        <input type="radio" name="degree" value="BTech">Bachelor of Technology
        <br>
        <input type="radio" name="degree" value="BCom">Bachelor of Commerce
        <br>
        <input type="radio" name="degree" value="B.Ed">Bachelor of Education
        <br>
        <input type="radio" name="degree" value="BA">Bachelor of Arts
        <br><br>
        <input type="text" name="clgbranch" placeholder="Enter your Branch name" id="ep" autocorrect="off" style="border-color: #200122; padding:8px;border-radius: 10px;width:250px;" />
        <br><br>

        <input type="submit" id="Button"  value="Next"/>
        <br><br>
      </form>
      <br>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($contact)) {
           echo "Contact No. is required";
          }
          elseif (empty($name)) {
           echo "Name is required";
          }
          elseif (empty($college)) {
           echo "College Name is required";
          }
          elseif (empty($branch)) {
           echo "Branch name is required";
          }
          elseif (empty($degree)) {
           echo "<b>Select the Degree you are pursuing</b>";
          }
          elseif (empty($dob)) {
           echo "<b>Date of Birth is required</b>";
          }
          else {
            header('Location: http://localhost/resilient/resume.php');
          }
      }
       ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>