<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="img/favicon.png" type="image/png">
		<title>Security News</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="vendors/linericon/style.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
		<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
		<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
		<link rel="stylesheet" href="vendors/animate-css/animate.css">
		<link rel="stylesheet" href="vendors/flaticon/flaticon.css">
		<!-- main css -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<style>
			.table table {
				border-collapse: collapse;
			}
			.table, th, td, tr{
				border: 1px solid #dddddd;
				text-align: left;
				padding: 8px;
			}
			th {
				background-color: #0143ad;
				color: white;
			}
			tr, td{
				text-align: left;
				padding: 8px ;
			}
			tr:nth-child(even) {
				background-color: #c3d7f7;
			}
		</style>
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
							<h2>Security News</h2>

							<div class="page_link">
								<a href="index.php">Home</a>
								<a href="security.php">Security</a>
							</div>
							
						</div>
					</div>
			</div>
		</section>
		<!--================End Home Banner Area =================-->

		<!--================Projects Area =================-->
		<section class="projects_area p_120">
			<div class="container">
				<img src="img/security.jpg" alt="Image of lock representing Cybersecurity">
				<h4><br>Major Security Breaches</h4>
				<table>
					<tr>
						<th colspan="1">Brech</th>
						<th colspan="1">Date</th>
						<th colspan="1">Impacted Users</th>
					</tr>
					<tr>
						<td>Microsoft</td>
						<td>Decmber 2019</td>
						<td>44,000,00</td>
					</tr>
					<tr>
						<td>Facebook</td>
						<td>September 2019</td>
						<td>419,000,000</td>
					</tr>	
					<tr>
						<td>Marriot Hotels</td>
						<td>November 2018</td>
						<td>383,000,000</td>
					</tr>	
					<tr>
						<td>Twitter</td>
						<td>May 2018</td>
						<td>330,000,000</td>
					</tr>	
					<tr>
						<td>MyFitnessPal</td>
						<td>May 2018</td>
						<td>150,000,000</td>
					</tr>	
				</table>
				<br><div id="barChartContainer" style="height: 450px; width: 95%"></div>
				<p>Source: <a href="https://informationisbeautiful.net/visualizations/worlds-biggest-data-breaches-hacks/" target="_blank">https://informationisbeautiful.net/visualizations/worlds-biggest-data-breaches-hacks/</a></p>
				<h4>Phishing</h4>
				<p>Phishing is the attempt to obtain sensitive information such as usernames, passwords, and credit card details (and sometimes, indirectly, money), often for malicious reasons, by masquerading as a trustworthy entity in an electronic communication. (Source: <a href="https://en.wikipedia.org/wiki/Phishing" target="_blank">Wikipedia</a>)</p>
				<h4>How to identify phishing</h4>
				<ul>
					<li>Email or web site indicate that urgetn action required</li>
					<li>Email has genetic greeting</li>
					<li>A hyperlink that is just text such as "Click Here" where you cannot see the acutal destination web address</li>
					<li>Contains spelling mistakes</li>
					<li>Seeks personal information</li>
				</ul>
				<h4>Five common user of encryption</h4>
				<ol>
					<li>Web browsing</li>
					<li>Passwords</li>
					<li>Hard drives</li>
					<li>Wifi traffic</li>
					<li>USB drive</li>
				</ol>
				<h4>Security tips:</h4>
				<ol>
					<li>Use multi-factor authentication</li>
					<li>Use 10 or more characters passwords</li>
					<li>use different password for each web site</li>
				</ol>
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
							<p>Let us be social</p>
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
		<script src="js/mybarchart.js"></script>
		<script src="js/canvasjs.min.js"></script>
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
		<!-- JQuery used for Table Filter -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	</body>
</html>