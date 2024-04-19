
<html>
    <head>
        <style>
            body{font-size:30px;}
            h2{color:green;}
            button{background-color:black;color:green;width:90px;height:40px;font-size:30px;font-weight:bold;}
            </style>
</head>
    <body>
        <center><h2>Payment successful!!!</h2>
        <p>Click home to generate your certificate</p>
        <form method="post">
            <button name="h">Home</button>
</form>
</body>
</html>
<?php
if (isset($_POST["h"]))
  {

    header("location:home.php");
  }
  ?>
