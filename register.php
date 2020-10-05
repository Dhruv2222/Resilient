<!doctype html>
<html lang="en">
  <head>
      
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Register</title>
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
            max-width: 500px;
        }
        #radio_font{
            color:gold;
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
            <li class="nav-item active">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#">Login</a>
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
        

    
   
    
    $emailErr = $type_Err = $passErr = $con_passErr = "";
    $email = $type = $pass = $con_pass = "";
    $isError = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["emailid"];
        $pass = $_POST["password"];
        $con_pass = $_POST["con_password"];
        if(!isset($_POST["type"])){
            $type_Err = "*A type must be selected"."<br>";
            $isError = true;
        }else{
           $type = $_POST["type"]; 
        }
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "<br>"."Invalid email format";
          $isError = true;
        }
        if(strlen($pass) <= 8){
            $passErr = $passErr."<br>"."Password length must be atleast 8 char";
            $isError = true;
        }
        if(!preg_match("#[0-9]+#",$pass)){
            $passErr = $passErr."<br>"."Password must contain atleast 1 number";
            $isError = true;
        }
        if(!preg_match("#[A-Z]+#",$pass)){
            $passErr = $passErr."<br>"."Password must contain atleast 1 uppercase";
            $isError = true;
        }
        if(!preg_match("#[a-z]+#",$pass)){
            $passErr = $passErr."<br>"."Password must contain atleast 1 lowercase";
            $isError = true;
        }
        if($pass != $con_pass){
            $con_passErr = $con_passErr."<br>"."Passwords must match";
            $isError = true;
        }
        
        if(!$isError){
            
            $conn = mysqli_connect('localhost','root','','resilient');
            $sql = "INSERT INTO register(email,password,usertype) VALUES (?,?,?)";
            $prep = mysqli_prepare($conn,$sql);
            mysqli_stmt_bind_param($prep,"ssi",$email,$pass,$type);
            $result = mysqli_stmt_execute($prep);
//            $result = mysqli_query($conn,$sql);
            if($result){
                if($type==0){
                    header("Location: http://localhost/Resilient/stdetails.php");
                }
                if($type==1){
                    header("Location: http://localhost/Resilient/reRegister.php");
                }
            }
            else{
                echo mysqli_error($conn);
            }
            
            if(!isset($_COOKIE[$cookie_name])) {
              echo "Cookie named '" . $cookie_name . "' is not set!";
            } else {
                setcookie("emailid", $email, time() + (86400 * 30), "/");
                setcookie("type", $type, time() + (86400 * 30), "/"); 
            }
            
            
        }
        
    }
    
    
    
    ?>  
      
      
      
    <form class="container" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <div>
            <center><br><h4 id="sub_heading">Create a new Resilience Account</h4><br></center>
        </div>
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
        
        <div class="form-group">
        <label for="inputAddress" id="form_font" >Confirm password:</label>
            <span class="error" style="color: red">* <?php echo $con_passErr;?></span>
        <input type="password" class="form-control" name="con_password" placeholder="Re-enter password" id="pass" autocapitalize="none" autocorrect="off">
      </div>
        
        <label class="" for="" id="form_font">Select type of account:</label>
        
        <div class="custom-control custom-radio">
          <input type="radio" id="customRadio1" name="type" value="0" class="custom-control-input">
          <label class="custom-control-label" for="customRadio1" id="radio_font">Student</label>
        </div>
        <div class="custom-control custom-radio">
          <input type="radio" id="customRadio2" name="type" value="1" class="custom-control-input">
          <label class="custom-control-label" for="customRadio2" id="radio_font">Recruiter</label>
        </div>
        <span class="error" style="color: red"><?php echo $type_Err;?></span>
        <br>
        
        <a  id="form_font" style="text-decoration: none;">Already have an account?</a>
      
      
      <a href="login.php" id="Button" role="button" style=" ">Login</a>
        <br><br>

      
        
      
      
      
      
      <button type="submit" class="btn btn-primary">Register</button>
</form>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
