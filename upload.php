<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Upload Documents</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: rgb(153, 144, 144);
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      min-height: 100vh;
    }

    .res {
     max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.9); /* translucent box */
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    

    form {
      border: 1px solid #ddd;
      padding: 16px;
      border-radius: 10px;
    }

    .row {
      margin-bottom: 14px;
    }

    label {
      display: block;
      font-weight: 600;
      margin-bottom: 6px;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 4px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .hint {
      font-size: 12px;
      color: #666;
    }

    .error {
      color: #b00020;
      margin-top: 8px;
    }

    .ok {
      color: #0a7d2a;
      margin-top: 8px;
    }

    button {
      cursor: pointer;
      padding: 10px 16px;
      border-radius: 8px;
      border: 1px solid #333;
      background: #111;
      color: #fff;
    }

    h1 {
      text-align: center;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="res">
    <h1><u>Upload Document</u></h1>
    <form id="uploadForm" action="upload.php" method="POST" enctype="multipart/form-data" novalidate>

      <h2><u> Details</u></h2>

      <label for="collegeId">College ID:</label>
      <input type="text" id="collegeId" name="collegeId" placeholder="Enter collegeId" required />

      <label for="name">Student's Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter Name" required />

      <label for="fatherName">Father's Name:</label>
      <input type="text" id="fatherName" name="fatherName" placeholder="Enter Name" required />

      <label for="course">Course:</label>
      <input type="text" id="course" name="course" placeholder="Enter Course" required />

      <label for="branch">Branch:</label>
      <input type="text" id="branch" name="branch" placeholder="Enter Branch" required />

      <label for="year">Year:</label>
      <input type="number" id="year" name="year" placeholder="Enter Year" required />

      <h2><u>Documents</u></h2>

      <div class="row">
        <label for="photo">Passport Size Photo:</label>
        <input type="file" id="photo" name="photo" accept=".pdf,application/pdf" required>
        <div class="hint">File must be .pdf and ≤ 5 MB.</div>
      </div>
      <div class="row">
        <label for="aadhar">Aadhaar Card:</label>
        <input type="file" id="aadhar" name="aadhar" accept=".pdf,application/pdf" required>
        <div class="hint">File must be .pdf and ≤ 5 MB.</div>
      </div>
      <div class="row">
        <label for="marks10">10th Mark Sheet:</label>
        <input type="file" id="marks10" name="marks10" accept=".pdf,application/pdf" required>
        <div class="hint">File must be .pdf and ≤ 5 MB.</div>
      </div>
      <div class="row">
        <label for="marks12">12th Mark Sheet:</label>
        <input type="file" id="marks12" name="marks12" accept=".pdf,application/pdf" required>
        <div class="hint">File must be .pdf and ≤ 5 MB.</div>
      </div>
      <div class="row">
        <label for="diploma">Diploma Mark Sheet (Optional):</label>
        <input type="file" id="diploma" name="diploma" accept=".pdf,application/pdf">
        <div class="hint">File must be .pdf and ≤ 5 MB.</div>
      </div>
      <div class="row">
        <label for="tc">Transfer Certificate/Migration Certificate (CBSC Board):</label>
        <input type="file" id="tc" name="tc" accept=".pdf,application/pdf" required>
        <div class="hint">File must be .pdf and ≤ 5 MB.</div>
      </div>
      <div class="row">
        <label for="character">Character Certificate:</label>
        <input type="file" id="character" name="character" accept=".pdf,application/pdf" required>
        <div class="hint">File must be .pdf and ≤ 5 MB.</div>
      </div>
      <div class="row">
        <label for="income">Income Certificate:</label>
        <input type="file" id="income" name="income" accept=".pdf,application/pdf" required>
        <div class="hint">File must be .pdf and ≤ 5 MB.</div>
      </div>
      <div class="row">
        <label for="domicile">Domicile Certificate:</label>
        <input type="file" id="domicile" name="domicile" accept=".pdf,application/pdf" required>
        <div class="hint">File must be .pdf and ≤ 5 MB.</div>
      </div>
      <div class="row">
        <label for="category">Category Certificate (if applicable):</label>
        <input type="file" id="category" name="category" accept=".pdf,application/pdf">
        <div class="hint">File must be .pdf and ≤ 5 MB.</div>
      </div>

      <button type="submit" name="upload">Upload</button>
    </form>
  </div>

</div>

</body>
</html>



<?php
// Error reporting ON (development time)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$server   = "localhost";
$username = "root";
$password = "";
$dbname   = "registrar";

$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// -------- Function to upload single file --------
function uploadFile($fieldName, $collegeId) {
    if (isset($_FILES[$fieldName]) && $_FILES[$fieldName]['error'] == 0) {
        
        $ext = pathinfo($_FILES[$fieldName]['name'], PATHINFO_EXTENSION);
        if (strtolower($ext) !== "pdf") {
            echo " Only PDF allowed for $fieldName<br>";
            return "";
        }

        // CollegeID specific folder banaye agar exist nahi karta
        $folderPath = "upload/" . $collegeId . "/";
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        // File ka naam fieldName.pdf rakhenge
        $newName = $fieldName . ".pdf";
        $targetPath = $folderPath . $newName;

        if (move_uploaded_file($_FILES[$fieldName]['tmp_name'], $targetPath)) {
            echo " $fieldName uploaded successfully<br>";
            return $newName; // DB me sirf filename store hoga
        } else {
            echo " Failed to upload $fieldName<br>";
            return "";
        }
    }
    return ""; // agar file select hi nahi ki gayi
}

// -------- Handle Form Submit --------
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Student basic details
    $collegeId  = $_POST['collegeId'];
    $name       = $_POST['name'];
    $fatherName = $_POST['fatherName'];
    $course     = $_POST['course'];
    $branch     = $_POST['branch'];
    $year       = $_POST['year'];

    // All possible document fields
    $fileFields = [
        'photo','aadhar','marks10','marks12',
        'diploma','tc','character','income',
        'domicile','category'
    ];

    // Upload all files in loop
    $uploadedFiles = [];
    foreach ($fileFields as $field) {
        $uploadedFiles[$field] = uploadFile($field, $collegeId);
    }

    // Insert into DB
    $sql = "INSERT INTO `upload_document`
    (`College_ID`, `Student`, `Father`, `Course`, `Branch`, `Year`,
    `Photo`, `Aadhar`, `Marksheet_10`, `Marksheet_12`, `Diploma_Marksheet`,
    `Transfer_Certificate`, `Character_Certificate`, `Income_Certificate`,
    `Domicile_Certificate`, `Category_Certificate`)
    VALUES (
    '$collegeId', '$name', '$fatherName', '$course', '$branch', '$year',
    '".$uploadedFiles['photo']."', '".$uploadedFiles['aadhar']."', '".$uploadedFiles['marks10']."',
    '".$uploadedFiles['marks12']."', '".$uploadedFiles['diploma']."',
    '".$uploadedFiles['tc']."', '".$uploadedFiles['character']."',
    '".$uploadedFiles['income']."', '".$uploadedFiles['domicile']."',
    '".$uploadedFiles['category']."')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3> Documents uploaded and saved successfully!</h3>";
    } else {
        echo "Database Error: " . mysqli_error($conn);
    }
}
?>


