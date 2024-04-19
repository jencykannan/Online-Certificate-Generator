
<html>
    <head>
        <title>login</title>

<link rel="stylesheet" href="style.css">

</head>
<body><center>
<div>
    <form method="POST">
    <input type="email" name="em" placeholder="enter your email" required>
       <input type="password" name="pa" placeholder="enter your password" required>
       <button name="log" >LOGIN NOW</button>
       

<p>Don't you already have an account?<a href="reg.php">Register here</a></p>
</form>
</div>
</body>
<?php
error_reporting(E_ALL & ~E_WARNING);
include'db.php';
$e=$_POST["em"];
$p=$_POST["pa"];

$select="select* from t1 where email='$e' and password='$p'";
$query=mysqli_query($con,$select);
if (isset($_POST["log"])){
if(mysqli_num_rows($query)>0){
$fetch=mysqli_fetch_assoc($query);
if ($fetch['email']==$e && $fetch['password']==$p)
{
    echo"<script>alert('login ss')</script>";
    header("Location:certi.php");
}}
else{
    echo"<script>alert('login failed')</script>";
}
}
mysqli_free_result($query);
mysqli_close($con);

?>
</html>