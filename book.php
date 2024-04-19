<html>
    <body>
        <center><h2>Pay Rs.250 to get your Registration successful!!!</h2>";
        <form method="post">
            <button name="b">Back</button>
            <button name="p">Pay</button>

</body>
</html>
<?php
if(isset($_POST["b"]))
{
    header("location:mari.php");
}
if(isset($_POST["p"]))
{
    header("location:do.php");
}
?>


