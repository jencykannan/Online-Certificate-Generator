<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .user-info-box {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="user-info-box">
    <h2>User Information</h2>
    <p><strong>First Name:</strong> <?php echo htmlspecialchars($firstname); ?></p>
    <p><strong>Last Name:</strong> <?php echo htmlspecialchars($lastname); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>City:</strong> <?php echo htmlspecialchars($city); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
    <p><strong>Destination:</strong> <?php echo htmlspecialchars($destination); ?></p>
</div>

</body>
</html>
