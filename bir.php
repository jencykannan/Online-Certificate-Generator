<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="fo.css">
    </head>
    <body>
        <div class="main">
        <h1 style="color:white;text-align:center;font-family:elephant;">BIRTH CERTIFICATE</h1>
        <form method="POST">
            <input type="text" name="fn" placeholder="Enter first name of baby" required>
            <input type="text" name="ln" placeholder="Enter last name of baby" >
            <select name="g">
                <option>Male</option>
                <option>Female</option>
            </select>
            <input type="text" name="f" placeholder="Enter father's name" required>
            <input type="text" name="m" placeholder="Enter mother's name" required>
            <input type="date" name="d" placeholder="Enter date of birth" required>
            <input type="time" name="t" placeholder="Enter time of birth" required>
            <input type="text" name="p" placeholder="Enter place of birth">
            <input type="email" name="ea" placeholder="Enter email" required>
            <button name="s">SUBMIT</button>
        </form>
        </div>
    </body>
</html>
<?php
error_reporting(E_ALL & ~E_WARNING);
include 'db.php';
$a=$_POST["fn"];
$b=$_POST["ln"];
$e=$_POST["f"];
$m=$_POST["m"];
$g=$_POST["d"];
$i=$_POST["t"];
$em=$_POST["ea"];
$select="select email from t4 where email='$em'";
    $res=mysqli_query($con,$select);
    $fetch=mysqli_fetch_assoc($res);
    if (isset($_POST["s"])){
if ($fetch)
{
    echo"<script>alert('your email ... already exist!!')</script>";
}

else{
    $insert="insert into t4 values('$a','$b','$e','$m','$g','$i','$em')";
    mysqli_query($con,$insert);
    header("location:bookm.php");
}}
?>

            