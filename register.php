<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registration Form</title>
</head>
<style>
   body {
      font-family: Arial, sans-serif;
      background-color: rgb(153, 144, 144);
      background-repeat: no-repeat;
      background-position: center;
      margin: 0;
      padding: 0;
    }

    .res {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.9); /* translucent box */
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    h2 {
      text-align: center;
    }

    label {
      font-weight: bold;
    }

    input, select {
      width: 100%;
      padding: 8px;
      margin: 6px 0 16px;
    }

    input[type="submit"] {
      background-color: #105edcfa;
      color: white;
      border: none;
      cursor: pointer;
    }

    #successMessage {
      color: green;
      font-weight: bold;
      display: none;
      text-align: center;
      margin-top: 20px;
    }
</style>

<body>
  <div class="res">
    <h2>Registration Form</h2>
    <form id="registrationForm" action="register.php" method="POST">
      <label for="collegeId">College ID:</label>
      <input type="text" id="collegeId" name="collegeId" placeholder="Enter collegeId" required />

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter Name" required />

      <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" name="dob" placeholder="Enter DOB" required />

      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>

      <label for="mobile">Mobile No:</label>
      <input type="tel" id="mobile" name="mobile" placeholder="Enter mobile number" required />

      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" placeholder="Enter Email Address" required />

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter Password" required />

      <input type="submit" value="Register" name="Register" />

    </form>
  </div>
</body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$server = "localhost";
$username = "root";
$password = "";
$dbname = "registrar";

// DB Connection
$con = mysqli_connect($server, $username, $password, $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["Register"])) {
    $collegeId = $_POST['collegeId'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Password encryption (recommended)
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `student_data`(`College_Id`, `Name`, `DOB`, `Gender`, `Mobile`, `Email`, `Password`) 
            VALUES ('$collegeId','$name','$dob','$gender','$mobile','$email','$password')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location: login.php");
        exit(); 
    } 
    else {
        echo " Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}


?>
