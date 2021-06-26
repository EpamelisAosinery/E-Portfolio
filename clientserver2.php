<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="img/favicon.png" type="image/png">
		<title>Client Server</title>
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
			.table{
				border-collapse: collapse;
			}
			.table, th, td, tr{
				border: 1px solid black;
				border-width: 100%;
				border-spacing: 0;
			}
			th{
				text-align: center;
				background-color: #FFD78D;
			}
			tr, td{
				text-align: left;
				padding: 8px ;
			}
			tr:nth-child(even){
				background-color: #92E0EC;
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
							<h2>Client Server</h2>
							<div class="page_link">
								<a href="index.php">Home</a>
								<a href="clientserver2.php">Client Server</a>
							</div>
						</div>
					</div>
			</div>
		</section>
		<!--================End Home Banner Area =================-->
		
		<!--================Projects Area =================-->
		<section class="projects_area p_120">
			<div class="container">
				<h1>Client Server Computing</h1>
				<p>by Hoa Ho</p><br>
				<hr>

				<h2>What is the client/server model?</h2>
				<p>The client-server model describes how a server provides resources and services to one or more clients. Examples
					of servers include web servers, mail servers, and file servers. Each of these servers provide resources to client
					devices, such as desktop computers, laptops, tablets, and smartphones. Most servers have a one-to-many relationship
					with clients, meaning a single server can provide resources to multiple clients at one time. Each of these servers 
					provide resources to client devices, such as desktop computers, laptops, tablets, and smartphones. Most servers
					have a one-to-many relationship with clients, meaning a single server can provide resources to multiple clients at one time.
				</p>
				<p>When a client requests a connection to a server, the server can either accept or reject the connection. If the connection is 
					accepted, the server establishes and maintains a connection with the client over a specific protocol. For example, an email 
					client may request an SMTP connection to a mail server in order to send a message. The SMTP application on the mail server 
					will then request authentication from the client, such as the email address and password. If these credentials match an 
					account on the mail server, the server will send the email to the intended recipient.
				</p>

				<h2><br>Advantages of the client/server model</h2>
				<p>Several major addvantages of the client/server model are:</p>
				<ol>
					<li>Centralized/shared storage, e.g. h: cislinux</li>
					<li>Backup and recovery</li>
					<li>Centralized security</li>
					<li>Scalable, e.g. add features, resources</li>
				</ol>

				<h2><br>Examples of client/server software</h2>
				<table>
						<tr>
							<th scope="col">Software</th>
							<th scope="col">Client</th>
							<th scope="col">Server</th>
						</tr>
						<tr>
							<td>Web</td>
							<td>Chrome <br>MS Edge<br> Safari</td>
							<td>Apache <br>MS IIS</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>MS Outlook <br>Groupwise</td>
							<td>MS Exchange</td>
						</tr>
						<tr>
							<td>FTP</td>
							<td>FileZilla <br>WS FTP <br>Cute FTP</td>
							<td>FileZilla</td>
						</tr>
						<tr>
							<td>Web Development/Coding</td>
							<td>HTML <br>CSS <br>JavaScript</td>
							<td>PHP <br>Perl <br>Python <br>SQL</td>
						</tr>
						<tr>
							<td>Database</td>
							<td>MS Access</td>
							<td>MS SQL Server <br>MySQL <br>Oracle</td>
						</tr>
				</table>

				<h2><br> Examples of TCP/IP protocols</h2>
				<ul>
					<li><b>FTP</b>
						<ul>
							<li>
								<i>The File Transfer Protocol</i> is a standard network protocol used for the transfer of computer
								files between a client and server on a computer network. FTP is built on a client-server model
								architecture using separate control and data connections between the client and the server.
							</li>
						</ul>
					</li>
					<li><b>HTTP</b>
						<ul>
							<li>
								<i>The Hypertext Transfer Protocol</i> is an application layer protocol for distributed, collaborative, hypermedia information systems.
								HTTP is used to send/retrieve web pages over the Web using a Web browser.
							</li>
						</ul>    
					</li>
					<li><b>HTTPS</b> 
						<ul>
							<li>
									<i>Hypertext Transfer Protocol Secure</i> is an extension of the Hypertext Transfer Protocol. It is used for secure communication over a
									computer network, and is widely used on the Internet. In HTTPS, the communication protocol is encrypted using Transport Layer 
									Security or, formerly, Secure Sockets Layer.
							</li>
						</ul>   
					</li>
					<li><b>DHCP</b>
						<ul>
							<li>
								<i>The Dynamic Host Configuration Protocol</i> is a network management protocol used on Internet Protocol networks, whereby a DHCP 
								server dynamically assigns an IP address and other network configuration parameters to each device on the network, so they can 
								communicate with other IP networks.
							</li>
						</ul>
					</li>
					<li><b>SMTP</b>
						<ul>
							<li>
								<i>The Simple Mail Transfer Protocol</i> is a communication protocol for electronic mail transmission. As an Internet standard, SMTP
								was first defined in 1982 by RFC 821, and updated in 2008 by RFC 5321 to Extended SMTP additions, which is the protocol 
								variety in widespread use today.
							</li>
						</ul>
					</li>
				</ul>
				
				<h2><br>Examples of network utilities and services</h2>
				<ul>
					<li><b>Ping</b>
						<ul>
							<li>Utility used to test whether a host on a network is reachable/avaiable</li>
						</ul>
					</li>
					<li><b>Tracert</b>
						<ul>
							<li>Utility that display the path packets are taking to get from your current location/device on a network are any delays between 
								the two location.
							</li>
						</ul>
					</li>
					<li><b>Pathping</b>
						<ul>
							<li>Utility that combines the features of ping and tracert.</li>
						</ul>
					</li>
					<li><b><a href="https://www.whois.com/whois/" target="_blank">Whois</a></b></li>
						<ul>
							<li>Utility that allows you to look-up who owns an Internet resource, such as a domain name or IP address.</li>
						</ul>
					</li>
					<li><b>IPconfig</b>
						<ul>
							<li>Utility that allows you to look-upand configure a device IP address, DHCP, and DNS information.</li>
						</ul>
					</li>
				</ul>

				<h2><br>Examples of relative and absolute addresses</h2>
				<table>
					<tr>
						<th>Relative Addresses <br>
							(internal links)
						</th>
						<th>Absolute Addresses <br>
							(External links)
						</th>
					</tr>
					<tr>
						<td>
							repos\clientserver.html (sub-folder) <br>
							repos\style.css
						</td>
						<td>
							https://www.whois.com/whois/ <br>
							https://catalog.hfcc.edu/courses
						</td>
					</tr>
				</table>              
			</div>

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