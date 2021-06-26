<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="keywords" conten="Display Grade Calculation">
            <meta name="description" conten="Display Grade Calculation">
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
							<h2>Display Grade Calculator</h2>
							<div class="page_link">
								<a href="index.php">Home</a>
								<a href="grade.php">Back page</a>
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
				<h2>Grade Calculation</h2><br>
                        <a href="index.php">Home  -> </a>
                        <a href="grade.php">Back Page</a>
                        <hr>
                        <?php
                              $hw1 = substr(filter_input(INPUT_POST, 'hw1', FILTER_SANITIZE_NUMBER_INT),0,3);
                              $hw2 = substr(filter_input(INPUT_POST, 'hw2', FILTER_SANITIZE_NUMBER_INT),0,3);
                              $hw3 = substr(filter_input(INPUT_POST, 'hw3', FILTER_SANITIZE_NUMBER_INT),0,2);
                              $quiz1 = substr(filter_input(INPUT_POST, 'quiz1', FILTER_SANITIZE_NUMBER_INT),0,3);
                              $quiz2 = substr(filter_input(INPUT_POST, 'quiz2', FILTER_SANITIZE_NUMBER_INT),0,3);
                              $quiz3 = substr(filter_input(INPUT_POST, 'quiz3', FILTER_SANITIZE_NUMBER_INT),0,3);
                              $quiz4 = substr(filter_input(INPUT_POST, 'quiz4', FILTER_SANITIZE_NUMBER_INT),0,3);
                              $quiz5 = substr(filter_input(INPUT_POST, 'quiz5', FILTER_SANITIZE_NUMBER_INT),0,3);
                              $exam1 = substr(filter_input(INPUT_POST, 'exam1', FILTER_SANITIZE_NUMBER_INT),0,3);
                              $ext1 = substr(filter_input(INPUT_POST, 'ext1', FILTER_SANITIZE_NUMBER_INT),0,2);
                              $ext2 = substr(filter_input(INPUT_POST, 'ext2', FILTER_SANITIZE_NUMBER_INT),0,2);
                              $ext3 = substr(filter_input(INPUT_POST, 'ext3', FILTER_SANITIZE_NUMBER_INT),0,2);
                              $ext4 = substr(filter_input(INPUT_POST, 'ext4', FILTER_SANITIZE_NUMBER_INT),0,2);
                              $ext5 = substr(filter_input(INPUT_POST, 'ext5', FILTER_SANITIZE_NUMBER_INT),0,2);
                              $ext6 = substr(filter_input(INPUT_POST, 'ext6', FILTER_SANITIZE_NUMBER_INT),0,2);
                              $ext7 = substr(filter_input(INPUT_POST, 'ext7', FILTER_SANITIZE_NUMBER_INT),0,2);
                              $ext8 = substr(filter_input(INPUT_POST, 'ext8', FILTER_SANITIZE_NUMBER_INT),0,2);
                              $ext9 = substr(filter_input(INPUT_POST, 'ext9', FILTER_SANITIZE_NUMBER_INT),0,2);
					if ($hw1 =="" or $hw2 =="" or $hw3 =="" or $quiz1=="" or $quiz2=="" or $quiz3=="" or $quiz4=="" or $quiz5=="" or $exam1=="" or $ext1 =="" or $ext2 =="" or  $ext3 =="" or $ext4 =="" or $ext5 =="" or $ext6 =="" or $ext7 =="" or $ext8 =="" or $ext9 =="")
                              {	
                                    exit("Invalid input. You must enter 0 or more point.");
						//$ext1 = 0; $ext2 = 0; $ext3 = 0; $ext4 = 0; $ext5 = 0; $ext6 = 0; $ext7 = 0; $ext8 = 0; $ext9 = 0;
                              }
					else{
						$grade = (($hw1+$hw2+$hw3+$quiz1+$quiz2+$quiz3+$quiz4+$quiz5+$exam1+$ext1+$ext2+$ext3+$ext4+$ext5+$ext6+$ext7+$ext8+$ext9)/425)*100;
						echo "<h4>Current course grade is: " .round($grade,0);
						if ($grade >=97)
							echo "%, which is an A+</h4>";
						elseif ($grade <=96 and $grade >=93)
							echo "%, which is an A</h4>";
						elseif ($grade <=92 and $grade >=90)
							echo "%, which is an A-</h4>";
						elseif ($grade <=89 and $grade >=86)
							echo "%, which is an B+</h4>";
						elseif ($grade <=85 and $grade >=82)
							echo "%, which is an B</h4>";
						elseif ($grade <=81 and $grade >=80)
							echo "%, which is an B-</h4>";
						elseif ($grade <=79 and $grade >=75)
							echo "%, which is an C+</h4>";
						elseif ($grade <=74 and $grade >=71)
							echo "%, which is an C</h4>";
						elseif ($grade <=70 and $grade >=69)
							echo "%, which is an C-</h4>";
						elseif ($grade <=68 and $grade >=65)
							echo "%, which is an D+</h4>";
						elseif ($grade <=64 and $grade >=62)
							echo "%, which is an D</h4>";
						elseif ($grade <=61 and $grade >=60)
							echo "%, which is an D-</h4>";
						elseif ($grade <=59)
							echo "%, which is an E</h4>";
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
