<?php
date_default_timezone_set('Africa/Cairo');

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);




  if ( isset( $_POST ) && ! empty($_POST))
  {
    
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isMail();                                            // Set mailer to use SMTP
    $mail->Host       = 'localhost';  // Specify main and backup SMTP servers
    //Recipients
    $mail->setFrom('info@mga-coder.com', 'MGA Group');
    // Content
    $mail->addAddress('m.gamalayoub@gmail.com', 'MGA Group');
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mgs From My Site CV . MGA - Coder';
    $mail->Body    = '
      name : '.$_POST['name'].' <br>
      mail : '.$_POST['mail'].' <br>
      subject : '.$_POST['subject'].' <br>
      msg : '.$_POST['msg'].' <br>
      time : '.date('Y-m-d H:i:s').' <br>
    ';

    $mail->send();
    echo '<script>alert("Your Msg Has been sent successfully")</script>';
    echo '<meta http-equiv="refresh" content="0">';
  }
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- start handle page -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- end handle page -->
    <!-- start stylesheet files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- end stylesheet files -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/favicon-16x16.png">
    <link rel="manifest" href="assets/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>MGA Coder</title>
  </head>
  <body>
    <div  id="main-site">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12" id="info-left-section">
                  <div class="info theiaStickySidebar">
                      <div class="avatar text-center">
                          <img src="assets/images/avatar.png" class="img-responsive rounded" alt="">
                      </div>
                      <h2>Mohamed Gamal Ayoub</h2>
                      <h4>Full Stack Web Developer</h4>
                      <p style="display: none;">
                        <br>+8 years of practical experience in setting up new sites and developing existing projects <br>i can convert any idea or dream to realstic thing ;)</p>
                      <div class="row">
                        <div class="col"> <a href="https://fb.com/profile.php?id=100010961717547" target="_blank"> <i class="fab fa-facebook-f"></i> </a> </div>
                        <div class="col"> <a href="#" target="_blank"> <i class="fab fa-twitter"></i> </a> </div>
                        <div class="col"> <a href="#" target="_blank"> <i class="fab fa-linkedin-in"></i> </a> </div>
                        <div class="col"> <a href="#" target="_blank"> <i class="fab fa-github"></i> </a> </div>
                        <div class="col"> <a href="#" target="_blank"> <i class="far fa-envelope"></i> </a> </div>
                        <div class="col"> <a href="https://wa.me/201112293050" target="_blank"> <i class="fab fa-whatsapp"></i> </a> </div>
                        <div class="col"> <a href="tel:+201112293050" target="_blank"> <i class="fas fa-mobile-alt"></i> </a> </div>
                      </div>
                  </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12 p-0 right-side">
                      <!-- start portfolio -->
                      <div class="portfolio text-left top-links">
                          <a href="javascript:void(0)" class="see_myPortfolio btn btn-primary"> <i class="far fa-smile-beam"></i> See My Portfolio <i class="fas fa-long-arrow-alt-right"></i> </a>
                          <!-- start portfolio items section -->
                          <div class="main_content animated">
                            <!-- Page Content -->
                                <div class="container">
                                  <!-- Page Heading -->
                                  <h1 class="my-5">My Portfolio <small>some of Projects have been programmed before</small> </h1>
                                  <!-- Project One -->
                                  <div class="row item">
                                    <div class="col-md-5">
                                      <a href="#">
                                        <img class="img-fluid rounded mb-3 mb-md-0" src="assets/portfolio/1.png" alt="">
                                      </a>
                                    </div>
                                    <div class="col-md-7">
                                      <h3>TopPNG <small>Development and technical support</small></h3>
                                      <p>"<i>Download free PNG images</i>" This project was developed using the latest programming techniques in addition to technical support</p>
                                      <a class="btn btn-primary" href="https://toppng.com">View Project</a>
                                    </div>
                                  </div>
                                  <!-- /.row -->
                                  <!-- Project Two -->
                                  <div class="row item">
                                    <div class="col-md-5">
                                      <a href="#">
                                        <img class="img-fluid rounded mb-3 mb-md-0" src="assets/portfolio/2.png" alt="">
                                      </a>
                                    </div>
                                    <div class="col-md-7">
                                      <h3>BankLive <small>Programming from Scratch & Development</small></h3>
                                      <p>"<i>Currency Rates in Egypt</i>" Automated and scheduled robot programming to bring prices from banks' websites</p>
                                      <a class="btn btn-primary" href="https://banklive.net">View Project</a>
                                    </div>
                                  </div>
                                  <!-- /.row -->
                                  <!-- Project Three -->
                                  <div class="row item">
                                    <div class="col-md-5">
                                      <a href="#">
                                        <img class="img-fluid rounded mb-3 mb-md-0" src="assets/portfolio/3.png" alt="">
                                      </a>
                                    </div>
                                    <div class="col-md-7">
                                      <h3>MT . Technology Company<small>Programming from Scratch & Development</small></h3>
                                      <p>The website of <i>Maydany Technology</i> company that provides programming services and news content management</p>
                                      <a class="btn btn-primary" href="http://mt.com.eg">View Project</a>
                                    </div>
                                  </div>
                                  <!-- /.row -->
                                  <!-- Project four -->
                                  <div class="row item">
                                    <div class="col-md-5">
                                      <a href="#">
                                        <img class="img-fluid rounded mb-3 mb-md-0" src="assets/portfolio/4.png" alt="">
                                      </a>
                                    </div>
                                    <div class="col-md-7">
                                      <h3>Akafi . Industrial Company<small>Development and technical support</small></h3>
                                      <p>Development Akafi Industrial site that provides Offers buying and selling services for Arab industrialists and industrialists</p>
                                      <a class="btn btn-primary" href="https://akafi.net">View Project</a>
                                    </div>
                                  </div>
                                  <!-- /.row -->
                                  <!-- Project five -->
                                  <div class="row item">
                                    <div class="col-md-5">
                                      <a href="#">
                                        <img class="img-fluid rounded mb-3 mb-md-0" src="assets/portfolio/5.png" alt="">
                                      </a>
                                    </div>
                                    <div class="col-md-7">
                                      <h3>FAXx [CRM System] <small>Programming from Scratch & Development</small></h3>
                                      <p>created a complete system dealing with the affairs of companies that include employees, customers, suppliers, stores as well as invoices and bonds</p>
                                      <a class="btn btn-danger" href="javascript:void(0)">private</a>
                                    </div>
                                  </div>
                                  <!-- /.row -->
                                  <!-- Project six -->
                                  <div class="row item">
                                    <div class="col-md-5">
                                      <a href="#">
                                        <img class="img-fluid rounded mb-3 mb-md-0" src="assets/portfolio/7.png" alt="">
                                      </a>
                                    </div>
                                    <div class="col-md-7">
                                      <h3>AlyosrGroup<small>Programming from Scratch & Development</small></h3>
                                      <p>Personal Site for <i>Alyosr Group</i> For sifting and packing grain </p>
                                      <a class="btn btn-primary" href="https://alyosrgroup.com">View Project</a>
                                    </div>
                                  </div>
                                  <!-- /.row -->
                                  <!-- Project seven -->
                                  <div class="row item">
                                    <div class="col-md-5">
                                      <a href="#">
                                        <img class="img-fluid rounded mb-3 mb-md-0" src="assets/portfolio/8.png" alt="">
                                      </a>
                                    </div>
                                    <div class="col-md-7">
                                      <h3>Arab Canadian Academy<small>Programming from Scratch & Development</small></h3>
                                      <p>Personal Site for <i>Arab Canadian Academy</i> for advanced science , training and consultancy</p>
                                      <a class="btn btn-primary" href="http://arcaac.com">View Project</a>
                                    </div>
                                  </div>
                                  <!-- /.row -->
                                  <!-- Project six -->
                                  <div class="row item no-border m-0">
                                    <div class="col-md-5">
                                      <a href="#">
                                        <img class="img-fluid rounded mb-3 mb-md-0" src="assets/portfolio/6.png" alt="">
                                      </a>
                                    </div>
                                    <div class="col-md-7">
                                      <h3>i1MP3<small>Programming from Scratch & Development</small></h3>
                                      <p>Download videos from YouTube and convert it to mp3 with high quality</p>
                                      <a class="btn btn-primary" href="https://i1MP3.com">View Project</a>
                                    </div>
                                  </div>
                                  <!-- /.row -->
                                </div>
                                <!-- /.container -->
                          </div>
                          <!-- end portfolio items section -->
                      </div>
                      <!-- end portfolio-->
                      <!-- start Expertise section -->
                      <div class="expertise cv animated">
                          <h2 class="section-title"> <i class="fas fa-check"></i> Expertise</h2>
                          <div class="container">
                              <div class="row">
                                <div class="col-xl-6 col-xs-12">
                                  <h3> <i class="fas fa-coffee"></i> Web Development</h3>
                                  <p>I've an experience in building (simple/complex) projects With the latest programming techniques in addition to writing clean codes To get the highest performance</p>
                                </div>
                                <div class="col-xl-6 col-xs-12">
                                  <h3> <i class="fas fa-code"></i> UI/UX</h3>
                                  <p>The interface should be easy to use and wonderful, I have enough experience in it and aspire to more</p>
                                </div>
                                <div class="col-xl-6 col-xs-12">
                                  <h3> <i class="fas fa-database"></i> RDMB Systems</h3>
                                  <p> <i>RDBMSs have been a common option for the storage of information in databases</i> <br> I have a lot of experience in dealing with relationships in MYSQL database </p>
                                </div>
                                <div class="col-xl-6 col-xs-12">
                                  <h3> <i class="fas fa-space-shuttle"></i> Optimization</h3>
                                  <p>High speed and performance are the most important things that keep visitors <br> I always choose the best ways and do many tests to increase speed and performance of sites</p>
                                </div>
                                <div class="col-xl-6 col-xs-12">
                                  <h3> <i class="fas fa-users"></i> CRM Systems</h3>
                                  <p>I have created a complete site dealing with the affairs of companies that include employees, customers, suppliers, stores as well as invoices and bonds</p>
                                </div>
                              </div>
                          </div>
                      </div>
                      <!-- end Expertise section -->
                      <!-- start skills section -->
                      <div class="skills cv animated">
                          <h2 class="section-title"> <i class="fas fa-user-ninja"></i> Skills <span class="text-muted">just some of them ;)</span></h2>
                          <div class="tools">
                            <div class="skill" title="HTML 5 (formerly and commonly spelled HTML5[a]) is a software solution stack that defines the properties and behaviors of web page content by implementing a markup based pattern to it.">
                                <p>html5</p>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                    <span>85%</span>
                                  </div>
                                </div>
                            </div>
                            <div class="skill" title="Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language like HTML.[1] CSS is a cornerstone technology of the World Wide Web">
                                <p>css3</p>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                    <span>95%</span>
                                  </div>
                                </div>
                            </div>
                            <div class="skill" title="jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation,">
                                <p>jquery</p>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    <span>90%</span>
                                  </div>
                                </div>
                            </div>
                            <div class="skill" title="JavaScript often abbreviated as JS, is a high-level, interpreted programming language that conforms to the ECMAScript specification. It is a language that is also characterized as dynamic, weakly typed, prototype-based and multi-paradigm.">
                                <p>javascript</p>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    <span>70%</span>
                                  </div>
                                </div>
                            </div>
                            <div class="skill" title="Bootstrap is a free and open-source front-end framework for developing websites and web applications. It contains HTML and CSS-based design templates for typography, forms, buttons, navigation and other interface components, as well as optional JavaScript extensions">
                                <p>bootstrap</p>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%">
                                    <span>99%</span>
                                  </div>
                                </div>
                            </div>
                            <div class="skill" title="MySQL is an open source relational database management system (RDBMS)">
                                <p>mysql</p>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    <span>90%</span>
                                  </div>
                                </div>
                            </div>
                            <div class="skill" title="PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development. It was originally created by Rasmus Lerdorf in 1994">
                                <p>php</p>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                    <span>85%</span>
                                  </div>
                                </div>
                            </div>
                            <div class="skill" title="CodeIgniter is an open-source software rapid development web framework, for use in building dynamic web sites with PHP">
                                <p>codeigniter</p>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    <span>90%</span>
                                  </div>
                                </div>
                            </div>
                            <div class="skill" title="Laravel is a free, open-source[3] PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony">
                                <p>laravel</p>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                    <span>85%</span>
                                  </div>
                                </div>
                            </div>
                            <div class="skill" title="is an open-source in-memory data structure project implementing a distributed, in-memory key-value database with optional durability.">
                                <p>Redis</p>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    <span>70%</span>
                                  </div>
                                </div>
                            </div>
                          </div>
                      </div>
                      <!-- end skills section -->
                      <!-- start Work Experience section -->
                      <div class="work-experience cv animated">
                          <h2 class="section-title"> <i class="fas fa-briefcase"></i> Work Experience</h2>
                          <!-- start job section -->
                          <div class="jobs">
                            <p>January 2019 - Present</p>
                            <h3>Full Stack Developer freelancer</h3>
                            <h4>online</h4>
                            <h6><i class="fas fa-wifi"></i> Work remotely</h6>
                          </div>
                          <!-- end job section -->
                          <!-- start job section -->
                          <div class="jobs">
                            <p>August 2017 - December 2018</p>
                            <h3>web developer</h3>
                            <h4>MT . Technology</h4>
                            <h6><i class="fas fa-map-marker-alt"></i> Giza, Egypt</h6>
                          </div>
                          <!-- end job section -->
                          <!-- start job section -->
                          <div class="jobs">
                            <p>July 2013 - August 2017</p>
                            <h3>Programmer and technical support</h3>
                            <h4>Alabuo Group </h4>
                            <h6><i class="fas fa-wifi"></i> Work remotely</h6>
                          </div>
                          <!-- end job section -->
                          <!-- start job section -->
                          <div class="jobs">
                            <p>January 2011 - July 2013</p>
                            <h3>web Developer</h3>
                            <h4>online</h4>
                            <h6><i class="fas fa-wifi"></i> Work remotely</h6>
                          </div>
                          <!-- end job section -->
                      </div>
                      <!-- end Work Experience section -->
                      <!-- start Education section -->
                      <div class="education cv animated">
                          <h2 class="section-title"> <i class="fas fa-user-graduate"></i> Education</h2>
                          <!-- start Education section -->
                          <div class="item">
                            <p>2010 - Future</p>
                            <h3>COMPUTER ENGINEERING</h3>
                            <h4>Self Education</h4>
                            <h6><i class="fas fa-map-marker-alt"></i> Egypt</h6>
                          </div>
                          <!-- end Education section -->
                          <!-- start Education section -->
                          <div class="item">
                            <p>2011 - 2017</p>
                            <h3>Bachelor Social Work</h3>
                            <h4>The High Institute for Social Service</h4>
                            <h6><i class="fas fa-map-marker-alt"></i> Cairo, Egypt</h6>
                          </div>
                          <!-- end Education section -->
                      </div>
                      <!-- end Education section -->
                      <!-- start contact section -->
                      <div class="contact">
                          <h2 class="section-title"> <i class="fas fa-mobile-alt"></i> Contact</h2>
                          <!-- start Contact item -->
                          <div class="item">
                            <h3>Mobile Phone</h3>
                            <h4>+2 0111 22 93 050</h4>
                          </div>
                          <!-- end Contact item -->
                          <!-- start Contact item -->
                          <div class="item">
                            <h3>Email</h3>
                            <h4><a href="mailto:m.gamalayoub@gmail.com">m.gamalayoub@gmail.com</a></h4>
                          </div>
                          <!-- end Contact item -->
                          <div class="form">
                            <p>Get in touch</p>
                            <form class="" method="post">
                                <div class="form-group">
                                  <label for="name">Name</label>
                                  <input type="text" name="name" required id="name" class="form-control" placeholder="Full Name" value="">
                                </div>
                                <div class="form-group">
                                  <label for="mail">Email address</label>
                                  <input type="text" name="mail" required id="mail" class="form-control" placeholder="Email" value="">
                                </div>
                                <div class="form-group">
                                  <label for="subject">Subject</label>
                                  <input type="text" name="subject" required id="subject" class="form-control" placeholder="Subject" value="">
                                </div>
                                <div class="form-group">
                                  <label for="message">Message</label>
                                  <textarea name="msg" id="message" required rows="8" class="form-control" cols="80" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                          </div>
                      </div>
                      <!-- end contact section -->
                      <!-- start footer -->
                      <div class="footer">
                          <p>© All rights reserved | Coding By Me with <i class="fas fa-heart"></i></p>
                      </div>
                      <!-- end footer -->
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Files -->
    <script type="text/javascript" charset="utf-8" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="assets/js/theia-sticky-sidebar.js"></script>
    <script type="text/javascript" charset="utf-8" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="assets/js/wow.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="assets/js/main.js"></script>
    <!-- end js Files -->
  </body>
</html>