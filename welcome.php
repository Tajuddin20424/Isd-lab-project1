<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Coffee</title>
    <link rel="stylesheet" href="styles\welcome.css">
    <link rel="icon" type="image/x-icon" href="styles/images/coffee-hero-section.png">
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
            <p>Order your favorite coffee and enjoy your day.</p>
            <button style="padding: 10px 15px; border-radius: 20px; border: none; font-weight: 800;"><a href='index.php' style="text-decoration: none; color:brown;">HOME</a></button>
            <button style="padding: 10px 15px; border-radius: 20px; border: none; font-weight: 800;"><a href='logout.php' style="text-decoration: none; color:brown;">Logout</a></button>
        </div>
    </header>

    <!-- Coffee Cards Section -->
    <main class="main">
    <div class="coffee-container">
    <form method="post" action="process_order.php">
        <div class="coffee-row">
            <!-- Coffee Card: Espresso -->
            <div class="coffee-card">
                <img src="styles/images/expresso.jpg" alt="Espresso">
                <div class="coffee-details">
                    <h3>Espresso</h3>
                    <p>$2.50</p>
                    <input type="number" name="coffee[Espresso]" min="0" placeholder="Qty">
                </div>
            </div>

            <!-- Coffee Card: Latte -->
            <div class="coffee-card">
                <img src="styles/images/Latte.jpg" alt="Latte">
                <div class="coffee-details">
                    <h3>Latte</h3>
                    <p>$3.50</p>
                    <input type="number" name="coffee[Latte]" min="0" placeholder="Qty">
                </div>
            </div>
        </div>

        <div class="coffee-row">
            <!-- Coffee Card: Cappuccino -->
            <div class="coffee-card">
                <img src="styles/images/Cappuccino.jpg" alt="Cappuccino">
                <div class="coffee-details">
                    <h3>Cappuccino</h3>
                    <p>$4.00</p>
                    <input type="number" name="coffee[Cappuccino]" min="0" placeholder="Qty">
                </div>
            </div>

            <!-- Coffee Card: Mocha -->
            <div class="coffee-card">
                <img src="styles/images/Mocha.jpg" alt="Mocha">
                <div class="coffee-details">
                    <h3>Mocha</h3>
                    <p>$4.50</p>
                    <input type="number" name="coffee[Mocha]" min="0" placeholder="Qty">
                </div>
            </div>
        </div>

        <button type="submit" class="btn">Order Now</button>
        
    </form>
</div>

    </main>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Coffee Shop. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
