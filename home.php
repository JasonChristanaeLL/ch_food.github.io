<?php
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['username'])) { 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>CH Food</title>
</head>
<body>
    <header>
    <h1 class="name">Hello, <?php echo $_SESSION['name']; ?></h1>
    <nav class="nav-bar">
        <ul>
            <li><a href="">Tentang</a></li>
            <li><a href="">Daerah</a></li>
            <li><a href="">Search</a></li>
        </ul>
    </nav>
    <a class="logout" href="logout.php">Logout</a>
    </header>
</body>
</html>

<?php
    } else {
        header("Location: log.php");
        exit();
    }
?>