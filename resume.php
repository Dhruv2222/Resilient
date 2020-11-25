<?php
 session_start();
 // $emailErr = $passErr = "";
 // $email = $pass= "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $date1=date_create($_POST['internstart']);
     $date2=date_create($_POST['internend']);
     $diff=(date_diff($date1,$date2));
     if($diff->format("%R") == "-"){
         echo 'do something here';
     }
     else{
         $days=number_format($diff->format("%a"));
         if($days >= 365){
             $_SESSION["date_diff"]=($days/365).' years';
         }
         elseif($days >= 27){
             $_SESSION["date_diff"]=ceil($days/30).' months';
         }
         else{
             $_SESSION["date_diff"]=($days).' days';
         }
     }
   $_SESSION["internprofile"]=$_POST['internprofile'];
   $_SESSION["interncompany"]=$_POST['interncompany'];
   $_SESSION["interndes"]=$_POST['interndes'];
   $_SESSION["por"]=$_POST['por'];
   $_SESSION["porOrganization"]=$_POST['porOrganization'];
   $_SESSION["skill1"]=$_POST['skill1'];
   $_SESSION["skill2"]=$_POST['skill2'];
   $_SESSION["skill3"]=$_POST['skill3'];
   $_SESSION["internstart"]=$_POST['internstart'];
   $_SESSION["internend"]=$_POST['internend'];
   header('Location: http://localhost/resilient/resilientResume.php');
 }

 ?>
 <!DOCTYPE html>
 <html lang="en">
  <head>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Create New Resume!</title>
    <style>
      body{
        /* background-image: repeating-linear-gradient(white,#9933FF); */
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSraJfiuK1417TXvBIDGlMSOWmmy33uevCEyw&usqp=CAU");
      }
      img{
        border-radius: 20%;
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
              <a class="nav-link" href="rehome.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Internships-offered</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Add-internship</a>
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
              <img src="https://t4.ftcdn.net/jpg/00/64/67/63/240_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" class="rounded-circle" height="40px" width="40px" style="border-style:solid;">
          </form>
        </div>
    </nav>

    <form class="container" method="post">
        <div>
            <center><br><h1 id="sub_heading">Create your resume here:</h1><br></center>
        </div>
        <div class="form-group">
          <fieldset disabled>
          <label id="form_font">Name:</label>
          <input type="text" class="form-control" id="name" value="<?php if(isset($_SESSION["stname"])){ echo $_SESSION["stname"]; } ?>">
        </fieldset>
        </div>

      <br>
      <center><h4 id="sub_heading">Enter your Internship Details</h4></center>
      <br>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label name="company_name" id="form_font">Profile:</label>
          <input type="text" name="internprofile" class="form-control" id="" placeholder="Eg. Sales">
        </div>
        <div class="form-group col-md-4">
          <label name="company_name" id="form_font">Organization</label>
          <input type="text" name="interncompany" class="form-control" id="" placeholder="Eg. Microsoft">
        </div>
        <div class="form-group col-md-4">
          <label id="form_font">Short Description</label>
          <input type="text" name="interndes" class="form-control" id="" placeholder="Led a group of 10 individuals">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label name="company_name" id="form_font">Start Date:</label>
          <input type="date" name="internstart" class="form-control" id="" placeholder="1/1/2020">
        </div>
        <div class="form-group col-md-6">
          <label name="company_name" id="form_font">End Date:</label>
          <input type="date" name="internend" class="form-control" id="" placeholder="2/2/2020">
        </div>
      </div>
      <br>
      <center><h4 id="sub_heading">Position of responsibility:</h4></center>
      <br>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label name="company_name" id="form_font">Your Post:</label>
          <input type="text" name="por" class="form-control" id="" placeholder="Public Relation Head">
        </div>
        <div class="form-group col-md-6">
          <label name="company_name" id="form_font">Organization:</label>
          <input type="text" name="porOrganization" class="form-control" id="" placeholder="Student Council KJSCE">
        </div>
      </div>
      <br>
      <center><h4 id="sub_heading">Top 3 Skills:</h4></center>
      <div class="form-row">
        <div class="form-group col-md-4">
          <input type="text" name="skill1" class="form-control" id="" placeholder="C Programming">
        </div>
        <div class="form-group col-md-4">
          <input type="text" name="skill2" class="form-control" id="" placeholder="Marketing">
        </div>
        <div class="form-group col-md-4">
          <input type="text" name="skill3" class="form-control" id="" placeholder="Accounts">
        </div>
      </div>
      <center>
      <button type="submit" class="btn btn-primary">Submit</button>
      </center>
        <br>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<!--
<?php
function add()
{
  echo "<h6><b>Enter next Internship details</b></h6> <br>";
  echo '<input type="text" name="internprofile" placeholder="Profile: Eg. Sales" id="ep" autocorrect="off" style="border-color: #200122; padding:8px;border-radius: 10px;width:250px;" />
    <br><br>
  <input type="text" name="interncompany" placeholder="Organization: Eg. Microsoft" id="ep" autocorrect="off" style="border-color: #200122; padding:8px;border-radius: 10px;width:250px;" />
    <br><br>
  <input type="text" name="interndes" placeholder="Short Description" id="ep" autocorrect="off" style="border-color: #200122; padding:8px;border-radius: 10px;width:250px;" />
    <br><br>
    Start date and End date:<br>
    <input type="date" name="internstart" placeholder="Start date" id="ep" autocorrect="off" style="border-color: #200122; padding:8px;border-radius: 10px;width:120px;" />
    <input type="date" name="internend" placeholder="End date" id="ep" autocorrect="off" style="border-color: #200122; padding:8px;border-radius: 10px;width:120px;" />
  <br><br>';
}
  ?> -->
