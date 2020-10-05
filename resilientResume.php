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
      
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
              <h1 id="form_font"><?php echo $_SESSION["stname"]?></h1>
            </div>
            <div class="col">
              <h5 id="form_font">Date of birth</h5>
              <h6 id="detail_font"><?php echo $_SESSION["stdob"]?></h6>
              <h5 id="form_font">Contact number</h5>
              <h6 id="detail_font"><?php echo $_SESSION["stcontact"]?></h6>
              <h5 id="form_font">Email ID</h5>
              <h6 id="detail_font">dhruv.doshi@somaiya.edu</h6>
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
              <h6 id="detail_font">95%</h6>
            </div>
            </div><br>
            
            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font">HCS: Class 12th</h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h6 id="form_font">SIES College, Sion(West)</h6>
            </div>
            <div class="mr-5" id="right">
              <h6 id="detail_font">95%</h6>
            </div>
            </div><br>
            
            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font">ICSE: Class 10th</h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h6 id="form_font">Arya Vidya Mandir, BKC</h6>
            </div>
            <div class="mr-5" id="right">
              <h6 id="detail_font">95%</h6>
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
              <h5 id="form_font">Northstar Innovations</h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h6 id="form_font">Android Developer</h6>
            </div>
            <div class="mr-5" id="right">
              <h6 id="detail_font">1 month</h6>
            </div>
            </div><br>
            
            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font">KJSCE Internal</h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h6 id="form_font">Web developer</h6>
            </div>
            <div class="mr-5" id="right">
              <h6 id="detail_font">4 months</h6>
            </div>
            </div><br>
            
            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font">XYZ company</h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h6 id="form_font">Software Engineer</h6>
            </div>
            <div class="mr-5" id="right">
              <h6 id="detail_font">1 year</h6>
            </div>
            </div>
            <hr class="new m-4">
            
            <div class="row">
            <div class="col ml-3">
              <h3 id="detail_font">Positions of responsibility</h3>
            </div>
            
            </div>
            
            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font">Project leader</h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font">Manager</h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font">Project head</h5>
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
              <h5 id="form_font">C programming</h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font">Python</h5>
            </div>
            </div>
            <div class="row">
            <div class="col ml-3">
              <h5 id="form_font">Android</h5>
            </div>
            </div>
                
            <hr class="new m-4">
            
        </div>
      
    </div>
          
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>