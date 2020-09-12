<!doctype html>
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
            <li class="nav-item">
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
      
      
      
      
      
    <form class="container">
        <div>
            <center><br><h4 id="sub_heading">A few more details</h4><br></center>
        </div>
        <div class="form-group">
        <label for="inputAddress" id="form_font">Full name of organization:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Eg. Microsoft Corporation">
      </div>    
        <div class="form-group">
        <label for="inputAddress" id="form_font">Short description about your organization:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="An American multinational technology company..."></textarea>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
            <div class="form-group">
            <label id="form_font">Organization's emailid:</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="">
            </div> 
        </div>
        <div class="form-group col-md-6">
          <label id="form_font">Contact number:</label>
          <input type="number" class="form-control" id="" placeholder="">
        </div>
      </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <div class="form-group">
            <label id="form_font">City:</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Eg. Mumbai">
            </div> 
        </div>
        <div class="form-group col-md-6">
          <label id="form_font">Pincode:</label>
          <input type="number" class="form-control" id="" placeholder="Eg. 400077">
        </div>
      </div>
      
      
      
      
      <button type="submit" class="btn btn-primary">FINISH</button>
</form>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
