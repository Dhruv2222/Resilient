<?php
if(isset($_POST['name']))
{
  setcookie("username",$_POST['name']);
}
  session_start();
  echo "".$_SESSION["stemail"];
 ?>
 <?php
 $stemail=$_SESSION["stemail"];
   $conn = mysqli_connect('localhost','root','','resilient');
   $sql2="SELECT * FROM register WHERE email='$stemail'";
   $result=mysqli_query($conn,$sql2);
   if (mysqli_num_rows($result)>0) {
     while($row = mysqli_fetch_assoc($result)) {
       $_SESSION["uid"] =$row["uid"];
     }
   } else {
echo "0 results";
}
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST['contact'])) {
     $x= "<b>Contact No. is required</b>";
   }
   elseif (empty($_POST['name'])) {
    $x= "<b>Name is required</b>";
   }
   elseif (empty($_POST['clgname'])) {
    $x= "<b>College Name is required</b>";
   }
   elseif (empty($_POST['school'])) {
    $x= "<b>School Name is required</b>";
   }
   elseif (empty($_POST['10Board'])) {
    $x= "<b>10th Board Percentage is required</b>";
   }
   elseif (empty($_POST['clgbranch'])) {
    $x= "<b>Branch name is required</b>";
   }
   // elseif (empty($_POST['degree'])) {
   //  $x= "<b>Select the Degree you are pursuing</b>";
   // }
   elseif (empty($_POST['dob'])) {
    $x= "<b>Date of Birth is required</b>";
   }
   else {
     $_SESSION["stname"]=$_POST['name'];
     $_SESSION["stdob"]=$_POST['dob'];
     $_SESSION["stcontact"]=$_POST['contact'];
     $_SESSION["stclg"]=$_POST['clgname'];
     $_SESSION["stdegree"]=$_POST['degree'];
     $_SESSION["stbranch"]=$_POST['clgbranch'];
     $_SESSION["10Board"]=$_POST['10Board'];
     $_SESSION["school"]=$_POST['school'];
     $_SESSION["jcollege"]=$_POST['jcollege'];
     $_SESSION["12Board"]=$_POST['12Board'];


       //iamge upload
     $target_dir = "uploads/";
     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

     // Check if image file is a actual image or fake image
     if(isset($_POST["submit"])) {
       $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
       if($check !== false) {
         echo "File is an image - " . $check["mime"] . ".";
         $uploadOk = 1;
       } else {
         echo "File is not an image.";
         $uploadOk = 0;
       }
     }

     // Check if file already exists
     if (file_exists($target_file)) {
       echo "Sorry, file already exists.";
       $uploadOk = 0;
     }

     // Check file size
     if ($_FILES["fileToUpload"]["size"] > 500000) {
       echo "Sorry, your file is too large.";
       $uploadOk = 0;
     }

     // Allow certain file formats
     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
     && $imageFileType != "gif" ) {
       echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
       $uploadOk = 0;
     }

     // Check if $uploadOk is set to 0 by an error
     if ($uploadOk == 0) {
       echo "Sorry, your file was not uploaded.";
     // if everything is ok, try to upload file
     } else {
       $_SESSION["Image"]=$_FILES["fileToUpload"]["tmp_name"];
       if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
         $_SESSION["imgpath"]=$target_file;
         header('Location: http://localhost/resilient/resume.php');

       } else {
         echo "Sorry, there was an error uploading your file.";
       }
     }
   }
 }
  ?>
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
        #sub_heading{
            font-family: "Sofia";
            /* font-size: 40px; */
            font-weight: bold;
            color: aqua;
        }
        #form_font{
            color:aqua;
        }
        .container{
            max-width: 800px;
        }

</style>
<title>Student Details</title>
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
      <form class="container" method="POST" enctype="multipart/form-data">


      <br><center><h2 id="sub_heading">Enter Details to Complete Application</h2></center><br>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label name="company_name" id="form_font">Enter your Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Sharon Abraham" id="">
          </div>

          <div class="form-group col-md-6">
<!--
            <label name="company_name" id="form_font">Upload Profile Picture:</label>
            <input type="file" class="form-control" name="fileToUpload" placeholder="Enter your Name" id="">

-->
              <label name="company_name" id="form_font">Upload Profile Picture:</label>
              <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="form-control pb-4 pl-3" id="inputGroupFile02" name="fileToUpload">
              </div>
            </div>


          </div>
        </div>
        <br>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label name="company_name" id="form_font">Date of Birth:</label>
              <input type="date" name="dob" max="2002-12-31" class="form-control" id="" placeholder="1/1/2020">
            </div>
            <div class="form-group col-md-6">
              <label name="company_name" id="form_font">Contact Number:</label>
              <input type="number" name="contact" class="form-control" id="">
            </div>
          </div>

          <br>
          <center><h3 id="sub_heading">Educational Details:</h3></center>
          <br>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label name="" id="form_font">School Name:</label>
              <input type="text" name="school" class="form-control" id="" placeholder="St. Mary's">
            </div>
            <div class="form-group col-md-6">
              <label class="inputState" id="form_font">10th Board Percentage:</label>
                  <div class="input-group mb-2">
                    <input type="text" class="form-control" name="10Board" id="inlineFormInputGroup" placeholder="80">
                      <div class="input-group-prepend">
                      <div class="input-group-text">%</div>
                    </div>
                  </div>
            </div>
          </div>
          <br>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label name="" id="form_font">Junior College Name:</label>
              <input type="text" name="jcollege" class="form-control" id="" placeholder="St. Mary's">
            </div>
            <div class="form-group col-md-6">
                <label class="inputState" id="form_font">12th Board Percentage:</label>
                  <div class="input-group mb-2">
                    <input type="text" class="form-control" name="12Board" id="inlineFormInputGroup" placeholder="80">
                      <div class="input-group-prepend">
                      <div class="input-group-text">%</div>
                    </div>
                  </div>
            </div>
          </div>
          <br>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label name="company_name" id="form_font">Enter Degree College name</label>
              <input type="text" name="clgname" placeholder="KJ Somaiya College" class="form-control" id="" placeholder="1/1/2020">
            </div>
            <div class="form-group col-md-4">
              <label name="company_name" id="form_font">Select Degree:</label>
              <select name="degree" class="form-control" id="">
                <option value="BTech">Bachelor of Technology</option>
                <option value="BCom">Bachelor of Commerce</option>
                <option value="B.Ed">B.Ed</option>
                <option value="BA">Bachelor of Arts</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label name="company_name" id="form_font">Enter Branch name</label>
              <input type="text" name="clgbranch" placeholder="Mechanical" class="form-control" id="" placeholder="1/1/2020">
            </div>
          </div>
          <br>
          <center>
          <button type="submit" value="Next" class="btn btn-primary">Next</button>
          </center>

      <?php
      if(isset($x)){
        echo $x;
      }
       ?>
       </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
