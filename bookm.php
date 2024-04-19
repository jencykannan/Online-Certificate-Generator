<html>
    <head>
        <style>
            body{font-size:30px;}
            h2{color:green;}
            button{background-color:black;color:green;width:80px;height:40px;font-size:30px;font-weight:bold;}
            </style>
</head>
    <body>
        <center><h2>Pay Rs.250 to get your Registration successful!!!</h2>
        <form method="post">
            <button name="b">Back</button>
            <button name="p">Pay</button>

</body>
</html>
<?php
error_reporting(E_ALL & ~E_WARNING);
if(isset($_POST["b"]))
{
    header("location:mari.php");
}
if(isset($_POST["p"]))
{
    header("location:do.php");
}
?>


