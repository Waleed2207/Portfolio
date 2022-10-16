<?php
 include 'db.php'; 
?>
<?php
  $query= "SELECT * FROM protfolio_waleed";
  $result = mysqli_query($connection, $query);
  if(!$result) {
     die("DB query failed.");
  }

?>
<?php
  $queryPopUp= "SELECT * FROM protfolio_waleed";
  $resultPopUp= mysqli_query($connection, $queryPopUp);
  if(!$resultPopUp) {
     die("DB query failed.");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Waleed Johjah</title>
  <!-- Favicons -->
  <link href="assets/img/favicon2.png" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">  
  <!-- =======================================================
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     
</head>
<body>
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/waleed.jpeg" alt="" class="img-fluid1 rounded-circle">
        <h1 class="text-light"><a href="index.html">Waleed Johjah</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://www.facebook.com/waled.jhjah" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/waleed_johjah" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/waleed-johjah-929803222/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#My Work" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Projects</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
   <h1>Waleed Johjah</h1>
    <div class="hero-container" data-aos="fade-in">
      <p>I'm <span class="typed" data-typed-items="a Software Engineering Student"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/waleed.jpeg" class="img-fluid1" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Sowftware Engineer Student</h3>
            <p class="fst-italic">
               B.Sc Software Engineering Student at Shenkar | Graduate of Practical Software Engineer
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>22 July 1999</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>0527016458</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Arara, Israel</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>23</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Study:</strong> <span>B.Sc. Software Engineering in Shenkar</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>E-mail:</strong> <span>waleedjohjah@gmail.com</span></li>
                </ul>
              </div>
            </div>
            <p> 
              Highly motivated and enjoys independent learning, developing and learning new things, responsible, independent, self-taught and fast learning.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Programming languages</h2>
          <p>Knowledge of programming languages and skills for Frontend & Backend.</p>
        </div>
        <div class="row skills-content">
          <div class="col-lg-6" data-aos="fade-up">
            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">C<i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">C++ <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JAVA<i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">C#<i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Python<i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Assembly<i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Waleed johjah</h4>
              <p><em>I'm a Freelancer Full Stack and mobile Developer with 2+ years of experience websites and an applications.</em></p>
              <ul>
                <li>Arara 6524, Israel</li>
                <li>(+972) 52-7016458</li>
                <li>waleedjohjah@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
            <h5>2014 - 2017</h5>
              <h4>high school diploma</h4>
              <p><em>Specialized in Mathematics, Physics and Sciences</em></p>
              <h5>2018 - 2020</h5>
              <h4>Practical Software Engineer</h4>
              <p><em>About my final project I developed an Reporting app For Report the hotline to the municipality in java & C#.</em>
              <p><em>I graduated with honors with GPA (95).</em>
              </p>
              <h5>2021 - Present</h5>
              <h4>B.Sc Software Engineering </h4>
              <p><em> Student at Shenkar college specialization in Full-stack.</em></p>
              <p><em> (Graduating in 2024).</em></p>

            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Experience</h3>
            <div class="resume-item">
              <h4>WMS System Administration</h4>
              <h5>2020 - 2021</h5>
              <p><em>Control and administer warehouse operations from the time goods or materials enter a warehouse until they move out.</em></p>
              <ul>
                <li>Transport manager and planner system.</li>
                <li> distribution routes planner.</li>
                <li> POD for shipping tasks.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Web Developer</h4>
              <h5>2021 - Present</h5>
              <p><em>Freelancer Web Developer in HTML, CSS, JAVASCRIPT, PHP</em></p>
              <ul>
                <li>Build an application and websits per request.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
      <div class="text-center1"><button onclick="window.open('waleedjohjah_cv.pdf')"><i class="fa-solid fa-download"></i>&nbsp;Resume</button></div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio" class="portfolio section-bg">
      <div class="container">
        <div class="section-title">
          <h2>My Projects</h2>
        </div>
        <section class="page-section bg-light" id="My Work">
          <div class="container">
              <div class="row">
                  <?php
                    while($row = mysqli_fetch_assoc($result)) { //results are in associative array.
                      $project_id = $row["project_id"];
                      $project_name = $row["project_name"];
                      $project_description = $row["project_description"];
                      $programming_language = $row["programming_language"];
                      $project_pic = $row["project_pic"];
                      $github = $row["github"];
                      echo    '<div class="col-lg-4 col-sm-6 mb-4">';
                      echo        '<div class="portfolio-item">';
                      echo                '<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal'.$project_id.'">';
                      echo                    '<img class="img-fluid" src="'.$project_pic.'" alt="'.$project_name.'" /></a>';
                      echo                '<div class="portfolio-caption">';
                      echo                   ' <div class="portfolio-caption-heading">'.$project_name.'</div>';
                      echo                '</div>';
                      echo       ' </div>';
                      echo    '</div>';

                  }?>
                  
              </div>  
          </div>
      </section><!-- End Portfolio Section -->
      <!--pop ups-->
      <?php
              while($row = mysqli_fetch_assoc($resultPopUp)) { //results are in associative array.
                      $project_id = $row["project_id"];
                      $project_name = $row["project_name"];
                      $project_description = $row["project_description"];
                      $programming_language = $row["programming_language"];
                      $github = $row["github"];
                      $project_pic = $row["project_pic"];
                      echo    '<div class="portfolio-modal modal fade" id="portfolioModal'.$project_id.'" tabindex="-1" role="dialog" aria-hidden="true">';
                      echo        '<div class="modal-dialog">';
                      echo            '<div class="modal-content">';
                      echo              '<div class="close-modal" data-bs-dismiss="modal"><i class="material-icons">&#xE5CD;</i></div>';
                      echo                 '<div class="container">';
                      echo                     '<div class="row justify-content-center">';
                      echo                         '<div class="col-lg-8">';
                      echo                            '<div class="modal-body">';
                      echo                                '<h2 class="portfolio-caption-heading">'.$project_name.'</h2>';
                      echo                                '<p class="item-intro text-muted">'.$programming_language.'</p>';
                                                        if($project_id==1){
                      echo                                '<img class="img-fluid1 d-block mx-auto popUpPic"  src="assets/img/dogss.png" alt="'.$project_name.'" />';
                                                        }
                                                        elseif($project_id==2){
                      echo                                '<img class="img-fluid1 d-block mx-auto popUpPic"  src="assets/img/glases.png" alt="'.$project_name.'" />';
                                    
                                                        }
                                                        else{
                      echo                                '<img class="img-fluid1 d-block mx-auto popUpPic"  src="assets/img/repoting catigory.jpeg" alt="'.$project_name.'" />';
                                                          
                                                        } 
                      echo                                '<p>'.$project_description.'</p>';
                      echo                                '<ul class="list-inline">';
                      echo                                    '<li>';
                      echo                                        '<a href="'.$github.'" target="_blank">Github</a>';
                      echo                                    '</li>';
                      echo                                '</ul>';
                                                          if($project_id==1)
                                                          {
                      echo                                '<ul class="list-inline">';
                      echo                                    '<li>';
                      echo                                        '<a href="http://se.shenkar.ac.il/students/2021-2022/web1/dev_207/login.php" target="_blank">link</a>';
                      echo                                    '</li>';
                      echo                                '</ul>';
                                                          }
                      echo                            '</div>';
                      echo                        '</div>';
                      echo                    '</div>';
                      echo                '</div>';
                      echo            '</div>';
                      echo        '</div>';
                      echo    '</div>';

              }
              ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
   </div>
   
</section>

   


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>6524, ערערה, ישראל</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>waleedjohjah@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+972 52-7016458</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13459.696313643417!2d35.10188126043688!3d32.50145829388204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d069a51de2d1d%3A0x524228c6b075f6b3!2z16LXqNei16jXlCwg15nXqdeo15DXnA!5e0!3m2!1siw!2sbg!4v1664292458826!5m2!1siw!2sbg" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="https://formspree.io/f/xwkzojbr"  method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>

<?php
 //close DB connection
    mysqli_close($connection);
?>