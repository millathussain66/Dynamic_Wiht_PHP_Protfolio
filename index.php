<?php 
session_start();
require 'db.php';

//logo
$select = "SELECT * FROM logos WHERE status=1";
$select_logo = mysqli_query($db_connection, $select);
$after_assoc_logo = mysqli_fetch_assoc($select_logo);

//banners
$select = "SELECT * FROM banner_contents WHERE status=1";
$select_banner = mysqli_query($db_connection, $select);
$after_assoc_banner = mysqli_fetch_assoc($select_banner);

//banners image
$select = "SELECT * FROM banner_images WHERE status=1";
$select_banner_img = mysqli_query($db_connection, $select);
$after_assoc_banner_img = mysqli_fetch_assoc($select_banner_img);

//Social
$select = "SELECT * FROM socials WHERE status=1";
$select_icon = mysqli_query($db_connection, $select);

//Education
$select = "SELECT * FROM educations WHERE status=1";
$select_edu = mysqli_query($db_connection, $select);

//Education
$select = "SELECT * FROM works";
$select_work = mysqli_query($db_connection, $select);

// Service 

$select_serv = "SELECT * FROM service";
$select_service = mysqli_query($db_connection, $select_serv);


// About 

$select_serv = "SELECT * FROM about WHERE status=1";
$select_about_content = mysqli_query($db_connection, $select_serv);
$after_assoc_about = mysqli_fetch_assoc($select_about_content);

// About Images 

$select_about = "SELECT * FROM about_image WHERE status=1";
$select_about_image = mysqli_query($db_connection, $select_about);
$after_assoc_about_image = mysqli_fetch_assoc($select_about_image);

// About Images 

$select_contact = "SELECT * FROM contact WHERE status=1";
$select_contact_con = mysqli_query($db_connection, $select_contact);
$select_contact_select_all = mysqli_fetch_assoc($select_contact_con);



// Slider Section
$slider = "SELECT logo_image FROM customer_slider  WHERE status=1 LIMIT 8";
$slider_select = mysqli_query($db_connection, $slider);
// Slider Section

// testimonial Section
$testimonial = "SELECT * FROM testimonial  WHERE status=1 LIMIT 3";
$testimonial_select = mysqli_query($db_connection, $testimonial);
// testimonial Section



// Copyright Text 

$select_copy = "SELECT * FROM copy_right  LIMIT 1";
$select_copy_text = mysqli_query($db_connection, $select_copy);
$after_assoc_copy_text = mysqli_fetch_assoc($select_copy_text);





?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Personal Portfolio || Millat</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        
    <link rel="icon" type="image/png" sizes="16x16" href="uploads/logo/<?=$after_assoc_logo['logo']?>">
      




        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.html" class="navbar-brand logo-sticky-none">
                                        <img src="uploads/logo/<?=$after_assoc_logo['logo']?>" alt="Logo">
                                    </a>
                                    <a href="index.html" class="navbar-brand s-logo-none">
                                        <img src="uploads/logo/<?=$after_assoc_logo['logo']?>" alt="Logo">
                                    </a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <?php foreach($select_icon as $icon){ ?>
                        <a target="_blank" href="<?=$icon['link']?>"><i style="font-family:fontawesome;" class="fa <?=$icon['icon']?>"></i></a>
                    <?php } ?>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s"><?=$after_assoc_banner['sub_title']?></h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?=$after_assoc_banner['title']?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$after_assoc_banner['desp']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <?php foreach($select_icon as $icon){ ?>
                                            <li><a target="_blank" href="<?=$icon['link']?>"><i style="font-family:fontawesome;" class="fa <?=$icon['icon']?>"></i></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img width="600"  src="uploads/banner/<?=$after_assoc_banner_img['banner_image']?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="uploads/about/<?= $after_assoc_about_image['image'] ?>" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">

                            <?php echo $after_assoc_about['about_you'] ?>
                       
                                <h3 class="mt-3">Education:</h3>
                            </div>
                            <?php foreach($select_edu as $edu){ ?>
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year"><?=$edu['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$edu['title']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$edu['percentage']?>%;" aria-valuenow="<?=$edu['percentage']?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->
                            <?php } ?>
           
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">

                    <?php foreach($select_service as $service){?>

						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <!-- <i class="fab fa-react"></i> -->
                                <img style="margin-top:10px" width="150" src="./uploads/service/<?= $service['service_logo']?>" alt="">
								<h3><?= $service['service_title']?></h3>
								<p>
								<?= $service['service_dscp']?>
								</p>
							</div>
						</div>

                        <?php } ?>
			
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach($select_work as $work){ ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="uploads/works/<?=$work['image']?>" alt="img">
								</div>
								<div class="speaker-overlay">
									<span><?=$work['category']?></span>
									<h4><a href="portfolio-single.html"><?=$work['sub_title']?></a></h4>
									<a href="work_details.php?id=<?=$work['id']?>" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-award"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">245</span></h2>
                                        <span>Feature Item</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-like"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">345</span></h2>
                                        <span>Active Products</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-event"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">39</span></h2>
                                        <span>Year Experience</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-woman"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">3</span>k</h2>
                                        <span>Our Clients</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">

                            <?php foreach($testimonial_select as $item){ ?>

                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="img/images/testi_avatar.png" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?= $item['quotes'] ?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?= $item['name'] ?></h5>
                                            <span><?= $item['introduction'] ?></span>
                                        </div>
                                    </div>
                                </div>

                                <?php } ?>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                    <?php foreach($slider_select as $slider){ ?>

                        <div class="col-xl-2">
                            <div class="single-brand">

                                <img src="./uploads/customer_slider/<?= $slider['logo_image']  ?>" alt="img">
                           
                        
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">


                            

                                <p><?= $select_contact_select_all['contact_desp']?></p>



                                <h5>OFFICE IN <span> <?= $select_contact_select_all['contact_city']?></span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span> <?= $select_contact_select_all['contact_address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?= $select_contact_select_all['phone']?></li>
                                        <li>
                                            <i class="fas fa-globe-asia"></i><span>e-mail :</span><p><?= $select_contact_select_all['e_mail']?></p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <?php if(isset($_SESSION['send'])){?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong><?=$_SESSION['send']?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                            <?php } unset($_SESSION['send'])?>
                            <div class="contact-form">
                                <form action="message_post.php" method="POST">
                                    <input type="text" name="name" placeholder="your name *">
                                    <input type="email" name="email" placeholder="your email *">
                                    <textarea name="message" id="message" placeholder="your message *"></textarea>
                                    <button type="submit" class="btn">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">

                            

                                <p> <?= $after_assoc_copy_text['copy_right_text'] ?> </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/one-page-nav-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>
