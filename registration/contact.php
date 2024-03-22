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
   <link rel="stylesheet" href="contact.css">

</head>

<body>
   <header>
      <a href="index.html">
         <h2 class="logo"></h2>
     </a>
     <nav class="navigation">
        <a href="home.php">Home</a>
        <a href="enrollment.php">Enroll</a>
        <a href="contact.php">Contact Us</a>
        <button class="btnLogout-popup" onclick="logoutBtn()">Log out</button>
     </nav>
   </header>
 <!-- ======= Contact Section ======= -->
 <div class="row" id="contatti">
  <div class="container mt-5">
      <div class="row" style="height:550px;">
          <div class="col-md-6 maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.7130670210263!2d121.07542977542028!3d14.672218185822695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b756351a3f15%3A0x56445465451cc094!2sEclaro%20Academy!5e0!3m2!1sen!2sph!4v1710842360745!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-md-6">
              <h2 class="text-uppercase mt-3 font-weight-bold text-white">Contact Us</h2>
              <form action="email-validation.php" method="post">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="form-group">
                              <input type="text" name="name" class="form-control mt-2" placeholder="Name/Company" required>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <input type="text" name="subject" class="form-control mt-2" placeholder="Subject" required>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <input type="email" name="email" class="form-control mt-2" placeholder="Email" required>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <input type="tel" name="phone" class="form-control mt-2" placeholder="Phone" required>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="messageemail">
                              <input type="text" name="message" class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Message" rows="3" required>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-group">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                  <label class="form-check-label" for="invalidCheck2">
                                      Accept the terms and conditions
                                  </label>
                              </div>
                          </div>
                      </div>
                      <div class="col-12">
                          <button class="btn btn-light" type="submit">Submit</button>
                      </div>
                  </div>
              </form>
              <div class="text-white">
                  <h2 class="text-uppercase mt-4 font-weight-bold">Where We Are</h2>
                  <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+39) 123456</a><br>
                  <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+39) 123456</a><br>
                  <i class="fa fa-envelope mt-3"></i> <a href="">info@test.it</a><br>
                  <i class="fas fa-globe mt-3"></i> Piazza del Colosseo, 1, 00184 Roma<br>
                  <i class="fas fa-globe mt-3"></i> Piazza del Colosseo, 1, 00184 Roma<br>
                  <div class="my-4">
                      <a href=""><i class="fab fa-facebook fa-3x pr-4"></i></a>
                      <a href=""><i class="fab fa-linkedin fa-3x"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script src="script.js"></script>
</body>
</html>


<?php 
}else{
     header("Location: index.html");
     exit();
}
 ?>