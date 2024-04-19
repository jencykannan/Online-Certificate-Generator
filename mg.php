<html>
    <head>
    <title>marriage certi</title>
    <style>
        div{border:3px solid black;width:50%;height:60%;margin-top:100px;font-size:30px;}
        h1{color:rgb(201, 76, 76);}
        p{font-family:"Vivaldi";color:rgb(255, 191, 0);font-size:30px;}
        .im{background:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQco-5hyfm6z5o_YCQxO1Ud62dLxFmxyDs2tg&usqp=CAU");background-repeat:no-repeat;width:50%;height:60%;background-size:cover;}
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
$select="select* from t2 where email='$e'";
$query=mysqli_query($con,$select);
if (isset($_POST["ge"])){
if(mysqli_num_rows($query)>0){
$fetch=mysqli_fetch_assoc($query);
if ($fetch['email']==$e)
{
    
    echo"<center><div class='im'><h1>Marriage certificate</h1><p><center>This is to certify that <b>".$fetch['hn']."</b> & <b>".$fetch['wname']."</b><br><center>are united in marriage on the special day of <br><u>".$fetch['md']."</u><br>
<center>in the presence of witness <b>".$fetch['win']."</b></p></div> ";
}}
else{
    echo"<script>alert('Make sure You have registered your marriage')</script>";
}
}