<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--plugins-->
	<link href="tema/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="tema/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="tema/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="tema/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="tema/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="tema/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="tema/assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
	<!-- loader-->
	<link href="tema/assets/css/pace.min.css" rel="stylesheet" />
	<script src="tema/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="tema/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="tema/assets/css/app.css" rel="stylesheet">
	<link href="tema/assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="tema/assets/css/dark-theme.css" />
	<link rel="stylesheet" href="tema/assets/css/semi-dark.css" />
	<link rel="stylesheet" href="tema/assets/css/header-colors.css" />
	<title>Asset Management System</title>
</head>

<body onload="info_noti()">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<h4 class="logo-text">IT Asset System</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="index.php">
						<div class="parent-icon"><i class='lni lni-dashboard'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li>
					<a href="asset.php">
						<div class="parent-icon"><i class='bx bx-data'></i>
						</div>
						<div class="menu-title">Asset</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-comment-edit'></i>
						</div>
						<div class="menu-title">Master</div>
					</a>
					<ul>
						<li> <a href="kategori.php"><i class="bx bx-right-arrow-alt"></i>Kategori</a>
						</li>
						<li> <a href="divisi.php"><i class="bx bx-right-arrow-alt"></i>Divisi</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="index.php">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Home</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
							</li>
							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
									<div class="header-notifications-list">
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
									<div class="header-message-list">
									</div>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->