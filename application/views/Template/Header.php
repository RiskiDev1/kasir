<!DOCTYPE html>
<html lang="en">

<head>
	<title>Raphael </title>
	<!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description"
		content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords"
		content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
	<meta name="author" content="codedthemes" />
	<!-- Favicon icon -->
	<link rel="icon" href="<?= base_url('assets')?>/images/favicon.ico" type="image/x-icon">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
	<!-- waves.css -->
	<link rel="stylesheet" href="<?= base_url('assets')?>/pages/waves/css/waves.min.css" type="text/css" media="all">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets')?>/css/bootstrap/css/bootstrap.min.css">
	<!-- waves.css -->
	<link rel="stylesheet" href="<?= base_url('assets')?>/pages/waves/css/waves.min.css" type="text/css" media="all">
	<!-- themify icon -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets')?>/icon/themify-icons/themify-icons.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets')?>/icon/font-awesome/css/font-awesome.min.css">
	<!-- scrollbar.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets')?>/css/jquery.mCustomScrollbar.css">
	<!-- am chart export.css -->
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
		media="all" />
	<!-- Style.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets')?>/css/style.css">
</head>

<body>
	<!-- Pre-loader start -->
	<div class="theme-loader">
		<div class="loader-track">
			<div class="preloader-wrapper">
				<div class="spinner-layer spinner-blue">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
				<div class="spinner-layer spinner-red">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>

				<div class="spinner-layer spinner-yellow">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>

				<div class="spinner-layer spinner-green">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pre-loader end -->
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">
			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">
					<div class="navbar-logo">
						<a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
							<i class="ti-menu"></i>
						</a>
						<div class="mobile-search waves-effect waves-light">
							<div class="header-search">
								<div class="main-search morphsearch-search">
									<div class="input-group">
										<span class="input-group-addon search-close"><i class="ti-close"></i></span>
										<input type="text" class="form-control" placeholder="Enter Keyword">
										<span class="input-group-addon search-btn"><i class="ti-search"></i></span>
									</div>
								</div>
							</div>
						</div>
						<a href="index.html">
							<img class="img-fluid" src="<?= base_url('assets')?>/images/logo.png" alt="Theme-Logo" />
						</a>
						<a class="mobile-options waves-effect waves-light">
							<i class="ti-more"></i>
						</a>
					</div>

					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li>
								<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
								</div>
							</li>
						</ul>
						
						<ul class="nav-right">
							<li class="header-notification">
								<a href="#!" class="waves-effect waves-light">
									<i class="ti-bell"></i>
									<span class="badge bg-c-red"></span>
								</a>
								<ul class="show-notification">
									<li>
										<h6>Notifications</h6>
										<label class="label label-danger">New</label>
									</li>
									<li class="waves-effect waves-light">
										<div class="media">
											<img class="d-flex align-self-center img-radius"
												src="<?= base_url('assets')?>/images/avatar-2.jpg" alt="Generic placeholder image">
											<div class="media-body">
												<h5 class="notification-user">John Doe</h5>
												<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
													elit.</p>
												<span class="notification-time">30 minutes ago</span>
											</div>
										</div>
									</li>
									<li class="waves-effect waves-light">
										<div class="media">
											<img class="d-flex align-self-center img-radius"
												src="<?= base_url('assets')?>/images/avatar-4.jpg" alt="Generic placeholder image">
											<div class="media-body">
												<h5 class="notification-user">Joseph William</h5>
												<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
													elit.</p>
												<span class="notification-time">30 minutes ago</span>
											</div>
										</div>
									</li>
									<li class="waves-effect waves-light">
										<div class="media">
											<img class="d-flex align-self-center img-radius"
												src="<?= base_url('assets')?>/images/avatar-3.jpg" alt="Generic placeholder image">
											<div class="media-body">
												<h5 class="notification-user">Sara Soudein</h5>
												<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
													elit.</p>
												<span class="notification-time">30 minutes ago</span>
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li class="user-profile header-notification">
								<a href="#!" class="waves-effect waves-light">
									<img src="<?= base_url('assets')?>/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
									<span>John Doe</span>
									<i class="ti-angle-down"></i>
								</a>
								<ul class="show-notification profile-notification">
									<li class="waves-effect waves-light">
										<a href="#!">
											<i class="ti-settings"></i> Settings
										</a>
									</li>
									<li class="waves-effect waves-light">
										<a href="user-profile.html">
											<i class="ti-user"></i> Profile
										</a>
									</li>
									<li class="waves-effect waves-light">
										<a href="email-inbox.html">
											<i class="ti-email"></i> My Messages
										</a>
									</li>
									<li class="waves-effect waves-light">
										<a href="auth-lock-screen.html">
											<i class="ti-lock"></i> Lock Screen
										</a>
									</li>
									<li class="waves-effect waves-light">
										<a href="auth-normal-sign-in.html">
											<i class="ti-layout-sidebar-left"></i> Logout
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					<nav class="pcoded-navbar">
						<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
						<div class="pcoded-inner-navbar main-menu">
							<div class="">
								<div class="main-menu-header">
									<img class="img-80 img-radius" src="<?= base_url('assets')?>/images/avatar-4.jpg"
										alt="User-Profile-Image">
									<div class="user-details">
										<span id="more-details">John Doe<i class="fa fa-caret-down"></i></span>
									</div>
								</div>

								<div class="main-menu-content">
									<ul>
										<li class="more-details">
											<a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
											<a href="#!"><i class="ti-settings"></i>Settings</a>
											<a href="auth-normal-sign-in.html"><i
													class="ti-layout-sidebar-left"></i>Logout</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="p-15 p-b-0">
								<form class="form-material">
									<div class="form-group form-primary">
										<input type="text" name="footer-email" class="form-control" required="">
										<span class="form-bar"></span>
										<label class="float-label"><i class="fa fa-search m-r-10"></i>Search
											Friend</label>
									</div>
								</form>
							</div>
							<div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="">
									<a href="<?= base_url('Dashboard') ?>" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa-solid fa-house"></i><b>D</b></span>
										<span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>

								<li class="">
									<a href="<?= base_url('Pelanggan') ?>" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa-solid fa-user"></i></span>
										<span class="pcoded-mtext"
											data-i18n="nav.basic-components.main">Pelanggan</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>

								<li class="">
									<a href="<?= base_url('Produk') ?>" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa-solid fa-cart-shopping"></i><b>D</b></span>
										<span class="pcoded-mtext" data-i18n="nav.dash.main">Produk</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>

								<li class="">
									<a href="<?= base_url('Penjualan') ?>" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa-solid fa-wallet"></i><b>D</b></span>
										<span class="pcoded-mtext" data-i18n="nav.dash.main">Penjualan</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>

							</ul>
						</div>
					</nav>
