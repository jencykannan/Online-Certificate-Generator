<html>
    <head>
    <title>emcer</title>
</head>
<body>
    <form method="POST">
        <input type="email" placeholder="Enter your email given in your registration" name="em" required>
        <button name="ge">GET CERTIFICATE</button>
</form>
</body>
</html>
<?php
error_reporting(E_ALL & ~E_WARNING);
$e=$_POST["em"];
include'db.php';
$select="select* from t2 where email='$e'";
$query=mysqli_query($con,$select);
if (isset($_POST["ge"])){
if(mysqli_num_rows($query)>0){
$fetch=mysqli_fetch_assoc($query);
if ($fetch['email']==$e)
{
    echo"<script>alert('Email matched')</script>";
    echo"<center><h1>marriage certificate</h1><br><center>This is to certify that<b>".$fetch['hn']."</b> & <b>".$fetch['wname']."</b><br><center>are united in marriage on the special day of".$fetch['md']."<br>
<center>in the presence of witness <b>".$fetch['win']."</b> ";
}}
else{
    echo"<script>alert('check email')</script>";
}
}