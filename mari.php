<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="fo.css">
</head>
<body>
<div class="main">  
    <h1 style="color:white;text-align:center;font-family:elephant;">MARRIAGE REGISTRATION</h1>
    <form method="POST" >
        <input type="text" name="hn" placeholder="Enter Husband Name">
        <input type="text" name="wn" placeholder="Enter Wife Name">
        <input type="date" name="d" placeholder="Enter date of marriage ">
        <input type="time" name="t" placeholder="Enter time of marriage">
        <input type="text" name="win" placeholder="Enter witness name">
        <input type="email" name="ea" placeholder="Enter email">
      
        <button name="mari">SUBMIT</button>
    </form>
    </div>
</body>
    </html>
<?php
error_reporting(E_ALL & ~E_WARNING);

include'db.php';
$h=$_POST['hn'];
$w=$_POST['wn'];
$wt=$_POST['win'];
$da=$_POST['d'];
$ti=$_POST['t'];
$em=$_POST["ea"];
$select="select email from t2 where email='$em'";
    $res=mysqli_query($con,$select);
    $fetch=mysqli_fetch_assoc($res);
    if (isset($_POST["mari"])){
if ($fetch)
{
    echo"<script>alert('your email ... already exist!!')</script>";
}

else{
    $insert="insert into t2 values('$h','$w','$wt','$da','$ti','$em')";
    mysqli_query($con,$insert);
    header("location:bookm.php");
}}
?>