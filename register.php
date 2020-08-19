<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    
<style>
body{
        background-image:url("https://www.iesabroad.org/files/blog/images/vbruick/2017-12-05/default_featured_image_7.jpg");
        background-size:cover;
        background-repeat: no-repeat;
        background-position: center;
        background-color: rgba(255,255,255,0.2);
        background-blend-mode: lighten;
        font-family:Arial;
      }
#Form{
        margin-left:76%;
        margin-right: 5%;
        margin-top: 6%;
        display: block;
        border: solid #200122 1px ;
        text-align: center;
        padding-top: 35px;
        padding-bottom: 55px;
        background-color: white;
        border-radius:20px;
        width:350px;
        background-color:#FAF0E6;
        margin: 110px auto;
        margin-left:620px;
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
    #type_box{
        border-style: solid;
        border-radius:10px;
        width: 250px;
        margin-left: 50px;
        margin-bottom: 20px;
    }


</style>
<title>Sign in</title>
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
    
    
    
    <center>
<div id="Form">
      <form action="conect.php" method="POST" >
        <h4 style="font-weight: bold;">REGISTER</h4>
        <h6 >Create a new Resilience Account</h6>
        <input type="text" name="userid" placeholder="Enter your email id" id="ep" autocorrect="off" style="border-color: #200122; padding:8px;border-radius: 10px;width:250px;" />
        <br><br>
          
        <input type="password" name="password" placeholder="Enter a new password" id="ep" autocapitalize="none" autocorrect="off" style="border-color: #200122; padding:8px; border-radius: 10px;width:250px; " />
        <br><br>
          
          <div id="type_box">
          
          <input type="radio" name="type" value="1" id="type">&nbsp;Student<br>
          <input type="radio" name="type" value="2" id="type">&nbsp;Employer<br>
              
              </div>
        
        <input type="submit" id="Button"  value="Register"/>
      </form>
      <br>
      <a href="#" id="Fo" style="text-decoration: none; color: black;">Already have an account?</a>
      <br><br>
      
      
      <a href="createacc.html" id="Button" role="button" style="text-decoration: none; ">Login</a>
    </div>
    </center>
    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
