<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Portfolio</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/header.css">
</head>

<body>


<!--================ Start Header Area =================-->

<header class="header_area">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light" id="openNav" >
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="index.php"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" onclick="openNav()"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset">
					<ul class="nav navbar-nav menu_nav justify-content-end">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
						<li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>

						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>
				</div>
				<!---left side-->
				
			</div>
		</nav>
	</div>
</header>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="services.php">Services</a>
  <a href="portfolio.php">Portfolio</a>
  <a href="contact.php">Contact</a>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("openNav").style.display = "none";
  document.getElementById("banner_area").style.display = "none"; // Hide banner_area on mobile
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("openNav").style.display = "block";
  document.getElementById("banner_area").style.display = "block"; // Show banner_area on mobile
}

</script>
<!--================ End Header Area =================-->

    <!--================ Start Banner Area =================-->
    <section id="banner_area" class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Portfolio</h2>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="portfolio.php">Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

<!--================Start Portfolio Area =================-->
<section class="portfolio_area section_gap_top" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title text-left">
                        <h2>quality work <br>
                            Recently done project </h2>
                    </div>
                </div>
            </div>
            <div class="filters portfolio-filter">
                <ul>
                    <li class="active" data-filter="*">all</li>
					<!--  <li data-filter=".popular">popular</li>--> 
                    <li data-filter=".latest"> latest</li>
                    <li data-filter=".web">webdeveloping</li>
                    <li data-filter=".game">gamedeveloping</li>
					<li data-filter=".other">other</li>
                </ul>
            </div>
    
            <div class="filters-content">
				<div class="row portfolio-grid justify-content-center">


				<div class="col-lg-4 col-md-6 all latest web">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/react1.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/react1.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
								
							</div>
							<div class="short_info">
								<h4><a href="#">React Js - Pokemart </a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
				</div>



				<div class="col-lg-4 col-md-6 all latest web">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/qr.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/qr.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
								
							</div>
							<div class="short_info">
								<h4><a href="#">Parking system with QR</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
				</div>

				



				<div class="col-lg-4 col-md-6 all web game">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/lucky9.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/lucky9.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
								
							</div>
							<div class="short_info">
								<h4><a href="#">Lucky 9 Web Game</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
				</div>


				<div class="col-lg-4 col-md-6 all latest web">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/candy.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/candy.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="#">Candy Corner</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
				</div>

				<div class="col-lg-4 col-md-6 all other game">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/batopick.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/batopick.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="#">Javato vatopick</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>


					<div class="col-lg-4 col-md-6 all game">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/KadangKadang.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/KadangKadang.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="#">Kadang-Kadang Adventure Game</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
				
				<div class="col-lg-4 col-md-6 all latest other">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/mobile1.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/mobile1.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="#">Flutter Online Ordering System using yummly API</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					
					
					<div class="col-lg-4 col-md-6 all latest web">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/hospital.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/hospital.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="#">Doctors Appointment System</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 all latest game">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/quiz.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/quiz.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="#">2D AP QUIZ GAME</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					
					
					<div class="col-lg-4 col-md-6 all latest other">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p0.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p0.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="#">Object Detection</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 all web">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p1.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p1.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">Poultry Shop</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all web ">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p2.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p2.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">Cake Shop</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all web">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p3.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p3.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">24Chicken Ordering</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p4.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p4.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">miguel restaurant</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all web">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p5.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p5.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">Abi's Cake shop</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 all web">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p7.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p7.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">Javascript Snowflake</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>


					<div class="col-lg-4 col-md-6 all web">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p8.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p8.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4>bartending design</h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 all web">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p15.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p15.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4>Holy steak restobar</h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 all game">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p9.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p9.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">3d Game - The Panday</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 all game">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p10.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p10.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">2d Game - Darna</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 all game">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p11.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p11.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">2d Game - Adventure of piggie</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 all web game">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p12.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p12.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">HTML 5 - Jolly Game</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 all game">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p14.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p14.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">2D game - Adventure of Pedro Penduko</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>


					<div class="col-lg-4 col-md-6 all web">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p16.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p16.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">ISABELA STATE UNIVERSITY

									RECORD MANAGEMENT SYSTEM</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 all web">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/onemoto.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/onemoto.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">ONE MOTO RRG ordering system </a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>

				</div>
			</div>
        </div>
    </section>
    <!--================End Portfolio Area =================-->
    
  <!--================ Start Testimonial Area =================-->
	<div class="testimonial_area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2>client say about me</h2>
                        <p>_______________________</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testi_slider owl-carousel">
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/testimonials/t3.jpg" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Ian Cabacungan</h4>
                                    <p>
                                          Joshua is an intelligent and highly skilled person. He provided me with great support in my studies, helped me with my project, and shared valuable insights that my own teacher sometimes overlooked.   </p>
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/testimonials/t2.jpg" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Agnes Ljuca</h4>
                                    <p>I have had the pleasure of working with Joshua on a few projects, and I can confidently say that he is a hardworking, reliable, and trustworthy professional. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/testimonials/t1.jpg" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Abi De Arce</h4>
                                    <p>
                                    Joshua is a very talented and smart guy. He helped me a lot with my course, helped me build a portfolio and gave me knowledge that sometimes my own teacher hasn't taught me.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/testimonials/t3.jpg" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Ian Cabacungan</h4>
                                   <p>
                                         Joshua is an intelligent and highly skilled person. He provided me with great support in my studies, helped me with my project, and shared valuable insights that my own teacher sometimes overlooked.   </p>
									</p> </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/testimonials/t1.jpg" alt="">
                             </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Abi De Arce</h4>
                                    <p>
                                        Joshua is a very talented and smart guy. He helped me a lot with my course, helped me build a portfolio and gave me knowledge that sometimes my own teacher hasn't taught me.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/testimonials/t2.jpg" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Agnes Ljuca</h4>
                                  <p>I have had the pleasure of working with Joshua on a few projects, and I can confidently say that he is a hardworking, reliable, and trustworthy professional. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Testimonial Area =================-->
    
    <!--================ Start Newsletter Area =================-->
    
    <!--================ End Newsletter Area =================-->
        
        <!--================Footer Area =================-->
	<footer class="footer_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="footer_top flex-column">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/portfolio/joshuapadilla.jpg" alt="" style="border-radius:50%;">
                            </a>
                            <h4>Follow Me On</h4>
                        </div>
						<div class="footer_social">
							<a href="https://web.facebook.com/tiodorojen17/"><i class="fa fa-facebook"></i></a>
							<a href="https://www.upwork.com/freelancers/~014619d42914f252bf"><i class="fa fa-briefcase"></i></a>
							<a href="https://github.com/anderson895"><i class="fa fa-github"></i></a>
							<a href="https://www.youtube.com/channel/UCGx6f4Pm-X6l19FRhdHlHeg"><i class="fa fa-youtube"></i></a>
						</div>
                    </div>
                </div>
            </div>
            <div class="row footer_bottom justify-content-center">
                <p class="col-lg-8 col-sm-12 footer-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/modalscreenshot.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>