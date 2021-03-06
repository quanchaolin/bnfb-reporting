<!doctype html>
<html class="fixed">
	<head>
		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="" />
		<meta name="description" content="BNFB Online Reporting &amp; Data Repository Tool | CIP">
		<meta name="author" content="">

		<title>Register | BNFB Online Reporting &amp; Data Repository Tool | CIP</title>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="../../../fonts.googleapis.com/cssf1e9.css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/be/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/be/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/be/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/be/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/be/vendor/select2/css/select2.css" />		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/be/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/be/stylesheets/theme.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/be/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>assets/be/vendor/modernizr/modernizr.js"></script>		
		<script src="<?php echo base_url(); ?>assets/be/vendor/style-switcher/style.switcher.localstorage.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="#" class="logo pull-left">
					<img src="<?php echo base_url(); ?>assets/be/images/bnfb-logo.png" height="120" alt="BFNB" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> BNFB Admin Register</h2>
					</div>
					<div class="panel-body">
						<form id="registration_form" action="<?php echo base_url();?>be/auth/register" method="post" role="form" enctype="multipart/form-data">
							<?php if (isset($error)): ?>
			 					<div class="alert alert-danger block-inner">
			                     	<?php echo $error; ?>
			        			</div>               
			                <?php endif; ?>
						
							<!--<div class="alert alert-danger">
								<strong>Username or Password Incorrect</strong>
							</div>-->
							<div class="form-group mb-lg">
								<div class="row">
									<div class="col-sm-6">
										<label>First Name <span class="text-danger">*</span></label>
										<input name="first_name" id="first_name" type="text" class="form-control" required/>
									</div>
									<div class="col-sm-6">
										<label>Last Name <span class="text-danger">*</span></label>
										<input name="last_name" id="last_name" type="text" class="form-control" required/>
									</div>
								</div>
							</div>							
							<div class="form-group mb-lg">
								<label>Email Address <span class="text-danger">*</span></label>
								<div class="input-group input-group-icon">
									<input name="email_address" id="email_address" type="email" class="form-control" required/>
								</div>
							</div>
							<div class="form-group mb-lg">
								<div class="row">
									<div class="col-sm-6">
										<label>Gender</label>
										<select id="gender" name="gender" data-plugin-selectTwo class="form-control populate" title="Please select Gender">
											<option value="">Select Gender</option>
											<option value="Female">Female</option>
											<option value="Male">Male</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label>Country</label>
										<select id="country_id" name="country_id" data-plugin-selectTwo class="form-control populate" title="Please select Country">
											<option value="">Select Country</option>
                                       		<?php foreach($countries as $row): ?>
                                            	<option value="<?php echo $row->country_id; ?>" ><?php echo $row->country_name; ?></option>
                                            <?php endforeach; ?>                       

										</select>
									</div>
								</div>
							</div>							

							<div class="form-group mb-lg">
								<div class="row">
									<div class="col-sm-6">
										<label>Password <span class="text-danger">*</span></label>
										<input name="user_password" id="user_password" type="password" class="form-control" required />
									</div>
									<div class="col-sm-6">
										<label>Confirm Password <span class="text-danger">*</span></label>
										<input name="confirm_password" id="confirm_password" type="password" class="form-control" required />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Register</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Register</button>
								</div>
							</div>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; 2017 International Potato Center | Powered by <a href="http://hypertechsolutions.co.ke" target="_blank">Hypertech Solutions</a></p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?php echo base_url(); ?>assets/be/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jquery-cookie/jquery-cookie.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/style-switcher/style.switcher.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url(); ?>assets/be/vendor/jquery-ui/jquery-ui.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jquery-appear/jquery-appear.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/flot/jquery.flot.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/flot.tooltip/flot.tooltip.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/flot/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/flot/jquery.flot.categories.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/flot/jquery.flot.resize.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jquery-sparkline/jquery-sparkline.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/raphael/raphael.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/morris.js/morris.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/gauge/gauge.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/snap.svg/snap.svg.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/select2/js/select2.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>assets/be/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>assets/be/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/be/javascripts/theme.init.js"></script>

		<script src="<?php echo base_url(); ?>assets/be/javascripts/layouts/examples.header.menu.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/javascripts/dashboard/examples.dashboard.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/javascripts/forms/validation.js"></script>

	</body>
</html>