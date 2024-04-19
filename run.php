<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        $welcomeMessage = 'Welcome to our Home Page!';
        break;
    case 'about':
        $welcomeMessage = 'Welcome to our About Page!';
        break;
    default:
        $welcomeMessage = 'Welcome!';
        break;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Website</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="?page=about">About</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <?php
        switch ($page) {
            case 'home':
            case 'about':
                echo '<h1>' . $welcomeMessage . '</h1>';
                break;
            default:
                // No special content for other pages
                break;
        }
        ?>
        
        <!-- Other content specific to each page can go here -->
    </main>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Website Name. All rights reserved.</p>
    </footer>
</body>
</html>
