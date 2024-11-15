<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - CheapDeals Store</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #cc0000; /* Red background */
            font-family: Arial, sans-serif;
        }

        .register-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .register-container h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .register-container label {
            display: block;
            margin-top: 10px;
            text-align: left;
            color: #555;
            font-weight: bold;
        }

        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"],
        .register-container input[type="tel"],
        .register-container input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .register-container input[type="submit"] {
            background-color: #555;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        .register-container input[type="submit"]:hover {
            background-color: #333;
        }

        .register-container p {
            margin-top: 10px;
            font-size: 14px;
            color: #777;
        }

        .register-container .footer-link {
            color: #cc0000;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register to CheapDeals Store</h2>
        <form action="register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="name">Full Name:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="address">Address:</label>
            <input type="text" name="address" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" name="phone" pattern="[0-9]{10}" required title="Enter a valid 10-digit phone number">

            <label for="credit-card">Credit Card Number:</label>
            <input type="number" name="credit-card" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <input type="submit" value="Register">
        </form>
        <p>Already have an account? <a href="login.php" class="footer-link">Log In</a></p>
    </div>
</body>
</html>
