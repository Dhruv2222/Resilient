<?php
  session_start();

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
<title>Resilient Login</title>
<style>
    .container{
            max-width: 500px;
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

    <?php
    $message="";
    $emailErr = $passErr = "";
    $email = $pass = "";
    $isError = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["emailid"];
        $pass = $_POST["password"];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "<br>"."Invalid email format";
          $isError = true;
        }
        if(empty($email)){
          $emailErr = "<br>"."Email cannot be empty";
          $isError = true;
        }
        if(empty($pass)){
          $passErr = "<br>"."Password cannot be empty";
          $isError = true;
        }
        if(!$isError){
            //authenticate enaail and passward here
            $conn = mysqli_connect("localhost","root","","resilient");
            $sql = "SELECT * FROM register WHERE email ='".$_POST['emailid']."' and password='".$_POST['password']."'";
            $result=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($result);
            $row = mysqli_fetch_assoc($result);
            echo "Heloooo";
            if($count==0) {
            		$message = "Invalid Username or Password!";
            	} if($count==1) {
            		$message = "You are successfully authenticated!";
                $_SESSION["uid"]=$row['uid'];
                if($row['usertype']==0){
                  header("Location: http://localhost/Resilient/sthome.php");
                }else{
                  header("Location: http://localhost/Resilient/rehome.php");
                }

            	}
            //then direct to this page

        }
    }

    ?>


      <form class="container" method="POST" enctype="multipart/form-data">


      <br><center><h2 id="sub_heading">Login with your Resilient Account</h2></center><br>

        <div class="form-group">
            <label for="inputAddress" id="form_font">Email id:</label>
                <span class="error" style="color: red">* <?php echo $emailErr;?></span>
            <input type="text" class="form-control" name="emailid" placeholder="Enter your email id" id="emailid" autocorrect="off">
       </div>
      <div class="form-group">
        <label for="inputAddress" id="form_font" >Password:</label>
            <span class="error" style="color: red">* <?php echo $passErr;?></span>
        <input type="password" class="form-control" name="password" placeholder="Enter a new password" id="pass" autocapitalize="none" autocorrect="off">
      </div>
      <span class="error" style="color: red"> <?php echo "".$message."<br>";?></span>
        <br>
        <button type="submit" class="btn btn-primary">Login</button>  <br><br>

          <a  id="form_font" style="text-decoration: none;">Don't have an account?</a>


      <a href="register.php" id="Button" role="button" style=" ">Register</a>

       </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

