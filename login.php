<!DOCTYPE html>
<html>
<head>
<style>
body{
        background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTnoZdPbOX9PuRulQNj1dRHad_ai_TD1xxt_w&usqp=CAU");
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
        width:280px;
        background-color:#FAF0E6;
        margin: 110px auto;
        margin-left:620px;
      }

      #Button{
        border: solid #200122 1px;
        border-radius: 18px;
        padding: 13px;
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
        color: violet;
      }


</style>
<title>Sign in</title>
</head>

<body >
    <center>
<div id="Form">
      <form action="conect.php" method="POST" >
        <h3>SIGN IN</h3>
        <h5 >Sign in using Resilience Account</h5>
        <input type="text" name="userid" placeholder="userid" id="ep" autocorrect="off" style="border-color: #200122; padding:8px;" />
        <br>
        <br>
        <input type="password" name="password" placeholder="password" id="ep" autocapitalize="none" autocorrect="off" style="border-color: #200122; padding:8px;  " />
        <br>
        <br>
        <input type="submit" id="Button" value="Sign In"/>
      </form>
      <br>
      <a href="#" id="Fo" style="text-decoration: none; color: black;">Difficulty signing in?</a>
      <br>
      <br>
      <br>
      <a href="createacc.html" id="Button" role="button" style="text-decoration: none; ">Create account</a>
    </div>
    </center>
</body>
</html>
