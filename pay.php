<html>
  <head>
    <title>payment</title>
</head>
<body>
  <form method="POST">
    <input type="text" placeholder="Enter card holders name">
  
    <input type="text" placeholder="Enter card number">
    <input type="text" placeholder="Enter expiry month">
    <input type="text" placeholder="Enter cvv">
    <button name="pp">PAY</button>
</form>
</body></html>
  <?php
if (isset($_POST["pp"]))
  {
    header("location:home.php");
  }
  ?>