<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>

<!DOCTYPE html>
<!--
DEVELOPERS:
PONCE, MARC RAYVEN G.
SIMON, TRISHA MAE N.
VALENCIA, NIKKA JOY V.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Second Page</title>
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
<?php
    $date = $_POST["date"];
    $na = $_POST["na"];
    $ca = $_POST["ca"];

?>
<body>
    <form action="third_page.php" method="POST">
    <div class="container">
    <center><h3>STUDENT'S PERSONAL INFORMATION</h3></center><br>
    <input type="hidden"name="date" value="<?php echo $date;?>">
    <input type="hidden"name="na" value="<?php echo $na;?>">
    <input type="hidden"name="ca" value="<?php echo $ca;?>">
    <div class="picture">
        <h4>Please Attached Photo (1x1):
        <br><input type="file" name="pic"></h4>
    </div>
    <h4>NAME:</h4>
    <div class="name">
    <h4>LAST NAME: <input type="text" name="ln" placeholder="Last Name" required>
    FIRST NAME: <input type="text" name="fn" placeholder="First Name" required>
    MIDDLE NAME: <input type="text" name="mn" placeholder="Middle Name" required></h4>
    </div>
    <div class="ba">
    <h4>Birthdate: <input type="date"name="bd" required>
    Age: <input type="text"name="age" placeholder="Age" required>
    Gender:
    <select name="gen" id="">
        <option value="">-Select-</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    Civil Status:
    <select name="cs" id="">
        <option value="">-Select-</option>
        <option value="Single">Single</option>
        <option value="Married">Married</option>
    </select></h4>
    </div>
    <div class="pnr">
    <h4>
        Place of Birth: <input type="text"name="pb" placeholder="Place of Birth" required>
        Nationality: <input type="text"name="ny" placeholder="Nationality" required>
        Religion: <input type="text"name="rn" placeholder="Religion" required>
    </h4>
    <div class="me">
    <h4>
        Mobile Phone No. <input type="text"name="mobilenum" placeholder="Number" required>
        Email Address: <input type="email"name="email" placeholder="Email Address" required>
    </h4>
    </div>
    <div class="add">
        <h4>
            Complete Residence Address: <input type="text"name="resadd" required>
            School Last Attended/Address: <input type="text"name="schadd" required><br><br>
            Honors/ Awards Received: <input type="text"name="awards" required><br>
        </h4>
    </div>
    <div class="fmn">
    <h4>
        Father's Name: <input type="text"name="fathername" required>
        Occupation: <input type="text"name="fatheroccu" required>
    </h4>
    <h4>
        Mother's Name: <input type="text"name="mothername" required>
        Occupation: <input type="text"name="motheroccu" required>
    </h4>
    <h4>
        Name of Guardian: <input type="text"name="ng" required>
        Contact No. <input type="text"name="contactnum" required>
    </h4>
    </div>
    <h4>Income Bracket of Parents/Guardian Per Year: (Pls select)</h4>
        <div class="salary">
            <select name="salary" id="">
                <option value="">-Select-</option>
                <option value="not more than 100k">not more than 100k</option>
                <option value="not more than 200k">not more than 200k</option>
                <option value="not more than 300k">not more than 300k</option>
                <option value="not more than 400k">not more than 400k</option>
                <option value="not more than 500k">not more than 500k</option>
                <option value="not more than 600k">not more than 600k</option>
            </select>
        </div>
        <div class="sign">
            <input type="text"name="sig" required>
            <b><p>Student's Signature Overprinted Name</p></b>
        </div>
        <br>
        <p>
            <b>Student Undertaking/Data Consent:</b> I hereby warrant that the above personal information given are true, correct and updated to the 
    best of my knowledge. I also authorize and agreed to the University’s terms and condition on the provision stipulated in the ERS on the 
    collection, use, processing and disclosure of my personal data in accordance with Data Privacy Act of 2012 (RA 10173).
        </p>
        <br>
        <div class="next">
            <input type="submit" name="next" value="Next">
        </div>
        <div class="back">
            <button onclick="goBack()">Back</button>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back(-1);
        }
    </script>
    </div>
    </div>
    </form>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>