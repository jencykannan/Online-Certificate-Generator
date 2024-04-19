<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Document</title>
<style>
body {
   margin: 0px;
   margin-top: 10px;
   padding: 0px;
   background-image:url("https://w0.peakpx.com/wallpaper/851/1024/HD-wallpaper-the-black-one-dark-glow-lines-polygon-shades-shadows-shine.jpg");
  
}
/*
nav {
    opacity:0.5;
   width: 100%;
   background-color: rgb(39, 39, 39);
   overflow: auto;
   height: auto;
  
}
.links {
   display: inline-block;
   text-align: center;
   padding: 14px;
   color:darkorange;
   text-decoration: none;
   font-size: 30px;
   font-weight: bold;
}
.links:hover {
   background-color: rgb(100, 100, 100);
}
/*form {
   float: right;
   margin-top: 8px;
}
form input{
   display: inline-block;
   padding: 6px;
   font-size: 17px;
   margin-right: 8px;
   border:none;
}*/
.selected {
   background-color: rgb(0, 18, 43);
}
@media screen and (max-width: 977px) {
.links {
   display: block;
}
/*form {
   display: block;
   color:white;
}
form input{
   margin-right: 0px;
   display: block;
   width: 100vw;
   margin: 0px;
   border-bottom: 2px solid rgb(178, 137, 253);
   text-align: center;
}*/
}
button{
    margin-left:450px;
    margin-top:150px;
    width:400px;
    height:200px;
    border-radius:60px;
    font-size:30px;
    font-weight:bold;
    color:orange;
    background: linear-gradient(to right, #434343 0%, black 100%);
}
button:hover{
    box-shadow: 0 0 10px orange inset, 0 0 20px 2px orange;
    border:3px solid black;
}
.nav{
	width: 1100px;
	height: 60px;
	margin: 0 auto;
	border-radius: 5px;
	
}
ul li{
	list-style: none;
	width: 200px;
	line-height: 60px;
	position: relative;
	background: #222;
	box-shadow: 0px 2px 5px 0px grey;
	text-align: center;
	float: left;
	background-color: #010000;
}
ul li ul{
	position: absolute;
}
.nav > ul > li:nth-of-type(1){
	border-radius: 5px 0px 0px 5px;
}
.nav > ul > li:nth-of-type(5){
	border-radius: 0px 5px 5px 0px;
}
ul li a{
	color: orange;
	width: 200px;
	height: 58px;
	display: inline-block;
	text-decoration: none;
}
ul li a:hover{
	font-weight: bold;
	border-bottom: 2px solid #fff;
}
ul li ul{
	display: none;
}
.nav ul li:hover ul{
	display: block;
}
.fa{
	margin-right: 5px;
}
.container{
	width: 1000px;
	height: 200px;
	margin: 0 auto;
	padding:20px 20px;
}
@media screen and (max-width: 480px){
	header{
		width: 100%;
	}
	.nav{
		display: none;
		width: 100%;
		height: auto;
	}
	ul li{
		width: 100%;
		float: none;
	}
	ul li a{
		width: 100%;
		display: block;
	}
	ul li ul{
		position: static;
	}
	ul li ul li a{
		background: #222;
	}
	.fa-list.modify{
		display: block;
	}
	.container{
		width: 100%;
		height: auto;
	}
	body{
		overflow-x:hidden;
	}
}
</style>
</head>
<body>

<nav class="nav">
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="ad.php">Admin</a></li>
		<li><a href="#">Certificate download</a>
		<ul>
                <li><a href="mg.php">Marriage certificate</a></li>
				<li><a href="bg.php">Birth certificate</a></li>
				<li><a href="dg.php">Death certificate</a></li>
			</ul>
		</li>
		<li><a href="#">Contact</a></li>
		<li><a href="https://webdevtrick.com" target="_blank">About</a></li>
	</ul>
</nav>

   <form method="post">
   <button name="b"> CLICK HERE FOR USER LOGIN</button>
</form>
</body>
</html>
<?php
error_reporting(E_ALL & ~E_WARNING);
if (isset($_POST["b"]))
{
    header("location:sample.php");
}
?>