<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Orange Websupport</title>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/tp-favicon.png">


	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
	<!-- Cusom css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.dropdown {
			position: relative;
			display: inline-block;
			z-index: 1;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
			background: #fff;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			z-index: 1;
		}

		.dropdown-content a:hover {
			background-color: #ddd;
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.nw-footer-list {
			padding: 0 0px;
		}

		.nw-footer-list li {
			position: relative;
			padding: 3px 0;
			clear: both;
			display: block;
			font-weight: 300;
		}

		.nw-footer-list li::after {
			content: "";
			width: 203px;
			height: 1px;
			background-color: #868484;
			position: absolute;
			bottom: 0;
			margin: auto;
			left: 0;
			right: 0;
		}

		.nw-footer-list li:last-child:after {
			content: ".";
			display: none;
		}

		.li-list-nw {
			display: block;
			clear: both;
			margin-bottom: 15px;
			line-height: 16px;
			font-weight: 300;
		}

		.footer-align {
			float: right;

		}

		.footer-align li {
			float: left;
		}

		.ftr-icon {
			background-color: #fff;
			font-size: 14px;
			text-align: center;
			border-radius: 4px;
			color: #333 !important;
			margin: 0 3px;
			width: 20px;
			height: 20px;
			display: block;
			line-height: 20px;
		}

		.site-footer {
			padding: 10px 0 0 !important;
			background-color: #333 !important;
		}

		.footer_inner {
			padding: 10px 30px 0 !important;
		}

		.nw-ft-img {
			width: 60%;
			float: right;
			margin-bottom: 30px;
		}

		.nw-img {
			width: 52%;
			margin: auto;
			display: block;
		}

		.nw-img-1 {
			width: 100%;
			margin: 0;
			display: block;
			margin-top: 10px;
		}
	</style>
</head>

<body>
	<div class="wrapper" id="wrapper">

		<!-- header start -->
		<header id="header">
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-expand-lg navbar-light navbar-cust">
				<div class="container">
					<div class="navbar-header d-flex col">
						<a class="navbar-brand" href="https://www.orangeeducation.in/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/<?php echo $logo1['file_name']; ?>" width="30%" /></a>
					</div>

					<div class="navbar-header d-flex col">
						<img src="assets/img/tp-logo.png" alt="Touchpad">
						<!--<h6 class="web_url"><a href="http://www.thetouchpad.com/">www.thetouchpad.com</a></h6>-->
					</div>

					<div id="navbarCollapse" class="navbar-collapse justify-content-start collapse">

						<ul class="nav navbar-nav navbar-right ml-auto user-noti dropdown">
							<li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>

						</ul>
					</div>
				</div>
			</nav>
		</header>
		<?php if ($this->session->flashdata('success')) { ?>

			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close"> </a>
				<strong><?php echo $this->session->flashdata('success'); ?></strong>
			</div>

		<?php } ?>

		<?php if ($this->session->flashdata('error')) { ?>

			<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert" aria-label="close"> </a>
				<strong><?php echo $this->session->flashdata('error'); ?></strong>
			</div>

		<?php } ?>