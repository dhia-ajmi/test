<?php
    include_once '../../Model/Rendez_vous.php';
    include_once '../../Controller/Rendez_vousC.php';

    $error = "";
    $success = 0;
    // create user
    $rendez_vous = null;

    // create an instance of the controller
    $rendez_vousC = new Rendez_vousC();
    if (isset($_POST["CIN_Etudiant"])&& isset($_POST["email"]) && isset($_POST["Description_rv"]))
    
    {
        if (!empty($_POST["CIN_Etudiant"])  && !empty($_POST["Description_rv"]) && !empty($_POST["email"]) )
         {
            $rendez_vous = new Rendez_vous(
                $_POST['CIN_Etudiant'],
                $_POST['email'],
                $_POST['Description_rv'],

            );
            $rendez_vousC->ajouter_rendez_vous($rendez_vous); 
            $success = 1;
        } else {
            $error = "Missing information";
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>

     <title>Students Communication Platform</title>
     <link rel="shortcut icon" href="images/favicon.png" type="">
     
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
<!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.html">Com Plat</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">Classes</a>
                    </li>

                    <li class="nav-item">
                        <a href="#schedule" class="nav-link smoothScroll">Schedules</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Prenez Un Rendez Vous</a>
                    </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div>

        </div>
    </nav>


     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300">new way to build a healthy lifestyle!</h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Upgrade your body at Gymso Fitness</h1>

                                    <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Get started</a>

                                    <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">learn more</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">New to the gymso?</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Your membership is up to 2 months FREE ($62.50 per month)</h6>

                    <p data-aos="fade-up" data-aos-delay="200">Gymso is free HTML template by <a rel="nofollow" href="https://www.tooplate.com" target="_parent">Tooplate</a> for your commercial website. Bootstrap v4.2.1 Layout. Feel free to use it.</p>

                    <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#membershipForm">Become a member today</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Working hours</h2>

                               <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Sunday : Closed</strong>

                               <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Monday - Friday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">7:00 AM - 10:00 PM</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Saturday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">6:00 AM - 4:00 PM</p>
                               </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
    </section>


     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, we are Gymso</h2>

                                <p data-aos="fade-up" data-aos-delay="400">You are NOT allowed to redistribute this HTML template downloadable ZIP file on any template collection site. You are allowed to use this template for your personal or business websites.</p>

                                <p data-aos="fade-up" data-aos-delay="500">If you have any question regarding <a rel="nofollow" href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">Gymso Fitness HTML template</a>, you can <a rel="nofollow" href="https://www.tooplate.com/contact" target="_parent">contact Tooplate</a> immediately. Thank you.</p>

                            </div>

                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img src="images/team/team-image.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Mary Yan</h3>
                                        <span>Yoga Instructor</span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                                <div class="team-thumb">
                                    <img src="images/team/team-image01.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Catherina</h3>
                                        <span>Body trainer</span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- CLASS -->
     <section class="class section" id="class">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                                <h6 data-aos="fade-up">Get A Perfect Body</h6>

                                <h2 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h2>
                             </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="images/class/yoga-class.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Yoga</h3>

                                        <span><strong>Trained by</strong> - Bella</span>

                                        <span class="class-price">$50</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                                <div class="class-thumb">
                                    <img src="images/class/crossfit-class.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Areobic</h3>

                                        <span><strong>Trained by</strong> - Mary</span>

                                        <span class="class-price">$66</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="images/class/cardio-class.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Cardio</h3>

                                        <span><strong>Trained by</strong> - Cathe</span>

                                        <span class="class-price">$75</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- SCHEDULE -->
     <section class="schedule section" id="schedule">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center">
                                <h6 data-aos="fade-up">our weekly GYM schedules</h6>

                                <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Workout Timetable</h2>
                             </div>

                             <div class="col-lg-12 py-5 col-md-12 col-12">
                                 <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">

                                     <thead class="thead-light">
                                         <th><i class="fa fa-calendar"></i></th>
                                         <th>Mon</th>
                                         <th>Tue</th>
                                         <th>Wed</th>
                                         <th>Thu</th>
                                         <th>Fri</th>
                                         <th>Sat</th>
                                     </thead>

                                     <tbody>
                                         <tr>
                                            <td><small>7:00 am</small></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                            <td>
                                                <strong>Power Fitness</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <strong>Yoga Section</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>9:00 am</small></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                            <td>
                                                <strong>Areobic</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>11:00 am</small></td>
                                            <td></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>11:00 am - 2:00 pm</span>
                                            </td>
                                            <td>
                                                <strong>Areobic</strong>
                                                <span>11:30 am - 3:30 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Body work</strong>
                                                <span>11:50 am - 5:20 pm</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>2:00 pm</small></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>2:00 pm - 4:00 pm</span>
                                            </td>
                                            <td>
                                                <strong>Power lifting</strong>
                                                <span>3:00 pm - 6:00 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>6:00 pm - 9:00 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Crossfit</strong>
                                                <span>5:00 pm - 7:00 pm</span>
                                            </td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>

                    </div>
               </div>
     </section>


     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Prendez un rendez-vous</h2>

                        <form name="f"action="" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            
                            <div>
                                 <label for="CIN_Etudiant">CIN de l'étudiant : </label>
                                 <input  id="CIN" class="form-control" maxlength="8" placeholder="01234567" name="CIN_Etudiant" required>
                                 <p id="demo"></p>                                   
                            </div>
                            <!--
                            <div>
                                 <label for="Emplacement">Emplacement</label> <br> </br>
                                 <input type="radio"  name="Emplacement" value="Ghazela" checked> Technopole Ghazela <br> </br>
                                 <label for="Emplacement"></label>
                                 <input type="radio"  name="Emplacement" value="Charguia" > Charguia <br> </br>
                            </div>

                            <input  id="CIN" class="form-control"  placeholder="01234567" name="CIN_Etudiant" required>
                            <p id="demo"></p>
                            <button type="button" onclick="myFunction()">Submit</button>
                            -->



                            <div>
                                 <label for="email">Email de l'étudiant : </label>
                                 <input type="email" class="form-control" id="email_e" name="email" placeholder="email@exemple.tn">

                                 <p id="demo_2"></p>



                                 <label for="description_rendez_vous">Description</label>
                                 <textarea class="form-control" rows="5" name="Description_rv" placeholder="Décrire brièvement le sujet"></textarea>
                            </div>
                           
                            <button type="button" class="form-control" onclick="myFunction2();myFunction();">Verifier vos données</button>

                            <button type="submit" class="form-control" id="submit-button-rv"  name="submit">Envoyer la demande</button>
                        </form>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Contacter nous<span>  </span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i>  1, 2 rue André Ampère - 2083 - Pôle Technologique - El Ghazala.</p>
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4577.92302007713!2d10.187348821246157!3d36.89821631200693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb745e5c6f1b%3A0xf69a51ee3c65c12e!2sEsprit%20School%20of%20Business!5e0!3m2!1sfr!2stn!4v1637237716632!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text">Copyright &copy; 2021 Websters
                        
                       
                    </div>

                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="#">contact@esprit.tn</a>
                        </p>

                        <p><i class="fa fa-phone mr-1"></i> 70 250 000</p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <!-- Modal -->
   

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>


<script >
var b =document.getElementById("mybtn")

b.addEventListener("CLICK",myFunction() { alert ('WRONG') } ) ;
</script>

<script>
function myFunction() {
  // Get the value of the input field with id
  let x = document.getElementById("CIN").value;
  // If x is Not a Number or less than one or greater than 10
  let text;
  if (isNaN(x) || x < 10000000 || x > 99999999) {
    text = "Input not valid";
  } else {
    text = "Input OK";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>

<script>
function myFunction2() {
  // Get the value of the input field with id
  let x = document.getElementById("email_e").value;
  // If x is Not a Number or less than one or greater than 10
  let text;
  if (x.indexOf('@esprit.tn')==-1){
    text = "Input not valid";
  } else {
    text = "Input OK";
  }
  document.getElementById("demo_2").innerHTML = text;
}
</script>

</body>
</html>