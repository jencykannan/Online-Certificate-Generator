<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="fo.css">
</head>
<body>
<div class="main">  
    <h1 style="color:white;text-align:center;font-family:elephant;">DEATH CERTIFICATE</h1>
    <form method="POST">
        <input type="text" name="n" placeholder="Enter Name" required>
        <select name="g">
            <option>Male</option>
            <option>Female</option>
        </select>
        <input type="date" name="d" placeholder="Enter date of death" required>
        <input type="time" name="t" placeholder="Enter time of death" required>
        <input type="text" name="c" placeholder="Enter cause of death" required>
        <input type="text" name="p" placeholder="Enter place of death">
        <input type="text" name="h" placeholder="If hospital enter name of the hospital">
        <input type="email" name="ea" placeholder="Enter email" required>
        <button name="dea">SUBMIT</button>
    </form>
    </div>
</body>
    </html>
    <?php
error_reporting(E_ALL & ~E_WARNING);
include 'db.php';
$a=$_POST["n"];
$b=$_POST["d"];
$e=$_POST["t"];

$f=$_POST["c"];
$em=$_POST["ea"];
$select="select email from t3 where email='$em'";
    $res=mysqli_query($con,$select);
    $fetch=mysqli_fetch_assoc($res);
    if (isset($_POST["dea"])){
if ($fetch)
{
    echo"<script>alert('your email ... already exist!!')</script>";
}

else{
    $insert="insert into t3 values('$a','$b','$e','$f','$em')";
    mysqli_query($con,$insert);
    header("location:bookm.php");
}}
?>


