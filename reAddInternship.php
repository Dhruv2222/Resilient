<?php
session_start();
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
    <title>Add new Internship!</title>
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
        .container{
            max-width: 800px;
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
 <?php
    $errmsg="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      echo "HEREE";
      if (empty($_POST["companyname"])) {
        $errmsg="Enter Company Name";
      }
      elseif (empty($_POST["internpost"])) {
        $errmsg="Enter Internship Post";
      }
      elseif (empty($_POST["jobdesc"])) {
        $errmsg="Enter Job Description";
      }
      elseif (empty($_POST["eligibility"])) {
        $errmsg="Enter Eligibility";
      }
      elseif (empty($_POST["stipend"])) {
        $errmsg="Enter Stipend";
      }
      elseif (empty($_POST["interntype"])) {
        $errmsg="Enter Internship Type";
      }
      elseif (empty($_POST["internduration"])) {
        $errmsg="Enter Internship Duration";
      }
      elseif (empty($_POST["perks"])) {
        $errmsg="Enter Internship Perks";
      }
      else {
        echo "Here 2";
        $conn=mysqli_connect('localhost','root','','resilient');
        $sql="INSERT INTO internships(organization,post,jobdesc,eligibility,stipend,interntype,duration,perks,uid) VALUES(?,?,?,?,?,?,?,?,?)";
        $prep=mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($prep,"ssssisssi",$_POST["companyname"],$_POST["internpost"],$_POST["jobdesc"],$_POST["eligibility"],$_POST["stipend"],$_POST["interntype"],$_POST["internduration"],$_POST["perks"],$_SESSION["uid"]);
        $result=mysqli_stmt_execute($prep);
        if ($result){
          echo "Internship Posted Successfully!";
          header('Location: http://localhost/resilient/rehome.php');
        }
        else{
          echo "Failed";
        }
      }
    }
     ?>
    <form method="POST" class="container">
        <div>
            <center><br><h4 id="sub_heading">Add new internship</h4><br></center>
        </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label name="company_name" id="form_font">Company name:</label>
          <input type="text" class="form-control" id="" name="companyname" placeholder="Microsoft">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4" id="form_font">Intern's post:</label>
          <input type="text" class="form-control" name="internpost" id="" placeholder="Android Developer">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress" id="form_font">Job description:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"name="jobdesc" placeholder="Develope new applications as per requirement."></textarea>
      </div>
      <div class="form-group">
        <label for="inputAddress" id="form_font">Eligibility:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="eligibility" placeholder="Android, Java, Google Firebase"></textarea>
      </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label class="inputState" id="form_font">Stipend:</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rs.</div>
                    </div>
                    <input type="text" class="form-control" name="stipend" id="inlineFormInputGroup" placeholder="2500">
                  </div>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState" id="form_font">Type of internship:</label>
                  <select id="inputState" name="interntype" class="form-control">
                    <option selected value="Work from home">Work from home</option>
                    <option value="Part-time">Part-time</option>
                    <option value="Full-time">Full-time</option>
                  </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState" id="form_font">Duration:</label>
                  <input type="text" class="form-control" id="" name="internduration" placeholder="2 months">
            </div>
        </div>
      <div class="form-group">
        <label for="inputAddress2" id="form_font">Perks of this internship:</label>
        <input type="text" class="form-control" id="" name="perks" placeholder="Certification of completion, L.O.R, etc.">
      </div>
      <?php echo $errmsg; ?>
      <button type="submit" class="btn btn-primary">ADD</button>

</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
