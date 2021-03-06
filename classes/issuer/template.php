<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	
	<link rel="stylesheet" href="../../assets/vendor/animate/animate.css">

	<link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.min.css">
	<!-- Start WOWSlider.com HEAD section -->
	<!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/engine2/style.css" />
	<script type="text/javascript" src="../../assets/vendor/engine2/jquery.js"></script>
	<script src="../../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="../../assets/css/style.css">

	<!-- End WOWSlider.com HEAD section -->
	<style>
		/* Tabs*/

		section {
			padding: 60px 0;
		}

		section .section-title {
			text-align: center;

			margin-bottom: 50px;
			text-transform: uppercase;
		}

		#tabs {

			color: #B0413E;
		}

		#tabs h6.section-title {
			color: #B0413E;
		}

		#tabs .nav-tabs .nav-item.show .nav-link,
		.nav-tabs .nav-link.active {
			color: #B0413E;
			background-color: transparent;
			border-color: transparent transparent #B0413E;
			border-bottom: 4px solid !important;
			font-size: 20px;
			font-weight: bold;
		}

		#tabs .nav-tabs .nav-link {
			border: 1px solid transparent;
			border-top-left-radius: .25rem;
			border-top-right-radius: .25rem;
			color: #B0413E;
			font-size: 20px;
		}

		footer {
			background-color: #313e50;
			padding-top: 30px;
			border-top: 5px solid rgba(0, 0, 0, 0.1);
		}

		footer p {
			font-size: 16px;
			font-weight: 300;
		}

		.contact-left h3,
		.contact-right h3 {
			color: #fff;
			font-size: 28px;
			font-weight: 700;
		}



		.contact-left p {
			color: #fff;
			margin-bottom: 30px;
		}


		.contact-info {
			background: url("../../assets/images/world-map.png") no-repeat;
			background-size: contain;
		}

		address {
			color: #fff;
		}

		address strong,
		phone-fax-email strong {
			font-size: 16px;
			letter-spacing: 1px;
		}

		.form-control {
			background-color: transparent;
			border-radius: 0;
			color: #fff;
			font-size: 16px;
			font-weight: 300;
			border-color: #fff;
			margin-bottom: 20px;
			padding: 8px 15px;
		}

		.btn-general {
			border: solid 2px #fff;
			border-radius: 0;
			padding: 12px 26px;
			text-transform: uppercase;
			/*    font-weight: bold;*/
		}

		.btn-white {
			color: #fff;
			border-color: #fff;
		}

		.btn-white:hover,
		.btn-white:focus {
			background: #fff;
			color: #313e50;
		}

		/*Image Hovering*/

		.image-hovering {
			position: relative;
			display: inline-block;
			border-radius: 50px;

		}

		.image-hovering .hover {
			position: absolute;
			bottom: 20px;
			margin: 0;
			color: #313e50;
			;
			text-align: center;
			background: #313e50;
			background: rgba(206, 229, 242, 0.8);
			width: 350px;
			height: 192px;
			line-height: 170px;
			padding: 15px;
			box-sizing: border-box;
			display: none;
			text-decoration: none;

		}

		.image-hovering:hover .hover {
			display: block;
		}

	</style>

</head>

<body style="margin:0;background-color:#f9f9f9">

	<nav class="navbar-light bg-light" style="margin-top:20px;margin-left:800px;font-size:16px;">
		<ul class="nav justify-content-left-end">
			<li class="nav-item">
				<a class="nav-link active bit_nav bit_nav1" href="#" style="color:#B0413E ">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active bit_nav" href="#contact" style="color:#B0413E ">Contact</a>
			</li>
            <li class="nav-item ">
				<a class="logout btn bit_button" href="../classes/login/login.php" style="color:#fff;background-color:#b0413e; margin-top:5px;">Log Out</a>
			</li>


		</ul>
	</nav>

	
	<div class="container-fluid" style="margin-top:40px;color:#B0413E;">
	    <div class="content-template" style="height:100%; width:100%; background:#B0413E;color:#ffffff;padding:50px 0;">      
                <div class="content" style="text-align:center;font-size=50px;">
            <h2>Get The Most Amazing Certificates !</h2>
	    </div>
		<h3 style="text-align:center;padding-top:30px;letter-spacing:3px; line-spacing: 2px;">Choose the logo you wish to desire .... <br><br>Click On The The Template For The Preview</h3>
		</div>

		<section id="tabs">
			<div class="container">

				<div class="row">
					<div class="col-xs-12 ">
						<nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist" style="background-color:#f9f9f9; margin-top:50px;">
								<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="color:#B0413E;">Academic</a>
								<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="color:#B0413E">Cultural</a>
								<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false" style="color:#B0413E">Sports</a>
								<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false" style="color:#B0413E">Comptitions</a>
							</div>
						</nav>
						<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								<div class="container-fluid">
									<div class="row">
									
										<div class="col-md-3 col-sm-4 image-hovering " style="height:214px;width:384;margin-right:100px;margin-top:30px;">
										
													<img src="../../assets/images/certificate_templates/t1.png" alt="">
										
									
											<div class="hover zoomIn">
												<a class="btn" href="generation_form.php?template_id=t1" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</a>
											</div>
										</div>
										
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-right:100px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t2.png" alt="">
											<div class="hover zoomIn">
												<a class="btn" href="generation_form.php?template_id=t2" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</a>
											</div>
										</div>

										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t4.png" alt="">
											<div class="hover zoomIn">
												<a class="btn" href="generation_form.php?template_id=t4" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</a>
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-right:100px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t5.png" alt="">
											<div class="hover zoomIn">
												<a class="btn" href="generation_form.php?template_id=t5" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</a>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-right:100px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t6.png" alt="">
											<div class="hover zoomIn">
												<a class="btn" href="generation_form.php?t6" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</a>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t11.png" alt="">
											<div class="hover zoomIn">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>

									</div>


								</div>

							</div>
							<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
								<div class="container-fluid">
									<div class="row ">
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-right:100px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t8.png" alt="">
											<div class="hover animated zoomIn">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-right:100px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t13.png" alt="">
											<div class="hover animated zoomIn">
												<a class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</a>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t10.png" alt="">
											<div class="hover zoomIn">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-right:100px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t11.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-right:100px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t16.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t13.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>

									</div>


								</div>
							</div>
							<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-right:100px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t14.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-right:100px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t5.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t9.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-right:100px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t1.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-right:100px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t17.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t18.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>

									</div>


								</div>
							</div>
							<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-right:100px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t19.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-right:100px;;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t24.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t25.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;;margin-right:100px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t16.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;;margin-right:100px;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t17.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-top:30px;">
											<img src="../../assets/images/certificate_templates/t18.png" alt="">
											<div class="hover">
												<button class="btn" style="width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</button>
											</div>
										</div>
									</div>


								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

	</div>
	<!--Footer-->
	<footer id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contact-left">
						<h3>DigiCerts</h3>
						<p>A place to </p>
						<div class="contact-info">
							<address>
                              <strong>Headquaters:</strong>
                              <p>313, Evergreen CHS.<br>
                              Airoli Sector 15,<br>
                              New Bombay,<br>
                              Mumbai - 55.
                              </p>
                          </address>
							<div class="phone-fax-email">
								<p>
									<strong>Phone:</strong> <span>(719)-778-8804</span>
									<br/>
									<strong>Fax:</strong> <span>(719)-778-8804 8890</span>
									<br/>
									<strong>Email:</strong> <span>info@whitegrapphics.in</span>
									<br/>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="contact-right">
						<h3>Contact Us</h3>
						<form action="#">
							<input type="text" name="full-name" placeholder="Full Name" class="form-control">
							<input type="email" name="email" placeholder="Email Address" class="form-control">
							<textarea name="message" rows="3" placeholder="Your Message..." class="form-control"></textarea>

							<div class="send-btn">
								<a href="#" class="btn btn-lg btn-general btn-white" role="button">Send</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="../../assets/vendor/engine2/wowslider.js"></script>
	<script type="text/javascript" src="../../assets/vendor/engine2/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

</body>

</html>
