<?php include('templates/header_page.php');?>
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner">
				<img src="images/shape/13.png" alt="" class="bg-shape">
				<!-- <img src="images/shape/dancer3.png" alt="" class="shape-one">
				<img src="images/shape/dancer.png" alt="" class="shape-two"> -->
				<!-- <img src="images/shape/dancer2.png" alt="" class="shape-three"> -->
				<div class="container">
					<h2 class="title">Contact</h2>
				</div> <!-- /.container -->
			</div> <!-- /.theme-inner-banner -->



			<!--
			=====================================================
				Conatact Us
			=====================================================
			-->
			<div class="section-spacing section-spacing-bottom">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 order-md-last">
							<div class="contact-address">
								<h6 class="title">Easy Contact</h6>
								<ul>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<h6>Email:</h6>
										<p>info@yourdomain.com</p>
									</li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<h6>+1 (585) 584-1914</h6>
										<h6>+1 (917) 332-8474</h6>
										<p>Monday–Friday 9am-6pm</p>
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<h6>Address</h6>
										<p>1029 Brighton Beach Ave Brooklyn, NY 11235-5603</p>
										<p><strong>We are in Master Theater, 2nd floor, backstage on the right side</strong></p>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-8 col-md-6 order-md-first">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3030.3314240509912!2d-73.96069498459912!3d40.57843927934667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2446a1d8c2735%3A0xce9f22c5d62cacaf!2zMTAyOSBCcmlnaHRvbiBCZWFjaCBBdmUsIEJyb29rbHluLCBOWSAxMTIzNSwg0KHQqNCQ!5e0!3m2!1sru!2sru!4v1576090142029!5m2!1sru!2sru" width="100%" height="470" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							<!-- <div class="google-map">
								<div class="map-canvas"></div>
							</div> -->
						</div>
					</div>

					<div class="row contact-form">
						<div class="col-12">
							<form action="inc/sendemail.php" class="form-validation" autocomplete="off">
								<h5 class="title">Get In Touch With Us</h5>
								<div class="row">
									<div class="col-md-6">
										<input type="text" placeholder="Your Name *" name="name">
									</div>
									<div class="col-md-6">
										<input type="email" placeholder="Your Email *" name="email">
									</div>
								</div>
								<textarea placeholder="Type your message" name="message"></textarea>
								<button>Submit Request</button>
							</form>
						</div>
						<!-- <div class="col-lg-3 col-md-4">
							<div class="contact-meta-data">
								<h6 class="title">Meta</h6>
								<ul>
									<li><a href="#">Log in</a></li>
									<li><a href="#">Entries RSS</a></li>
									<li><a href="#">Comments RSS</a></li>
									<li><a href="#">WordPress.org</a></li>
									<li><a href="#">Team</a></li>
								</ul>
							</div> 
						</div> -->
					</div>

					<!--Contact Form Validation Markup -->
					<!-- Contact alert -->
					<div class="alert-wrapper" id="alert-success">
						<div id="success">
							<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
							<div class="wrapper">
				               	<p>Your message was sent successfully.</p>
				             </div>
				        </div>
				    </div> <!-- End of .alert_wrapper -->
				    <div class="alert-wrapper" id="alert-error">
				        <div id="error">
				           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
				           	<div class="wrapper">
				               	<p>Sorry!Something Went Wrong.</p>
				            </div>
				        </div>
				    </div> <!-- End of .alert_wrapper -->
				</div>
			</div>
			

<?php include('templates/footer.php');?>