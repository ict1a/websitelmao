<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5, user-scalable=no">
    <link rel="stylesheet" href="style1.css">
    <title>First Page</title>
</head>
<header id="main-header">
    <a href="home.php">
        <h2 class="logo"></h2>
    </a>
    <nav class="navigation">
          <a href="home.php">Home</a> 
          <a href="dashboard.php">Account</a>
          <a href="first_page.php">Enroll</a>
          <a href="contact.php">Contact Us</a>
          <a href="logout.php">Logout</a>
    </nav>
</header>

<div class="head">
    <header>
    <table class="center">
        <tr>
            <th><p>
                <h3><img src="icon.jpeg">
                <div class="zxc">
                <b><center>ECLARO ACADEMY</center></b>
                <b><center>EVER GOTETSCO BRANCH</center></b>
                </div>
                <div class="qwe">
                <center>The Eclaro Academy aims to be among Asia’s top academic institutions committed 
                    to nurture innovative learners and developing excellent leaders through technology-oriented, 
                    environmentally-sound, and globally-competitive education.</center></h3>
                </div>
            </p></th>
            <th><p>
                <div class="ad">
                <b>ADMISSION FORM</b>
                </div>
                <div class="fm">
                <center>ADM 0 APRIL 2024</center>
                </div>
            </p></th>
        </tr>
    </table>
</header>
</div>
<body>
    <div class="container">
        <center><h4>REGISTRATION & ADMISSION SECTION</h4>
            <h3>NOTICE OF ADMISSION</h3></center>
            <form action="second_page.php" method="POST">
            <div class="date">
                <h4>Date: <input type="date"name="date"><br></h4>
            </div>
            <div class="na">
            <h4>Name of Applicant: <input type="text"name="na" required></h4>
            </div>
            <div class="ca">
            <h4>Strand You Wish to Sneroll: <select name="ca">
            <option hidden selected value="">Please select your State</option>
                    </option><br>
            </select></h4>
            </div>
            <p style="text-indent:50px;">
                Please be informed that you are considered as Qualified applicant for Admission this SY 2024-2025
                in the strand you applied or to the strand where you are qualified to enroll based from the
                evaluation and ranking of your Gen. Weighted Average in the HS Grade 10.<br><br>
            </p>
            <p style="text-indent:50px;">
                If you are interested to enroll in this University and avail the <b>FREE TUITION FEE</b>,
                you may fill out this Admission Form and the attached Student’s Health Declaration and Interview
                questionnaire. Submit it to Eclaro Academy Ever Gotetsco Branch together with other requirements mentioned below.
                Incomplete requirements shall not be entertained. <br><br>
            
                <i><b>Note: Failure to submit this form and the requirements on the specified date could mean
                    forfeiture of your right to enroll in your chosen strand or to the course strand you are
                    considered to enroll. However, you may opt to choose another course if it is still open or
                    if there is/are still slots available.</b></i>
            </p><br>
            <div class="next">
            <input type="submit" name="next" value="Next">
            </div>
    </div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>