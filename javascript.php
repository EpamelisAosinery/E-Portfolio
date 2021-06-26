<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="img/favicon.png" type="image/png">
		<title>JavaScript Web Development Process</title>
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
			.table1 table {
				font-family: arial, sans-serif;
				border-collapse: collapse;
				width: 100%;
			}
			.table1 td, .table1 th {
				border: 1px solid #dddddd;
				text-align: left;
				padding: 8px;
			}
			.table1 th {
				background-color: #0143ad;
				color: white;
			}
			.table1 tr:nth-child(even) {
				background-color: #c3d7f7;
			}
		</style>
		<!-- JavaScript -->
		<script src="js/mypiechart.js"></script>
		<script src="js/canvasjs.min.js"></script>
		<!-- JQuery used for Table Filter -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		<script type="text/javascript" src="js/filter.js"></script>

		
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
							<h2>JavaScript Web Development Process?</h2>
							<div class="page_link">
								<a href="index.php">Home</a>
								<a href="javascript.php">JavaScript</a>
							</div>
						</div>
					</div>
			</div>
		</section>
		<!--================End Home Banner Area =================-->
		
		<!--================Projects Area =================-->
		<section class="projects_area p_120">
			<div class="container">
				<h2>What is the Web Development Process?</h2>
				<p>A web development process, or web design and development procecss, is a systematic process, or methodology, used to design and build websites. Just as planning goes into the design of cars, buildings, or home, so too is planning and design and development process required for web sites. A good process help ensure customer requirements are delivered in a quality, timely, and cost-effective manner. </p>
				
				<h2>SDLCs and Project management</h2>
				<p>The web design and development process can be thought of as a type of software development life cycle (SDLC) and project management methodolofu. The waterfall model depicted below is a long-standing, raditional SDLC that is characterized by seqential steps. Agile is a newer method that is intended to mroe quickly respond to changing customer and product requirements using an incremental process with frequent releases and customer feedback.</p>
				
				<h3>Traditional Waterfall SDLC Methodology</h3>
				<p><img src="img/waterfall.png" alt="Waterfall SDLC"></p>
				<p>Source: Wikipedia</p>

				<h3>Agile Methodology</h3>
				<p><img src="img/agile.png" alt="Algile Methodology"></p>
				
				<h3>Web Development Phases</h3>
				<div id="pieChartContainer" style="height: 450px; width: 95%;"></div>

				<br>
				<form action="search.php" method="get">
					<table>
						<tr>
							<th colspan="2">Search Sites</th>
						</tr>
						<tr>
							<td>Site to search:</td>
							<td>
								<select name="site">
									<option value="google">Google Web
									<option value="googlei">Google Images
									<option value="duck">DuckDuckGo
									<option value="wiki">Wikiedpia
								</select>
							</td>
						</tr>
						<tr>
							<td>Search term(s):</td>
							<td>
								<input type="text" name="terms" size="25" maxlength="25">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" value="Submit" class="centercell">
							</td>
						</tr>
					</table>
				</form>
				<br>
				<p>Enter text to filter Michigan elected officials by:</p>
				<p><input id="myInput" type="text" placeholder="Enter search text..."></p>
				<table class="table1">
					<thead>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Contact</th>
						</tr>
					</thead>
					<tbody id="myTable">
						<tr>
							<td>Wendell Byrd</td>
							<td>State Rep, 3rd House District, Northern Detroit</td>
							<td>(855) 564-4673</td>
						</tr>
						<tr>
							<td>Abdullah Hammoud</td>
							<td>State Rep, 15th House District, Dearborn</td>
							<td>(855) 775-1515</td>
						</tr>
						<tr>
							<td>Sylvia Santana</td>
							<td>State Senator, 3rd District Dearborn, Detroi, Melvindalet</td>
							<td>(517) 373-0990</td>
						</tr>
						<tr>
							<td>Gretchen Whitmer</td>
							<td>Michigan Governor</td>
							<td>(517) 373-3400</td>
						</tr>
						<tr>
							<td>John B. "Jack" O'Reilly, Jr</td>
							<td>mayor, City of Dearbornt</td>
							<td><a href="index.php">Contact Me</a></td>
						</tr>
					</tbody>
				</table>
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