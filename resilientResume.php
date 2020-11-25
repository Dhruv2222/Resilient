<?php

session_start();

?>
<!doctype html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Resume preview</title>
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
            font-size: 40px;
            font-weight: bold;
            color: aqua;
        }
        #form_font{
            color:aqua;
        }
        #detail_font{
            color:gold;
        }
        .container{
            max-width: 800px;
        }
        #main_box{
            border-style: solid;
            border-color: white;
            border-radius: 10px;
            background-color: ;
        }
        hr.new {
          border-top: 2px solid white;
        }
        #right{
            float: right;
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
              <a class="nav-link active" href="rehome.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">View internship</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#">Applications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">TnC</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">About us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" >
              <a class="nav-link disabled" href="#">My profile</a>
              <img src="<?php echo $_SESSION["imgpath"]?>" class="rounded-circle" height="40px" width="40px" style="border-style:solid;">
          </form>
        </div>
    </nav>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn=mysqli_connect('localhost','root','','resilient');
        $sql="INSERT INTO stdetails(uid,stname,stpic,dob,stcontact,school,10th,jrclg,12th,degreeclg,degree,degreebranch) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
        $prep=mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($prep,"isssisisisss",$_SESSION["uid"],$_SESSION["stname"],$_SESSION["Image"],$_SESSION["stdob"],$_SESSION["stcontact"],$_SESSION["school"],$_SESSION["10Board"],$_SESSION["jcollege"],
        $_SESSION["12Board"],$_SESSION["stclg"],$_SESSION["stdegree"],$_SESSION["stbranch"]);
        $result=mysqli_stmt_execute($prep);
        $sql2="INSERT INTO resume(intprofile,intorganization,intdesc,intstart,intend,porname,pororganization,skill1,skill2,skill3,uid) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        $prep2=mysqli_prepare($conn,$sql2);
        mysqli_stmt_bind_param($prep2,"ssssssssssi",$_SESSION["internprofile"],$_SESSION["interncompany"],$_SESSION["interndes"],$_SESSION["internstart"],$_SESSION["internend"],
        $_SESSION["por"],$_SESSION["porOrganization"],$_SESSION["skill1"],$_SESSION["skill2"],$_SESSION["skill3"],$_SESSION["uid"]);
        $result2=mysqli_stmt_execute($prep2);
        if ($result & $result2) {
          echo "Application Successfully Completed.";
          header('Location: http://localhost/resilient/sthome.php');
        }
      }
     ?>

    <div class="container" >
        <center>
        <div>
            <br><h4 id="sub_heading">Resilient Resume</h4><br>
        </div>
        </center>
        <div id="main_box">
            <center>
            <div class="row mt-4">
            <div class="col">
              <img src="<?php echo $_SESSION["imgpath"]?>" class="rounded-circle" height="110px" width="110px" style="border-style:solid;">
              <h1 id="form_font"><?php echo $_SESSION["stname"]?></h1>
            </div>
            <div class="col">
              <h5 id="form_font">Date of birth</h5>
              <h6 id="detail_font"><?php echo $_SESSION["stdob"]?></h6>
              <h5 id="form_font">Contact number</h5>
              <h6 id="detail_font"><?php echo $_SESSION["stcontact"]?></h6>
              <h5 id="form_font">Email ID</h5>
              <h6 id="detail_font"><?php echo $_SESSION["stemail"]?></h6>
            </div>
            </div>
            <hr class="new m-4">
            </center>
            <div class="row">
            <div class="col ml-3">
              <h2 id="detail_font">Education</h2>
            </div>
            <div class="mr-5" id="right">
              <h6 id="form_font">Percentage</h6>
            </div>
            </div>

            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font"><?php echo $_SESSION["stdegree"]?></h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h6 id="form_font"><?php echo $_SESSION["stclg"]?></h6>
            </div>
            <div class="mr-5" id="right">
<!--                Enter percentage field?-->
              <h6 id="detail_font"></h6>
            </div>
            </div><br>

            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font">Class 12th</h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h6 id="form_font"><?php echo $_SESSION["jcollege"]?></h6>
            </div>
            <div class="mr-5" id="right">
              <h6 id="detail_font"><?php echo $_SESSION["12Board"]?>%</h6>
            </div>
            </div><br>

            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font">ICSE: Class 10th</h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h6 id="form_font"><?php echo $_SESSION["school"]?></h6>
            </div>
            <div class="mr-5" id="right">
              <h6 id="detail_font"><?php echo $_SESSION["10Board"]?>%</h6>
            </div>
            </div>
            <hr class="new m-4">


            <div class="row">
            <div class="col ml-3">
              <h2 id="detail_font">Experience</h2>
            </div>
            <div class="mr-5" id="right">
              <h6 id="form_font">Duration</h6>
            </div>
            </div>

            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font"><?php echo $_SESSION["interncompany"]?></h5>
            </div>
            </div>

            <div class="row">
            <div class="col ml-3">
              <h6 id="form_font"><?php echo $_SESSION["internprofile"]?></h6>
              <h6 id="form_font"><?php echo $_SESSION["interndes"]?></h6>
            </div>


            <div class="mr-5" id="right">
              <h6 id="detail_font">
                <?php
                echo $_SESSION["date_diff"];
                ?>
              </h6>
            </div>

            </div><br>

            <hr class="new m-4">

            <div class="row">
            <div class="col ml-3">
              <h3 id="detail_font">Positions of responsibility</h3>
            </div>

            </div>

            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font"><?php echo $_SESSION["por"]?></h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font">Organization: <?php echo $_SESSION["porOrganization"]?></h5>
            </div>
            </div>

            <hr class="new m-4">

            <div class="row">
            <div class="col ml-3">
              <h3 id="detail_font">Skills</h3>
            </div>

            </div>

            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font"><?php echo $_SESSION["skill1"]?></h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font"><?php echo $_SESSION["skill2"]?></h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font"><?php echo $_SESSION["skill3"]?></h5>
            </div>
            </div>

            <hr class="new m-4">
          <center><form method="POST">  <button type="submit" class="btn btn-success mb-3">Save</button></form>
          </center>
        </div>
      <br>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
