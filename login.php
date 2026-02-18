<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #918d8d;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 350px;
        }
        h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .links {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 14px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .message {
            text-align: center;
            margin-top: 10px;
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>

    <!-- Display PHP message -->
    <?php if (!empty($message)) { echo "<p class='message'>$message</p>"; } ?>

    <form action="" method="POST">
        <label for="collegeId">College ID</label>
        <input type="text" name="collegeId" id="collegeId" placeholder="Enter College ID" required>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required>
        
        <button type="submit" name="lgin">Login</button>
    </form>
    
    <div class="links">
        <a href="register.php">Register</a>
        <a href="#">Forgot Password?</a>
    </div>
</div>

</body>
</html>






<?php
session_start();

// Database connection
$server = "localhost";
$username = "root";
$password = "";
$dbname = "registrar";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

$message = ""; // Error/Success message

if (isset($_POST['lgin'])) {
    // Clean user input
    $collegeId = mysqli_real_escape_string($conn, $_POST['collegeId']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    // Fetch user by College_ID
    $sql = "SELECT * FROM student_data WHERE College_ID='$collegeId'";
    $run = mysqli_query($conn, $sql);

    if (mysqli_num_rows($run) > 0) {
        $row = mysqli_fetch_assoc($run);

        // Compare plain password (case-sensitive)
        if ($pass == $row["Password"]) {
            $_SESSION['College_ID'] = $row['College_ID']; // store login session
            header("Location: login_page.php");
            exit();
        } else {
            $message = "❌ Incorrect password!";
        }
    } else {
        $message = "❌ User not found!";
    }
}
?>






