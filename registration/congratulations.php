<?php 
session_start();
// Check if user is not logged in, redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php"); // Change 'login.php' to your actual login page
    exit;
}

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

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

    <title>Congratulations!</title>
</head>
<header>
    <a href="index.html">
       <h2 class="logo"></h2>
   </a>
   <nav class="navigation">
   <a href="dashboard.php">Account</a>
    <a href="home.php">Home</a>
    <a href="enrollment.php">Enroll</a>
    <a href="contact.php">Contact Us</a>
    <button class="btnLogout-popup" onclick="logoutBtn()">Log out</button>
   </nav>
 </header>
<body bgColor="Green">
    <div class="container" style="background-color:white">
        <header><span style="font-size: 28px; font-weight: 700;">Congratulations, You are now enrolled!</span></header>
        <div class="congratulations-content">
            <p>Thank you for choosing our school. You are now officially enrolled.</p>
            <p>Here are some next steps:</p>
            <ul>
                <li>Check the Facebook Page for important information.</li>
                <li>Go to the registrar and pass the requirements.</li>
                <li>Visit our campus for orientation on the specified date.</li>
                <li>Join the Facebook Group for announcent</li>
            </ul>
            <p>We look forward to having you as part of our school</p>

            <!-- Submit Another One button -->
            <button onclick="redirecttoUserInterface()">Back to home</button>
        </div>
    </div>

    <!-- Link to your script.js file -->
    <script src="script.js"></script>
</body>
</html>

<?php 
}else{
     header("Location: index.html");
     exit();
}
 ?>