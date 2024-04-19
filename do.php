<!--<html>
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
</body><html>
  <?php
if (isset($_POST["pp"]))
  {
    header("location:home.php");
  }
  ?>-->
  <html>
  <head>
    <title>payment</title>
    <style>
        body{
            background: linear-gradient(109.6deg, rgb(14, 11, 56) 11.2%, rgb(239, 37, 37) 91.1%);

           
        }
    *{
        text-align:center;
    }
    form{
        margin-top:80px;
    }
    input{
        width:30%;
        height:50px;
        border:3px solid black;
    }
    button{
        width:30%;
        height:50px;
        color:black;
        font-size:20px;
        background: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%);
        border-radius:10px;
        border:3px solid black;
    }
    button:hover{
        box-shadow: 0 0 10px 0 lightpink inset, 0 0 20px 2px lightpink;
        border: 3px solid black;
    }
    h1{
        margin-top:50px;
        color:white;
        font-size:50px;
    }
    </style>
</head>
<body>
    <h1>PAYMENT DETAILS</h1>
  <form method="POST">
    <input type="text" placeholder="Enter card holders name" required><br><br>
    <input type="text" placeholder="Enter card number" required><br><br>
    <input type="text" placeholder="Enter expiry month" required><br><br>
    <input type="text" placeholder="Enter cvv" required><br><br><br>
    <button name="pp"><b>PAY</b></button>
</form>
</body></html>
  <?php
if (isset($_POST["pp"]))
  {

    header("location:ps.php");
  }
  ?>


