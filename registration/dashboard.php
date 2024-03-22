<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>
   <link rel="icon" href="icon.jpeg" type="image/x-icon">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="new.css">
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/system/css/system.min.css" rel="stylesheet">
  <link href="assets/vendor/google-icons/google-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

</head>

<body>
   <header>
      <a href="index.html">
         <h2 class="logo"></h2>
     </a>
       <nav class="navigation">
       <a href="dashboard.php">Account</a>
          <a href="home.php">Home</a>
          <a href="enrollment.php">Enroll</a>
          <a href="contact.html">Contact Us</a>
          <a href="logout.php">Logout</a>
       </nav>
       <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}