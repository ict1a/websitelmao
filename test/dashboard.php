<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Eclaro Academy</title>
   <link rel="icon" href="icon.jpeg" type="image/x-icon">
   <link rel="stylesheet" href="new.css">

</head>

<body class="square">
   <header class="l-navbar" id="nav-bar">
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
   <h1>Hello <?php echo $_SESSION['name']; ?> </h1>
   <table border="1" class=table>
      <thead>
         <tr>
            <th>Full Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Civil Status</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Nationality</th>
            <th>Religion</th>
            <th>Place of Birth</th>
            <th>Residence Address</th>
            <th>Birth Date</th>
            


         </tr>
      </thead>
      <tbody>
         <?php
            $connect=mysqli_connect('localhost','root','','test_db') or die('Cannot connect to the database');
            $query="SELECT u. *, si.email AS student_email, si.fn, si.mn, si.ln, si.bd, si.resadd, si.mobilenum, si.cs, si.ny, si.gen, si.rn, si.pb FROM users u JOIN tbl_student_information si ON u.id = si.user_id WHERE u.id = {$_SESSION['id']}";
            $result=mysqli_query($connect,$query);
            if(mysqli_num_rows($result) > 0){
               while($row=mysqli_fetch_assoc($result))
               {
         ?>
               <tr>
                  <td><?php echo $row['ln'] . ', ' . $row['fn'] . ' ' . $row['mn']; ?></td>
                  <td><?php echo $row['fn']; ?></td>
                  <td><?php echo $row['mn']; ?></td>
                  <td><?php echo $row['ln']; ?></td>
                  <td><?php echo $row['cs']; ?></td>
                  <td><?php echo $row['mobilenum']; ?></td>
                  <td><?php echo $row['student_email']; ?></td>
                  <td><?php echo $row['gen']; ?></td>
                  <td><?php echo $row['ny']; ?></td>
                  <td><?php echo $row['rn']; ?></td>
                  <td><?php echo $row['pb']; ?></td>
                  <td><?php echo $row['resadd']; ?></td>
                  <td><?php echo $row['bd']; ?></td>
               </tr>
         <?php
               }
            }
         ?>
      </tbody>
   </table>

<?php 
} else {
     header("Location: index.php");
     exit();
}
?>
</body>
</html>
