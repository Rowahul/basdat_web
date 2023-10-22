<!DOCTYPE html>
<html lang="en">
<head>

     <title>Group 4 | Sport Venues Rental Website</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Sport Venues Rental Website</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="{{url('/')}}">Beranda</a></li>
                         <li><a href="{{url('/gor')}}">Venue GOR</a></li>
                         <li><a href="{{url('/gym')}}">Venue Gym</a></li>
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                              
                              <ul class="dropdown-menu">
                                   <li><a href="{{url('/blog')}}">Blog</a></li>
                                   <li><a href="{{url('/team')}}">Team</a></li>
                              </ul>
                         </li>
                         <li><a href="{{url('/contact')}}">Contact Us</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Blog Posts</h1>

                    <br>

                    <p class="lead">Mari ketahui isu-isu olahraga terkini!</p>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-lg-3 pull-right col-xs-12">
                         <div class="form">
                              <form action="#">
                                   <div class="form-group">
                                        <label class="control-label">Blog Search</label>

                                        <div class="input-group">
                                             <input type="text" class="form-control" placeholder="Search for...">
                                             <span class="input-group-btn">
                                                  <button class="btn btn-default" type="button">Go!</button>
                                             </span>
                                        </div>
                                   </div>
                              </form>
                         </div>

                         <br>

                         <label class="control-label">Isu terkini lainnya : </label>

                         <ul class="list">
                              <li><a href="{{url('/blog-post-details')}}">Moeldoko Gelar Turnamen Sepakbola Nasional Untuk Mencari Talenta-talenta Pesepakbola Indonesia</a></li>
                              <li><a href="{{url('/blog-post-details')}}">Bulutangkis Indonesia GATOT di Asian Games 2023, Menpora Sebut Banyak yang Kecapekan</a></li>
                              <li><a href="{{url('/blog-post-details')}}">Moeldoko Gelar Turnamen Sepakbola Nasional Untuk Mencari Talenta-talenta Pesepakbola Indonesia</a></li>
                         </ul>
                    </div>

                    <div class="col-lg-9 col-xs-12">
                         <div class="row">
                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/blog-1.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> Corry Magdalena</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 06/12/2022</span>
                                                  <span title="Views"><i class="fa fa-eye"></i>145</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="{{url('/blog-post-details')}}">Manfaat Berolahraga Bagi Kesehatan Tubuh</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="{{url('/blog-post-details')}}" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/blog-2.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> Kurnia Bahari</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 02/01/2023</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 255</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="{{url('/blog-post-details')}}">Awal Tahun Lebih Sehat, Berikut Manfaat dan Latihan Gym Pemula</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="{{url('/blog-post-details')}}" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/blog-5.jpeg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i>Mercy Raya</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 10/10/2023</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 189</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="{{url('/blog-post-details')}}">Menpora Dito: Bulutangkis Gagal di Asia Games 2023 karena...</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="{{url('/blog-post-details')}}" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/blog-4.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> Asad Arifin</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 11/10/2023</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 302</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="{{url('/blog-post-details')}}">Jadwal Lengkap BRI Liga 1 2023/2024</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="{{url('/blog-post-details')}}" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/blog-3.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> MERDEKA.COM</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 11/10/2022</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="{{url('/blog-post-details')}}">Manfaat Gym untuk Kesehatan Mental, dan Bugarkan Badan</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="{{url('/blog-post-details')}}" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/blog-6.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> Tim Medis Siloam Hospitals</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 29/03/2023</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 98</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="{{url('/blog-post-details')}}">7 Manfaat Yoga yang Baik untuk Kesehatan Tubuh dan Mental</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="{{url('/blog-post-details')}}" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>212 Barrington Court <br>New York, ABC 10001</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 Company Name</p>
                                   <p>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+1 333 4040 5566</p>
                                   <p><a href="mailto:contact@company.com">contact@company.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="terms.html">Terms & Conditions</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>

     <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
                    </div>
                    
                    <div class="modal-body">
                         <form action="#" id="contact-form">
                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up location" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return location" required>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up date/time" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return date/time" required>
                                   </div>
                              </div>
                              <input type="text" class="form-control" placeholder="Enter full name" required>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter email address" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter phone" required>
                                   </div>
                              </div>
                         </form>
                    </div>

                    <div class="modal-footer">
                         <button type="button" class="section-btn btn btn-primary">Book Now</button>
                    </div>
               </div>
          </div>
     </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>