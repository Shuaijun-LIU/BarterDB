<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redirect guests to login page before HTML output
if (!isset($_SESSION['role'])) {
    header("Location: ../public/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarterDB</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<header>
    <div class="header-container">
        <div class="header-left">
            <a href="https://www.uidaho.edu/" class="logo-link">
                <img src="../assets/images/logo.png" alt="BarterDB Logo" class="logo">
            </a>
        </div>
        <div class="header-center">
            <a href="../public/index.php" class="title-link">
                <h1>Barter Database Management System</h1>
            </a>
        </div>
        <div class="header-right">
            <nav>
                <ul>
                    <?php
                    if ($_SESSION['role'] === 'admin') {
                        echo '<li><a href="../controllers/userController.php?logout=1">Logout</a></li>';
                    } elseif ($_SESSION['role'] === 'user') {
                        echo '
                            <li><a href="../public/dashboard.php">Dashboard</a></li>
                            <li><a href="../public/post_item.php">Post Item</a></li>
                            <li><a href="../public/match_trade.php">Find Trade</a></li>
                            <li><a href="../public/transaction_history.php">Transaction History</a></li>
                            <li><a href="../controllers/userController.php?logout=1">Logout</a></li>
                        ';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</header>

<main>
