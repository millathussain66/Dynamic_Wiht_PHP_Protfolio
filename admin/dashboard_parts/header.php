<?php


	$id = $_SESSION['id'];
	$user = "SELECT * FROM users WHERE id=$id";
	$user_result = mysqli_query($db_connection, $user);
	$after_assoc_user = mysqli_fetch_assoc($user_result);

	$select = "SELECT * FROM logos";
    $select_logos = mysqli_query($db_connection, $select);
	$select_logo = mysqli_fetch_assoc($select_logos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Personal Portfolio || Admin</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicon icon -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <link rel="icon" type="image/png" sizes="16x16" href="/portfolio_with_row_php/uploads/logo/<?=$select_logo['logo']?>">


	<link rel="stylesheet" href="/portfolio_with_row_php/admin/dashboard_asset/vendor/chartist/css/chartist.min.css">

    <link href="/portfolio_with_row_php/admin/dashboard_asset/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

	<link href="/portfolio_with_row_php/admin/dashboard_asset/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">

    <link href="/portfolio_with_row_php/admin/dashboard_asset/css/style.css" rel="stylesheet">



	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="/portfolio_with_row_php/admin/dashboard.php" class="brand-logo">
                <img class="logo-compact"  src="/portfolio_with_row_php/uploads/logo/<?=$select_logo['logo']?>" alt="">
                <img class="brand-title"   src="/portfolio_with_row_php/uploads/logo/<?=$select_logo['logo']?>"   alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">

                    
                            <div class="ml-5">
								<a target="_blank" class=" btn btn-danger ml-5" href="http://localhost/portfolio_with_row_php/index.php">Live Website</a>
                            </div>
                       
                       
                        </div>
                        <ul class="navbar-nav header-right">
	
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="http://localhost/portfolio_with_row_php/admin/message/message.php">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.4605 3.84888H5.31688C4.64748 3.84961 4.00571 4.11586 3.53237 4.58919C3.05903 5.06253 2.79279 5.7043 2.79205 6.3737V18.1562C2.79279 18.8256 3.05903 19.4674 3.53237 19.9407C4.00571 20.4141 4.64748 20.6803 5.31688 20.6811C5.54005 20.6812 5.75404 20.7699 5.91184 20.9277C6.06964 21.0855 6.15836 21.2995 6.15849 21.5227V23.3168C6.15849 23.6215 6.24118 23.9204 6.39774 24.1818C6.5543 24.4431 6.77886 24.6571 7.04747 24.8009C7.31608 24.9446 7.61867 25.0128 7.92298 24.9981C8.22729 24.9834 8.52189 24.8863 8.77539 24.7173L14.6173 20.8224C14.7554 20.7299 14.918 20.6807 15.0842 20.6811H19.187C19.7383 20.68 20.2743 20.4994 20.7137 20.1664C21.1531 19.8335 21.4721 19.3664 21.6222 18.8359L24.8966 7.05011C24.9999 6.67481 25.0152 6.28074 24.9414 5.89856C24.8675 5.51637 24.7064 5.15639 24.4707 4.84663C24.235 4.53687 23.931 4.28568 23.5823 4.11263C23.2336 3.93957 22.8497 3.84931 22.4605 3.84888ZM23.2733 6.60304L20.0006 18.3847C19.95 18.5614 19.8432 18.7168 19.6964 18.8275C19.5496 18.9381 19.3708 18.9979 19.187 18.9978H15.0842C14.5856 18.9972 14.0981 19.1448 13.6837 19.4219L7.84171 23.3168V21.5227C7.84097 20.8533 7.57473 20.2115 7.10139 19.7382C6.62805 19.2648 5.98628 18.9986 5.31688 18.9978C5.09371 18.9977 4.87972 18.909 4.72192 18.7512C4.56412 18.5934 4.4754 18.3794 4.47527 18.1562V6.3737C4.4754 6.15054 4.56412 5.93655 4.72192 5.77874C4.87972 5.62094 5.09371 5.53223 5.31688 5.5321H22.4605C22.5905 5.53243 22.7188 5.56277 22.8353 5.62076C22.9517 5.67875 23.0532 5.76283 23.1318 5.86646C23.2105 5.97008 23.2642 6.09045 23.2887 6.21821C23.3132 6.34597 23.308 6.47766 23.2733 6.60304Z" fill="#0B2A97"/>
										<path d="M7.84173 11.4233H12.0498C12.273 11.4233 12.4871 11.3347 12.6449 11.1768C12.8027 11.019 12.8914 10.8049 12.8914 10.5817C12.8914 10.3585 12.8027 10.1444 12.6449 9.98661C12.4871 9.82878 12.273 9.74011 12.0498 9.74011H7.84173C7.61852 9.74011 7.40446 9.82878 7.24662 9.98661C7.08879 10.1444 7.00012 10.3585 7.00012 10.5817C7.00012 10.8049 7.08879 11.019 7.24662 11.1768C7.40446 11.3347 7.61852 11.4233 7.84173 11.4233Z" fill="#0B2A97"/>
										<path d="M15.4162 13.1066H7.84173C7.61852 13.1066 7.40446 13.1952 7.24662 13.3531C7.08879 13.5109 7.00012 13.725 7.00012 13.9482C7.00012 14.1714 7.08879 14.3855 7.24662 14.5433C7.40446 14.7011 7.61852 14.7898 7.84173 14.7898H15.4162C15.6394 14.7898 15.8535 14.7011 16.0113 14.5433C16.1692 14.3855 16.2578 14.1714 16.2578 13.9482C16.2578 13.725 16.1692 13.5109 16.0113 13.3531C15.8535 13.1952 15.6394 13.1066 15.4162 13.1066Z" fill="#0B2A97"/>
									</svg>
									<div class="pulse-css"></div>
                                </a>
							</li>
	
                            <li class="nav-item dropdown header-profile">
								
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="/portfolio_with_row_php/uploads/user/<?=$after_assoc_user['image']?>" width="20" alt=""/>
									<div class="header-info">
										
										<span class="text-black"><strong><?=$after_assoc_user['name']?></strong></span>
										<p class="fs-12 mb-0">
                                       <?=$after_assoc_user['email']?>
                                        </p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="/portfolio_with_row_php/users/profile.php" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                            
                        <a href="/portfolio_with_row_php/admin/logout.php" class="dropdown-item ai-icon">


                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                            <span class="ml-2">Logout</span>
                        </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">

                    <!-- <li><a class="has-arrow ai-icon" href="/portfolio_with_row_php/dashboard.php" >
							<span class="nav-text">Dashboard</span>
						</a>
                    </li> -->


                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<span class="nav-text">Users</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="/portfolio_with_row_php/users/users.php"> User List </a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<span class="nav-text">Logo</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="/portfolio_with_row_php/admin/logo/logo.php">Add Logo</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<span class="nav-text">Banners</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="/portfolio_with_row_php/admin/banner_content/banner.php">Add Banner</a></li>
                            <li><a href="/portfolio_with_row_php/admin/banner_content/banner_image.php">Add Banner Image</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<span class="nav-text">Social Icons</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="/portfolio_with_row_php/admin/social/social.php">Add Icon</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<span class="nav-text">Education</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="/portfolio_with_row_php/admin/education/education.php">Add New Education</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<span class="nav-text">Works</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="/portfolio_with_row_php/admin/works/work.php">Add Works</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="/portfolio_with_row_php/admin/services/service.php" aria-expanded="false">
							<span class="nav-text"> Services</span>
						</a>
                    </li>



                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<span class="nav-text">Abouts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="/portfolio_with_row_php/admin/about/about.php">Add About</a></li>
                            <li><a href="/portfolio_with_row_php/admin/about/about_img.php">Add About Image</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<span class="nav-text">Contact Text</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="/portfolio_with_row_php/admin/contact/contact.php"> Contact </a></li>
                    
                        </ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<span class="nav-text">TESTIMONIAL</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="/portfolio_with_row_php/admin/testimonial/testimonial.php"> TESTIMONIAL CONTENT </a></li>
              
                        </ul>
                    </li>








                    
                    <li><a class="has-arrow ai-icon" href="/portfolio_with_row_php/admin/customer_slider/slider.php" aria-expanded="false">
							<span class="nav-text"> customer_slider </span>
						</a>
                    </li>




                    <li><a class="has-arrow ai-icon" href="/portfolio_with_row_php/admin/success_section/success.php" aria-expanded="false">
							<span class="nav-text"> Success Text </span>
						</a>
                    </li>


                    <li><a class="has-arrow ai-icon" href="/portfolio_with_row_php/admin/copy_right/copy_right.php" aria-expanded="false">
							<span class="nav-text"> copy_right </span>
						</a>
                    </li>

                </ul>
		
			</div>
        </div>

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">