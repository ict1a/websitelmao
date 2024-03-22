<?php

//session_start();

// Redirect users who are not logged in to login.php
//if(!isset($_SESSION['email'])) {
  //  header("Location: login.php");
   // exit();
//}

// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = ''; // Password for MySQL, leave empty if none
$database = 'RES';

// Establishing connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : '';
    
    // Retrieve user ID from registration table
    $userIdQuery = "SELECT user_id FROM registration WHERE email = ?";
    $stmt = $conn->prepare($userIdQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userId = $row["user_id"];
        
        $stmt = $conn->prepare("INSERT INTO enrollment_form (user_id, dob, gradeLevel, guardianName, guardianContact, contactNumber, address, facebookName, program, schedule, LRN, voucher, adviserName, sectionSy, schoolAttended, learning, admission) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isisisssssssssss", $userId, $dob, $gradeLevel, $guardianName, $guardianContact, $contactNumber, $address, $facebookName, $program, $schedule, $LRN, $voucher, $adviserName, $sectionSy, $schoolAttended, $learning, $admission);

        // Now you have the user ID, you can proceed with inserting enrollment data
        // Modify your INSERT query to include the user_id column
    } else {
        // Handle case where email is not found
        echo "The email address is not registered. Please register before enrolling.";
        // OR
        // header("Location: registration.php"); // Redirect to registration page
      }



    // Set parameters and execute
    $dob = $_POST['dob'];
    $gradeLevel = $_POST['gradeLevel'];
    $guardianName = $_POST['guardianName'];
    $guardianContact = $_POST['guardianContact'];
    $contactNumber = $_POST['contactNumber'];
    $address = $_POST['address'];
    $facebookName = $_POST['facebookName'];
    $program = $_POST['program'];
    $schedule = $_POST['Schedule'];
    $LRN = $_POST['LRN'];
    $voucher = $_POST['Voucher'];
    $adviserName = $_POST['adviserName'];
    $sectionSy = $_POST['sectionSy'];
    $schoolAttended = $_POST['SchoolAttended'];
    $learning = $_POST['learning'];
    $admission = $_POST['admission'];

    if ($stmt->execute()) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="registration.css">

    <!-- Link to Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap">

    <!-- iconsout css -->
    <link rel="stylesheet" href="https://unicons.iconsout.com/release/v4.0.0/css/line.css">
   

    <title>Enrollment Form</title>
</head>
<body style="background-color: rgb(98, 154, 139)">
    <header>
        <a href="index.html">
           <h2 class="logo"></h2>
       </a>
         <nav class="navigation">
            <a href="dashboard.php">Account</a>
            <a href="home.php">Home</a>
            <a href="enrollment.php">Enroll</a>
            <a href="contact.php">Contact Us</a>
            <button class="btnLogout-popup" onclick="logout()">Log Out</button>
         </nav>
     </header>

     <div class="container" style="background-color:white">
        <header style="position: relative;">
            <span style="font-size: 28px; font-weight: 700; position: absolute; text-align: center;">Enrollment Form</span>
        </header>
        
        <form id="enroll" onsubmit="return validateEnrollmentForm()" method="post">
   
            <!--  Personal data section -->
            <div class="input-field">
                <label for="dob">Date of Birth:</label><br>
                <input type="date" id="dob" name="dob" required><br>

                <label for="gradeLevel">Grade Level:</label><br>
                <input type="number" id="gradeLevel" name="gradeLevel" placeholder="Enter your grade level" required><br>
        
                <label for="guardianName">Name of Guardian:</label><br>
                <input type="text" id="guardianName" name="guardianName" placeholder="Enter your guardian's name" required><br>
        
                <label for="guardianContact">Contact Number of Guardian:</label><br>
                <input type="tel" id="guardianContact" name="guardianContact" placeholder="Enter your guardian's number" required><br>
        
                <label for="contactNumber">Contact Number:</label><br>
                <input type="tel" id="contactNumber" name="contactNumber" placeholder="Enter your contact number" required><br>
        
                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address" placeholder="Enter your address" required><br>
        
                <label for="facebookName">Facebook Name:</label><br>
                <input type="text" id="facebookName" name="facebookName" placeholder="Enter your Facebook name" required><br>
            </div>
        
            <!-- Program -->
            <label for="program" style="font-size:17px">Strand/Track:</label><br>
            <select id="program" name="Program/Strand" required><br>
                <option value="">Select your strand</option><br>
                <option value="ICT">Information Communication and Technology</option><br>
                <option value="STEM">Science,Technology, Engineering and Mathematics</option><br>
                <option value="H.E">Home Economics</option><br>
                <option value="ABM">Accountancy,Business and Management</option><br>
                <option value="HUMSS">Humanities and Social Science</option><br>
                <option value="GAS">General Academic Strand</option><br>
            </select><br><br>
        
            <!-- Preferred Schedule-->
            <label for="Schedule"><b></b>Preferred Schedule:</label><br>
            <input type="radio" name="Schedule" value="Am" required> AM<br>
            <input type="radio" name="Schedule" value="Pm" required> PM<br><br>
        
            <!-- LRN -->
            <label for="LRN"><b></b>LRN:</label><br>
            <input type="number" id="LRN" name="LRN" placeholder="Enter student ID" required><br><br>
        
            <!-- Voucher -->
            <label for="Voucher"><b></b>Voucher:</label><br>
            <select id="Voucher" name="Voucher"" required><br>
                <option value=""> </option><br>
                <option value="QVR">Qualified Voucher Recipient</option><br>
                <option value="Non-QVR">Non-Qualified Voucher Recipient</option><br>
            </select><br><br>
        
            <!-- Adviser, Section, Last School Attended -->
            <label><b></b>Name of Adviser Last Year:</label><br>
            <input type="text" id="AdviserName" name="adviserName" placeholder="Enter your adviser's name" required><br><br>
        
            <label><b></b>Section In Previous School Year:</label><br>
            <input type="text" id="SectionSy" name="sectionSy" placeholder="Enter your section last year" required><br><br>
        
            <label><b></b>Name of Last School Attended:</label><br>
            <input type="text" id="SchoolAttended" name="schoolAttended" placeholder="Enter your last school attended" required><br><br>
        
            <!-- Modality of Learning -->
            <label><b></b>Modality of Learning:</label><br>
            <select id="Learning" name="learning" required><br> <option value="">Select your modality</option><br> <option value="Online">Online</option><br> <option value="Blended">Blended</option><br> <option value="Modular">Modular</option><br> </select><br><br>
        
        <!-- Admission -->
        <label><b></b>Admission:</label><br>
        <select id="Admission" name="admission" required><br>
            <option value="">Select your admission type</option><br>
            <option value="Old student">Old Student</option><br>
            <option value="New Student">New Student</option><br>
        </select><br><br>
        
        <input type="submit" value="Submit" class="submit-button">
        </form>

        <!-- Link to your script.js file -->
        <script src="script.js"></script>
    </div>
</body>
</html>
