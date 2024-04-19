<html>
    <head>
    <style>
        body{
            font-size:40px;background-color:darkorange;
        }
  table,th,td{border:3px solid orange;border-collapse:collapse;width:50%;height:5px;padding:10px;background-color:black;color:orange;}
  p{color:green;}
  input{
    width:40%;height:10%;
  }
  
  .b1{width:110px;height:40px;font-size:30px;font-weight:bold;}
  button{background-color:black;color:orange;}
  
        </style>
</head>
<body>
    <form method="POST">
        Display the application<br>
        <button    name="m">Marriage Application</button>
        <button  name="b">Birth Application</button>
        <button  name="d">Death Application</button><br><br>
      
</form>
</body>
</html>
<?php
error_reporting(E_ALL & ~E_WARNING);
include'db.php';
if (isset($_POST["m"]))
{
    $select="select* from t2";
$query=mysqli_query($con,$select);
if ($query->num_rows > 0) {
    echo"<table>";
    echo"<tr>";
    echo"<th>Husband Name";
    echo"<th>Wife name";
    echo"<th>Marriage Date";
    echo"<th>Time";
    echo"<th>Witness name";
    echo"<th>Email";
    echo"</tr>";
    while ($row=mysqli_fetch_assoc($query)) {
      echo"<tr>";
      echo"<td>$row[hn]";
      echo "<td>$row[wname]";
      echo "<td>$row[md] ";
      echo "<td>$row[mt]";
      echo "<td> $row[win]" ;
      echo "<td> $row[email]" ;
      echo"<tr>";
    }
    echo"</table>";
  } else {
    echo "No results found.";
  }
}
if (isset($_POST["b"]))
{
    $select="select* from t4";
$query=mysqli_query($con,$select);
if ($query->num_rows > 0) {
    echo"<table>";
    echo"<tr>";
    echo"<th>First Name";
    echo"<th>Last name";
    echo"<th>Father Name";
    echo"<th>Mother Name";
    echo"<th>DOB";
    echo"<th>Time";
    echo"<th>Email";
    echo"</tr>";
    while ($row=mysqli_fetch_assoc($query)) {
      echo"<tr>";
      echo"<td>$row[fn]";
      echo "<td>$row[ln]";
      echo "<td>$row[fan] ";
      echo "<td>$row[mn]";
      echo "<td>$row[dob]";
      echo "<td>$row[t]";
      echo "<td> $row[email]" ;
      echo"<tr>";
    }
    echo"</table>";
  } else {
    echo "No results found.";
  }
}
if (isset($_POST["d"]))
{
    $select="select* from t3";
$query=mysqli_query($con,$select);
if ($query->num_rows > 0) {
    echo"<table>";
    echo"<tr>";
    echo"<th>Name";
    echo"<th>Date";
    echo"<th>Time";
    echo"<th>Cause";
    echo"<th>Email";
    echo"</tr>";
    while ($row=mysqli_fetch_assoc($query)) {
      echo"<tr>";
      echo"<td>$row[name]";
      echo "<td>$row[d]";
      echo "<td>$row[t] ";
      echo "<td>$row[ca]";
      echo "<td> $row[email]" ;
      echo"<tr>";
    }
    echo"</table>";
  } else {
    echo "No results found.";
  }
}
$do=$_POST["md"];
if (isset($_POST["dele"]))
{
    $delete="delete from t2  where email='$do'";
    mysqli_query($con,$delete);
    echo"<p>Deletion successfully done..</p>";
}
$bb=$_POST["bd"];
if (isset($_POST["dele"]))
{
    $delete="delete from t4  where email='$bb'";
    mysqli_query($con,$delete);
    echo"<p>Deletion successfully done..</p>";
}
$ed=$_POST["dd"];
if (isset($_POST["dele"]))
{
    $delete="delete from t3 where email='$ed'";
    mysqli_query($con,$delete);
    echo"<p>Deletion successfully done..</p>";
}
  $con->close();
?>

