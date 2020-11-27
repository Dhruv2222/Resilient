<?php
session_start();
$status=0;
$internshipid=$_GET['internshipid'];
$uid=$_SESSION["uid"];
if ($_SERVER['REQUEST_METHOD']=='GET') {
  $conn = mysqli_connect('localhost','root','','resilient');
   $sql="INSERT INTO applicants(internshipid,uid,status) VALUES(?,?,?)";
   $prep=mysqli_prepare($conn,$sql);
   mysqli_stmt_bind_param($prep,"iii",$internshipid,$uid,$status);
   $result2=mysqli_stmt_execute($prep);
   if ($result2) {
     echo "Applied Successfully";
     header('Location :http://localhost/resilient/viewInternships.php');
   }
}
?>
