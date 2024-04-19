<head>
    <style>
        div{border:3px solid black;width:50%;height:50%;}
        h1{font-family:MIT curlz;}
    </style>
    </head>
    <body>
     <center>   <div><?php
error_reporting(E_ALL & ~E_WARNING);
include'db.php';
$select="select* from t2";
$query=mysqli_query($con,$select);
$f=mysqli_fetch_assoc($query);
echo"<center><h1>marriage certificate</h1><br><center>This is to certify that<b>".$f['hn']."</b> & <b>".$f['wname']."</b><br><center>are united in marriage on the special day of $da<br>
<center>in the presence of witness <b>".$f['win']."</b> ";
?></div>
   </body> 