<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['user'];
?>

<?php
if (!isset($_POST['coffee'])) {
    echo "No order found!";
    exit();
}

// Retrieve coffee order details
$coffeePrices = [
    'Espresso' => 2.50,
    'Latte' => 3.50,
    'Cappuccino' => 4.00,
    'Mocha' => 4.50,
];
$orders = $_POST['coffee'];
$totalCost = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Memo</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="styles/images/coffee-hero-section.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f7f7f7;
        }

        .memo-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .memo-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .memo-header h1 {
            font-size: 2rem;
            margin: 0;
            color: #2c3e50;
        }

        .memo-header p {
            font-size: 1rem;
            color: #555;
        }

        .memo-body {
            margin-bottom: 20px;
        }

        .memo-table {
            width: 100%;
            border-collapse: collapse;
        }

        .memo-table th, .memo-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .memo-table th {
            background: #f7f7f7;
            font-weight: bold;
        }

        .total {
            text-align: right;
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 20px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
            text-align: center;
            text-decoration: none;
        }

        .btn:hover {
            background: #2980b9;
        }

        @media print {
            .btn {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="memo-container">
        <!-- Header -->
        <div class="memo-header">
            <h1>Cash Memo</h1>
            <p>Thank you for your order!</p>
            <h1>Name:<b> <?php echo htmlspecialchars($username); ?>!</b></h1>
        </div>

        <!-- Order Details -->
        <div class="memo-body">
            <table class="memo-table">
                <thead>
                    <tr>
                        <th>Coffee Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $coffee => $quantity): ?>
                        <?php if ($quantity > 0): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($coffee); ?></td>
                                <td><?php echo (int)$quantity; ?></td>
                                <td>$<?php echo number_format($coffeePrices[$coffee], 2); ?></td>
                                <td>$<?php 
                                    $subtotal = $quantity * $coffeePrices[$coffee];
                                    $totalCost += $subtotal;
                                    echo number_format($subtotal, 2); 
                                ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Total Cost -->
        <div class="total">
            Total: $<?php echo number_format($totalCost, 2); ?>
        </div>

        <!-- Print Button -->
        <button class="btn" onclick="window.print()">Print Cash Memo</button>
       <button class="btn" > <a style="text-decoration: none; color: #f7f7f7;" href="welcome.php"> Back to Menu </a></button>

        <!-- Back to Menu Button -->
        
    </div>
</body>
</html>
