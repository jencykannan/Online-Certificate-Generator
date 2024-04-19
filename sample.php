<!DOCTYPE html>
<html>
<head>
<title>Slide Navbar</title>
<style>
body{
margin: 0;
padding: 0;
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
font-family: 'Jost', sans-serif;
background-image:url("https://img.freepik.com/free-photo/abstract-luxury-blur-dark-grey-black-gradient-used-as-background-studio-wall-display-your-products_1258-54743.jpg?w=360");
background-size:cover;}

.main{
width: 350px;
height: 500px;
background: red;
overflow: hidden;
background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
border-radius: 10px;
box-shadow: 5px 20px 50px #000;
background-color:black;
}
#chk{
display: none;
}
.signup{
position: relative;
width:100%;
height: 100%;

}
label{
color: orange;
font-size: 2.3em;
justify-content: center;
display: flex;
margin: 60px;
font-weight: bold;
cursor: pointer;
transition: .5s ease-in-out;
}
input,select{
width: 60%;
height: 20px;
background: #e0dede;
justify-content: center;
display: flex;
margin: 20px auto;
padding: 10px;
border: none;
outline: none;
border-radius: 5px;
}
button{
width: 60%;
height: 40px;
margin: 10px auto;
justify-content: center;
display: block;
color: black;
background:orange;
font-size: 1em;
font-weight: bold;
margin-top: 20px;
outline: none;
border: none;
border-radius: 5px;
transition: .2s ease-in;
cursor: pointer;
}

.login{
height: 460px;
background: orange;
border-radius: 60% / 10%;
transform: translateY(-180px);
transition: .8s ease-in-out;
}
.login label{
color: black;
transform: scale(.6);
}

#chk:checked ~ .login{
transform: translateY(-500px);
}
#chk:checked ~ .login label{
transform: scale(1);
}
#chk:checked ~ .signup label{
transform: scale(.6);
}
.l{color:orange;background-color:black;}


    </style>

</head>
<body>
<div class="main">  
<input type="checkbox" id="chk" aria-hidden="true">

<div class="signup">
<form method="post">
<label for="chk" aria-hidden="true">Sign up</label>
<input type="text" name="n" placeholder="User name" required="">
<input type="email" name="e" placeholder="Email" required="">
<input type="password" name="p" placeholder="Password" required="">
<button name="reg">Sign up</button>
</form>
</div>

<div class="login">
<form method="post">
<label for="chk" aria-hidden="true">Login</label>

<input type="email" name="em" placeholder="Email" required="">
<input type="password" name="pa" placeholder="Password" required="">
<button class="l" name="log">Login</button>
</form>
</div>
</div>
</div>
</body>
</html>
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
}}
$e=$_POST["em"];
$p=$_POST["pa"];

$select="select* from t1 where email='$e' and password='$p'";
$query=mysqli_query($con,$select);
if (isset($_POST["log"])){
if(mysqli_num_rows($query)>0)


$fetch=mysqli_fetch_assoc($query);
if ($fetch['email']==$e && $fetch['password']==$p)
{
    
    header("Location:certi.php");
}

else{
    echo"<script>alert('login failed')</script>";
}
}
mysqli_free_result($query);
mysqli_close($con);



?>