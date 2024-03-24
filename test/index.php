<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header id="main-header">
    <a href="home.php">
        <h2 class="logo"></h2>
    </a>
    <nav class="navigation">
          <a href="index.html">Home</a> 
          <a href="first_page.php">Enroll</a>
          <a href="contact.php">Contact Us</a>
          <a href="login.php">Log In</a>
    </nav>
</header>

     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email
     	<input type="text" name="email" placeholder="Email" autocomplete="Email"><br>
         </label>
     	<label>Password
     	<input type="password" name="password" placeholder="Password"><br>
         </label>
     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>