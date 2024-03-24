<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Third Page</title>
</head>
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
    $pic = $_POST["pic"];
    $ln = $_POST["ln"];
    $fn = $_POST["fn"];
    $mn = $_POST["mn"];
    $bd = $_POST["bd"];
    $age = $_POST["age"];
    $gen = $_POST["gen"];
    $cs = $_POST["cs"];
    $pb = $_POST["pb"];
    $ny = $_POST["ny"];
    $rn = $_POST["rn"];
    $mobilenum = $_POST["mobilenum"];
    $email = $_POST["email"];
    $resadd = $_POST["resadd"];
    $schadd = $_POST["schadd"];
    $awards = $_POST["awards"];
    $fathername = $_POST["fathername"];
    $fatheroccu = $_POST["fatheroccu"];
    $mothername = $_POST["mothername"];
    $motheroccu = $_POST["motheroccu"];
    $ng = $_POST["ng"];
    $contactnum = $_POST["contactnum"];
    $salary = $_POST["salary"];
    $sig = $_POST["sig"];
    
?>
<body>
    <div class="container">
        <form action="result_page.php" method="POST">
            <input type="hidden"name="date" value="<?php echo $date;?>">
            <input type="hidden"name="na" value="<?php echo $na;?>">
            <input type="hidden"name="ca" value="<?php echo $ca;?>">
            <input type="hidden"name="pic" value="<?php echo $pic;?>">
            <input type="hidden"name="ln" value="<?php echo $ln;?>">
            <input type="hidden"name="fn" value="<?php echo $fn;?>">
            <input type="hidden"name="mn" value="<?php echo $mn;?>">
            <input type="hidden"name="bd" value="<?php echo $bd;?>">
            <input type="hidden"name="age" value="<?php echo $age;?>">
            <input type="hidden"name="gen" value="<?php echo $gen;?>">
            <input type="hidden"name="cs" value="<?php echo $cs;?>">
            <input type="hidden"name="pb" value="<?php echo $pb;?>">
            <input type="hidden"name="ny" value="<?php echo $ny;?>">
            <input type="hidden"name="rn" value="<?php echo $rn;?>">
            <input type="hidden"name="mobilenum" value="<?php echo $mobilenum;?>">
            <input type="hidden"name="email" value="<?php echo $email;?>">
            <input type="hidden"name="resadd" value="<?php echo $resadd;?>">
            <input type="hidden"name="schadd" value="<?php echo $schadd;?>">
            <input type="hidden"name="awards" value="<?php echo $awards;?>">
            <input type="hidden"name="fathername" value="<?php echo $fathername;?>">
            <input type="hidden"name="fatheroccu" value="<?php echo $fatheroccu;?>">
            <input type="hidden"name="mothername" value="<?php echo $mothername;?>">
            <input type="hidden"name="motheroccu" value="<?php echo $motheroccu;?>">
            <input type="hidden"name="ng" value="<?php echo $ng;?>">
            <input type="hidden"name="contactnum" value="<?php echo $contactnum;?>">
            <input type="hidden"name="salary" value="<?php echo $salary;?>">
            <input type="hidden"name="sig" value="<?php echo $sig;?>">
            
            <hr><hr>
            <table class="bottom">
                <tr>
                    <div class="left">
                    <th>
                        <b><i>(To be accomplished by SH/DH)</i></b><br>
                        <b>RESULT OF ADMISSION INTERVIEW QUESTIONNAIRE / EVALUATION:
                        <input type="text"name="eval"><br><br>
                        Section/Department Head <input type="text"name="depthead">
                        <br>Date <input type="date"name="dt">
                        <hr><hr>
                        <b><i>(To be accomplished by Medical Clinic Staff)</i></b>
                        <p>Received Accomplished Student's Health Declaration</p><br>
                        Clinic Staff <input type="text"name="clinic"> Date <input type="date"name="dte">
                    </div>
                    </th>
                    <div class="right">
                    <th>
                        <b>LIST OF REQUIREMENTS TO BE SUBMITTED:</b><br>
                        <b>A. FOR FRESHMEN (ALS/SHS/HS Graduates)</b>
                    </div>
                    <div class="right1">
                            <p>1.Original & Photocopy of SHS Card (Grade 11 & 12)<br>
                            ALS Certificate (if Applicable)<br>
                            Certificate of Undertaking (if applicable)<br>
                            2. Original & Photocopy of GMC (Issued 2020)<br>
                            3. PSA Birth Certificate (Photocopy)<br>
                            4. Accomplished Admission Form , Interview Questionnaire,<br>
                            and Student's Health Declaration<br><br>
                            <b>B. TRANSFEREES</b><br>
                            1. Official Transcript of Records (Original & Photocopy)<br>
                            2. Certificate of Transfer Credential (Original copy)<br>
                            3. Items 2-4 in the above list</p><br>
                    </div>
                    <div class="regline">
                            <input type="text" name="reg"><br>
                    </div>
                    <div class="regt">
                            Registrar Staff<br>
                    </th>
                    </div>
                </tr>
            </table>
            <br>
            <input type="submit" name="next" value="Next"><br><br>
            
    </div>
    <div class="back">
            <button onclick="goBack(-1)">Back</button>
        </div>

    <!-- JavaScript Function to Go Back -->
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
        </form>
    </div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>