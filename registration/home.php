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
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Eclaro Academy</title>
   <link rel="icon" href="icon.jpeg" type="image/x-icon">
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
          <button class="btnLogout-popup" onclick="logoutBtn()">Log out</button>
       </nav>
   </header>
   <main id="main" style="position: absolute; bottom: -450%; overflow-y: auto;">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services" >
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <body style="background-color: rgb(214, 214, 211)">
          <h2>About Our School</h2>
          <p>ECLARO ACADEMY IS AN INNOVATIVE, DIGITALLY FOCUSED LEARNING FACILITY WITH A STUDENT-CENTERED INSTRUCTIONAL STYLE. THE SCHOOL BELIEVES IN THE PROGRESSIVE LEARNING PHILOSOPHY, WHICH STRESSES EXPLORATION, CREATIVITY, KNOWLEDGE CONSTRUCTION, AND GENUINE CONCERN FOR THE STUDENT'S EXPERIENCE, ALLOWING EVERY ECLARO ENROLLEE TO CREATE A COMPREHENSIVE PERSONALITY.</p>
        </div>
        <!--mision-vison-corevalues-->
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <i class="bx bx-file"></i>
            </div>
            <h4><a href="">MISSION</a></h4>
            <p>To transform the knowledge, skills, and attitudes of learners in order to become holistic individual and useful members of a fast-changing global community.
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <i class="bx bx-file"></i>
            </div>
            <h4><a href="">VISION</a></h4>
            <p>To be among Asia's top academic institution committed to nurture innovative learners and develop excellent leaders through technology- oriented, environmentally-sound, and globally competitive education.
          </div>
        </div>
        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <i class="bx bx-file"></i>
            </div>
            <h4><a href="">CORE VALUES</a></h4>
            <p>INTEGRITY
              <p>SERVICES
                <p>EFFECTIVENESS
                  <p>EMPATHY



          </div>
        </div>
        <!--ECLARO HYMN-->
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <i class="bx bx-file"></i>
            </div>
            <h4><a href="">ECLARO HYMN</a></h4>
            <p>Lead, lead us forward Eclaro Towards enlightenment we aim Your guiding light give us the power World-class education, we proclaim!

              (Chorus)
              
              Eclaro, hold high your flag Symbol of honor and truth Let it fly for us to see! Proud sons and daughters we all are In the quest for knowledge unified We trust that you're always there to guide!
              
              To your values and standards Our heads we bow so gratefully We'll keep alive all the values you teach You ever priceless legacy!
              
              (Chorus)
              
              Eclaro, hold high your flag Symbol of honor and truth Let it fly for us to see! Proud sons and daughters we all are In the quest for knowledge unified We trust that you're always there to guide!
              
              Eclaro. Eclaro. Eclaro
          </div>
        </div>
        <!--strand offering-->

        <div class="section-title">
          <h2>STRAND OFFERED</h2>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="">STEM</a></h4>
              <p>The (STEM) strand is an inquiry and research-based program for Senior High School. The learners are inclined to researches which will give them the edge to become excellent in the pursuit of their college degrees.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">HUMSS</a></h4>
              <p>(HUMS) is short for humanities and social sciences. It is an academic strand covering various fields that deal with the exploration of the human condition using analytical, critical, and empirical ways - and thereby studying changes in society and human behavior.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">GAS</a></h4>
              <p>General Academic Strand (GAS) caters students who are not yet sure of what course or degree they want to take in college. This strand was designed so that indecisive learners can proceed with any college program.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="">ABM</a></h4>
              <p>The Accountancy, Business and Management (ABM) strand would focus on the basic concepts of financial management, business management, corporate operations, and all things that are accounted for.

              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="">ICT</a></h4>
              <p>Information Communication and Technology or (ICT) Strand is one of the strands offered under Technical-Vocational Livelihood (TVL) Track of K-12 curriculum. ICT strand subjects seek to teach students concepts and skills in information technology.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="">HE</a></h4>
              <p>The Home Economics track (HE) offers various specializations that can lead to livelihood projects at home. This strand aims to give you job-ready skills that can help you in finding the right employment.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ruz</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End  Footer -->
   
      

   
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