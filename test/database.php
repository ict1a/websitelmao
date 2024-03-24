<?php
session_start();

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "test_db";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$date = $_POST["date"];
$na = $_POST["na"];
$ca = $_POST["ca"];
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
$sig = $_POST["sig"];
$fathername = $_POST["fathername"];
$fatheroccu = $_POST["fatheroccu"];
$mothername = $_POST["mothername"];
$motheroccu = $_POST["motheroccu"];
$ng = $_POST["ng"];
$contactnum = $_POST["contactnum"];
$salary = $_POST["salary"];
$user_id = $_SESSION["id"];

$errors=array();
// validate email address
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  array_push($errors,"Email is invalid");
}

$user_data = "ln=" . $ln . "&fn=" . $fn . "&mn=" . $mn . "&bd=" . $bd . "&age=" . $age . "&gen=" . $gen . "&cs=" . $cs . "&pb=" . $pb . "&ny=" . $ny . "&rn=" . $rn;

if (empty($ln)) {
    header("Location: second_page.php?error=Last+Name+is+required&" . $user_data);
    exit();
} else if (empty($fn)) {
    header("Location: second_page.php?error=First+Name+is+required&" . $user_data);
    exit();
} else if (empty($mn)) {
    header("Location: second_page.php?error=Middle+Name+is+required&" . $user_data);
    exit();
} else if (empty($bd)) {
    header("Location: second_page.php?error=Birthdate+is+required&" . $user_data);
    exit();
} else if (empty($age)) {
    header("Location: second_page.php?error=Age+is+required&" . $user_data);
    exit();
} else if (empty($cs)) {
    header("Location: second_page.php?error=Civil+Status+is+required&" . $user_data);
    exit();
} else if (empty($pb)) {
    header("Location: second_page.php?error=Place+of+Birth+is+required&" . $user_data);
    exit();
} else if (empty($ny)) {
    header("Location: second_page.php?error=Nationality+is+required&" . $user_data);
    exit();
}

$stmt = $conn->prepare("SELECT * FROM tbl_student_information WHERE ln=? AND fn=? AND mn=? AND age=? AND user_id=? AND mobilenum=? AND email=? AND bd=?");
$stmt->bind_param("sssisiis", $ln, $fn, $mn, $age, $user_id, $mobilenum, $email, $bd);
$result = $stmt->execute();
$result =$stmt->get_result();
$row = $result->fetch_assoc();

if (mysqli_num_rows($result) > 0) {
    header("Location: first_page.php?error=You are already enrolled&" . $user_data);
    exit();
} else {
    $sql = "INSERT INTO tbl_student_information (ln, fn, mn, bd, age, gen, cs, pb, ny, rn, mobilenum, email, resadd, schadd, awards, sig, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssisssssssssssi", $ln, $fn, $mn, $bd, $age, $gen, $cs, $pb, $ny, $rn, $mobilenum, $email, $resadd, $schadd, $awards, $sig, $user_id);
    $result = $stmt->execute();
    
}

$sql = "INSERT INTO tbl_admission (date, na, ca) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $date, $na, $ca);
$result = $stmt->execute();

$sql = "INSERT INTO tbl_guardian (fathername, fatheroccu, mothername, motheroccu, ng, contactnum, salary) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssisi", $fathername, $fatheroccu, $mothername, $motheroccu, $ng, $contactnum, $salary);
$result = $stmt->execute();

if ($result) {
    header("Location: dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>