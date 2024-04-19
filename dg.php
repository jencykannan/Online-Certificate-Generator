<html>
    <head>
    <title>death certi</title>
    <style>
        div{border:3px solid black;width:50%;height:60%;margin-top:100px;font-size:30px;color:white;}
        h1{color:rgb(201, 76, 76);}
        p{font-family:"Vivaldi";color:rgb(255, 191, 0);font-size:30%;}
      
.im{background:url("https://d1csarkz8obe9u.cloudfront.net/posterpreviews/elegant-gold-frame-background-design-template-2c7ea889f6f5fe92c963be8a68ffa603_screen.jpg?ts=1677975595");background-repeat:no-repeat;width:50%;height:60%;background-size:cover;}
        </style>
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
$select="select* from t3 where email='$e'";
$query=mysqli_query($con,$select);
if (isset($_POST["ge"])){
if(mysqli_num_rows($query)>0){
$fetch=mysqli_fetch_assoc($query);
if ($fetch['email']==$e)
{
    
    echo"<center><div class='im'><br><h1>Death certificate</h1><p><center>This is to acknowledge the death of <b>".$fetch['name']."</b><br><center>on the day of <u>".$fetch['d']."</u> time " .$fetch['t']."<br>
<center>cause of death <b>" .$fetch['ca']."</b></p></div> ";
}}
else{
    echo"<script>alert('Make sure You have registered your marriage')</script>";
}
}