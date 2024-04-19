<?php
error_reporting(E_ALL & ~E_WARNING);
include'db.php';
    $name=$_POST['n'];
    $email=$_POST['e'];
    $pass=$_POST['p'];
    $select="select email,password from t1 where email='$email' or  password='$pass'";
    $res=mysqli_query($con,$select);
    $fetch=mysqli_fetch_assoc($res);
    if (isset($_POST["reg"])){
if ($fetch)
{
    echo"<script>alert('check your email and password... already exist!!')</script>";
}

else{
    $insert="insert into t1 values('$name','$email','$pass')";
    mysqli_query($con,$insert);
    header('location:log.php');
}}

?>
<html>
    <head>
        <title>register here</title>

<link rel="stylesheet" href="style.css">
</head>
<body><center><div >
    <form  action="reg.php" method="post">
        <h1>REGISTER HERE</h1>
        <input type="text" name="n" placeholder="enter your name" required>
       <input type="email" name="e" placeholder="enter your email" required>
       <input type="password" name="p" placeholder="enter your password" required>
    <button name="reg">REGISTER NOW</button>
    <p>Do you already have an account?<a href="log.php">Login</a></p>
<a href="change.php">Forget Password</a>
</form>
</div>
</body>
</html>-->
