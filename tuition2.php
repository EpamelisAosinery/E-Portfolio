<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="keywords" conten="Display Tuition Calculation">
            <meta name="description" conten="Display Tuition Calculation">
		<link rel="icon" href="img/favicon.png" type="image/png">
		<title>Display Tuition Calculation</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="vendors/linericon/style.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
		<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
		<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
		<link rel="stylesheet" href="vendors/animate-css/animate.css">
		<link rel="stylesheet" href="vendors/flaticon/flaticon.css">
		<link rel="stylesheet" href="css/mystyle.css">
            <style>
                  a {text-decoration: none;} 
            </style>
		<!-- main css -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<!-- prism scripts -->
		<link href="css/prism.css" rel="stylesheet">
		<script src="js/prism.js"></script>
		<!-- end prism scripts -->
		<!-- JQuery used for Table Filter -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>
	<body>
		
		<!--================Header Menu Area =================-->
		<?php include('menu.php'); ?>
		<!--================Header Menu Area =================-->
		
		<!--================Home Banner Area =================-->
		<section class="banner_area">
			<div class="banner_inner d-flex align-items-center">
				<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
					<div class="container">
						<div class="banner_content text-center">
							<h2>Display Tuition Calculator</h2>
							<div class="page_link">
								<a href="index.php">Home</a>
								<a href="tuition.php">Back page</a>
							</div>
                                          <br><h4>More PHP Decisions</h4>
							<div class="page_link">
								<a href="php2.php">Click here</a>
							</div>
						</div>
					</div>
			</div>
		</section>
		<!--================End Home Banner Area =================-->
		
		<!--================Projects Area =================-->
		<section class="projects_area p_120">
			<div class="container">
                        <h2>Display Tuition Calculation</h2><br>
                        <a href="index.php">Home  -> </a>
                        <a href="tuition.php">Back Page</a>
                        <hr>
                        <?php
                              $residency = substr(filter_input(INPUT_POST, 'residency', FILTER_SANITIZE_NUMBER_INT),0,1);
                              $lower = substr(filter_input(INPUT_POST, 'lower', FILTER_SANITIZE_NUMBER_INT),0,2);
                              $upper = substr(filter_input(INPUT_POST, 'upper', FILTER_SANITIZE_NUMBER_INT),0,2);
                              $help = substr(filter_input(INPUT_POST, 'help', FILTER_SANITIZE_NUMBER_INT),0,1);
                              if ($lower =="" and $upper =="" or  $lower =="0" and $upper =="0")
                              {
                                    exit("Invalid input. You must enter at least 1 credit hour.");
                              }
                              
                              if($residency == 1)
                              {
                                    $residency = "In-Disctrict Student";
                                    $tuition = ($lower * 101.5) + ($upper * 200) + 50 + 60 + ( 23*($lower + $upper));
                              }
                              elseif($residency == 2)
                              {
                                    $residency = "Out-Disctrict Student";
                                    $tuition = ($lower * 117) + ($upper * 265) + 50 + 60 + ( 23*($lower + $upper));
                              }
                              else
                              {
                                    $residency = "Out of State/International Student ";
                                    $tuition = ($lower * 257) + ($upper * 350) + 50 + 60 + ( 23*($lower + $upper));
                              }
                              echo "<br><p>Total $residency tuition cost of $lower 100-200 level credit hour and $upper 300-400 level credit hours is " . number_format( $tuition,2).  "</p>";                         
                              if($help == 2)
                              {
                                    echo "<br><h3>Helpful Web Pages</h3>";
                                    echo '<br><a href=\\"https://wwwhfcc.edu/finanical-aid\\">https://wwwhfcc.edu/finanical-aid</a>';
                                    echo '<br><a href=\\"https://wwwhfcc.edu/tuition-and-payment/scholarships\\">https://wwwhfcc.edu/tuition-and-payment/scholarships</a>';
                                    echo '<br><a href=\\"https://wwwhfcc.edu/steps/payment\\">https://wwwhfcc.edu/steps/payment</a>';
                              }
                        ?>
			</div>
		</section>
		<!--================End Projects Area =================-->

		<!--================Footer Area =================-->
		<footer class="footer_area p_120">
			<div class="container">
				<div class="row footer_inner">
					<div class="col-lg-5 col-sm-6">
						<aside class="f_widget ab_widget">
							<div class="f_title">
								<h3>About Me</h3>
							</div>
							<p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
							<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());
								</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</p>
						</aside>
					</div>
					<div class="col-lg-5 col-sm-6">
						<aside class="f_widget news_widget">
							<div class="f_title">
								<h3>Newsletter</h3>
							</div>
							<p>Stay updated with our latest trends</p>
							<div id="mc_embed_signup">
								<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
									<div class="input-group d-flex flexow">
										<input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
											<button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
									</div>				
									<div class="mt-10 info"></div>
								</form>
							</div>
						</aside>
					</div>
					<div class="col-lg-2">
						<aside class="f_widget social_widget">
							<div class="f_title">
								<h3>Follow Me</h3>
							</div>
							<h3>Let us be social</h3>
							<ul class="list">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</aside>
					</div>
				</div>
			</div>
		</footer>
		<!--================End Footer Area =================-->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/stellar.js"></script>
		<script src="vendors/lightbox/simpleLightbox.min.js"></script>
		<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
		<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
		<script src="vendors/isotope/isotope-min.js"></script>
		<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/mail-script.js"></script>
		<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
		<script src="vendors/counter-up/jquery.counterup.min.js"></script>
		<script src="js/theme.js"></script>
		
	</body>
</html>
