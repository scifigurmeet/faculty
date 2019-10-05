<?php
    //error_reporting(0);
    include "conn.php";
    session_start();

if(strlen($_SESSION['id']) == 0) {
    echo "<script>window.location = '../';</script>";
}
else {
    $sql = "SELECT name,department FROM personal_details WHERE fac_id ='".$_SESSION['id']."'";
    $result = mysqli_query($con, $sql);
    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
			$dep = $row['department'];
        }
    }
    else {
                echo "<script>alert('ERROR')</script>";
            }
	$sql = "SELECT type FROM q WHERE fac_id ='".$_SESSION['id']."'";
    $result = mysqli_query($con, $sql);
    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
            $type = $row['type'];
        }
    }
    else {
                echo "<script>alert('ERROR')</script>";
            }
	$sql = "SELECT path FROM images WHERE fac_id='".$_SESSION['id']."'";
    $result = mysqli_query($con, $sql);
    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
            $path = $row['path'];
        }
    }
    else {
                echo "<script>alert('ERROR')</script>";
            }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>
			    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
	 <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    
    
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/table_favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/table_bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/table_font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/table_animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/table_select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/table_perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_css/util.css">
	<link rel="stylesheet" type="text/css" href="table_css/main.css">
<!--===============================================================================================-->
    <style>
	.page-wrapper {
		background:#E5E5E5 !important;
	}
            ::-webkit-scrollbar {
        height: 4px !important;
        width: 7px !important;
    }
    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 1px grey; 
        border-radius: 500px;
    }
    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: grey; 
        border-radius: 500px;
    }
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #2d2d2d; 
    }
        .account-dropdown__footer {
            padding: 10px;
            text-align: center;
        }
    </style>
    
    <?php $active = "active"; ?>
    
    
    

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="GNDEC Faculty" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
		<?php
					if($type=="admin"){
						?><li class="<?php if($ok == "all") echo $active; ?> has-sub">
                            <a class="js-arrow" href="all.php">
                                <i class="fas fa-check-square"></i>All Teachers</a>
                        </li>
						<li class="<?php if($ok == "csv") echo $active; ?> has-sub">
                            <a class="js-arrow" href="csv.php">
                                <i class="fas fa-file-text"></i>Export CSV</a>
                        </li>
						<li class="<?php if($ok == "export") echo $active; ?> has-sub">
                            <a class="js-arrow" href="export.php">
                                <i class="fas fa-bar-chart-o"></i>Export Database</a>
                        </li>
						<?php
					}
					else if($type=="hod"){
						?><li class="<?php if($ok == "alld") echo $active; ?> has-sub">
                            <a class="js-arrow" href="all.php">
                                <i class="fas fa-tachometer-alt"></i>Depratment Teachers</a>
                        </li>
						<li class="<?php if($ok == "csv") echo $active; ?> has-sub">
                            <a class="js-arrow" href="csv.php">
                                <i class="fas fa-file-text"></i>Export CSV</a>
                        </li>
						<?php
					}
					?>
                        <li class="<?php if($ok == "index") echo $active; ?> has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Personal Details</a>
                        </li>
                        <li class="<?php if($ok == "instruction") echo $active; ?>">
                            <a href="instructional_work.php">
                                <i class="fas fa-book"></i>Instructional Work</a>
                        </li>
                        <li class="<?php if($ok == "support") echo $active; ?>">
                            <a href="supervisory_support.php">
                                <i class="fas fa-group"></i>Supervisory Support</a>
                        </li>
                        <li class="<?php if($ok == "designation") echo $active; ?>">
                            <a href="designation.php">
                                <i class="fas fa-chalkboard-teacher"></i>Administrative Duties</a>
                        </li>
                        <li class="<?php if($ok == "activity") echo $active; ?>">
                            <a href="activities_organised.php">
                                <i class="fas fa-calendar-alt"></i>Activities</a>
                        </li>
                        <li class="<?php if($ok == "journal") echo $active; ?>">
                            <a href="journal_conferences.php">
                                <i class="fas fa-copy"></i>Journals &amp; Conferences</a>
                        </li>
                        <li class="<?php if($ok == "project") echo $active; ?>">
                                    <a href="sponsored_projects_consultancy.php">
									<i class="fas fa-picture-o"></i>Sponsored Projects &amp; Consultancy</a>
                        </li>
                        <li class="<?php if($ok == "achieve") echo $active; ?>">
                                    <a href="achievement.php">
									<i class="fas fa-star"></i>Achievements &amp; Recognitions</a>
                        </li>
                        <li class="<?php if($ok == "parti") echo $active; ?>">
                                    <a href="participation.php">
									<i class="fas fa-flag-checkered"></i>Participations</a>
                        </li>
                        <li class="<?php if($ok == "additional_duties") echo $active; ?>">
                            <a href="additional_duties.php">
                                <i class="fas fa-gavel"></i>Additional Duties</a>
                        </li>
                        <li class="<?php if($ok == "experience") echo $active; ?>">
                            <a href="experience.php">
                                <i class="fas fa-sun-o"></i>Experience</a>
                        </li>
                        <li class="<?php if($ok == "expert_talks") echo $active; ?>">
                            <a href="expert_talks.php">
                                <i class="fas fa-tasks"></i>Expert Talks</a>
                        </li>
                        <li class="<?php if($ok == "grants") echo $active; ?>">
                            <a href="grants.php">
                                <i class="fas fa-inr"></i>Grants</a>
                        </li>
                        <li class="<?php if($ok == "workshops") echo $active; ?>">
                            <a href="workshops.php">
                                <i class="fas fa-bullhorn"></i>Workshops</a>
                        </li>
                        <li class="<?php if($ok == "membership") echo $active; ?>">
                            <a href="membership.php">
                                <i class="fas fa-globe"></i>Membership</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="images/icon/logo.png" alt="GNDEC Faculty" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
					<?php
					if($type=="admin"){
						?><li class="<?php if($ok == "all") echo $active; ?> has-sub">
                            <a class="js-arrow" href="all.php">
                                <i class="fas fa-check-square"></i>All Teachers</a>
                        </li>
						<li class="<?php if($ok == "csv") echo $active; ?> has-sub">
                            <a class="js-arrow" href="csv.php">
                                <i class="fas fa-file-text"></i>Export CSV</a>
                        </li>
						<li class="<?php if($ok == "export") echo $active; ?> has-sub">
                            <a class="js-arrow" href="export.php">
                                <i class="fas fa-bar-chart-o"></i>Export Database</a>
                        </li>
						<?php
					}
					else if($type=="hod"){
						?><li class="<?php if($ok == "alld") echo $active; ?> has-sub">
                            <a class="js-arrow" href="all.php">
                                <i class="fas fa-tachometer-alt"></i>Depratment Teachers</a>
                        </li>
						<li class="<?php if($ok == "csv") echo $active; ?> has-sub">
                            <a class="js-arrow" href="csv.php">
                                <i class="fas fa-file-text"></i>Export CSV</a>
                        </li>
						<?php
					}
					?>
                        <li class="<?php if($ok == "index") echo $active; ?> has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Personal Details</a>
                        </li>
                        <li class="<?php if($ok == "instruction") echo $active; ?>">
                            <a href="instructional_work.php">
                                <i class="fas fa-book"></i>Instructional Work</a>
                        </li>
                        <li class="<?php if($ok == "support") echo $active; ?>">
                            <a href="supervisory_support.php">
                                <i class="fas fa-group"></i>Supervisory Support</a>
                        </li>
                        <li class="<?php if($ok == "designation") echo $active; ?>">
                            <a href="designation.php">
                                <i class="fas fa-chalkboard-teacher"></i>Administrative Duties</a>
                        </li>
                        <li class="<?php if($ok == "activity") echo $active; ?>">
                            <a href="activities_organised.php">
                                <i class="fas fa-calendar-alt"></i>Activities</a>
                        </li>
                        <li class="<?php if($ok == "journal") echo $active; ?>">
                            <a href="journal_conferences.php">
                                <i class="fas fa-copy"></i>Journals &amp; Conferences</a>
                        </li>
                        <li class="<?php if($ok == "project") echo $active; ?>">
                                    <a href="sponsored_projects_consultancy.php">
									<i class="fas fa-picture-o"></i>Sponsored Projects &amp; Consultancy</a>
                        </li>
                        <li class="<?php if($ok == "achieve") echo $active; ?>">
                                    <a href="achievement.php">
									<i class="fas fa-star"></i>Achievements &amp; Recognitions</a>
                        </li>
                        <li class="<?php if($ok == "parti") echo $active; ?>">
                                    <a href="participation.php">
									<i class="fas fa-flag-checkered"></i>Participations</a>
                        </li>
                        <li class="<?php if($ok == "additional_duties") echo $active; ?>">
                            <a href="additional_duties.php">
                                <i class="fas fa-gavel"></i>Additional Duties</a>
                        </li>
                        <li class="<?php if($ok == "experience") echo $active; ?>">
                            <a href="experience.php">
                                <i class="fas fa-sun-o"></i>Experience</a>
                        </li>
                        <li class="<?php if($ok == "expert_talks") echo $active; ?>">
                            <a href="expert_talks.php">
                                <i class="fas fa-tasks"></i>Expert Talks</a>
                        </li>
                        <li class="<?php if($ok == "grants") echo $active; ?>">
                            <a href="grants.php">
                                <i class="fas fa-inr"></i>Grants</a>
                        </li>
                        <li class="<?php if($ok == "workshops") echo $active; ?>">
                            <a href="workshops.php">
                                <i class="fas fa-bullhorn"></i>Workshops</a>
                        </li>
                        <li class="<?php if($ok == "membership") echo $active; ?>">
                            <a href="membership.php">
                                <i class="fas fa-globe"></i>Membership</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="all.php" method="GET" <?php if($type=="prof"){ echo ' style="visibility: hidden;"';} ?>>
                                <input class="au-input au-input--xl" type="text" style="padding:0px !important; background:white;" name="search" placeholder="Search for Faculty Members" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
							<?php if($type=="admin"){ $word = "ADMIN"; $style="danger";} 
							else if($type=="hod"){ $word = "HOD"; $style="success";} 
							else { $word = "PROFESSOR"; $style= "primary";}?>
							<div class="btn btn-<?php echo $style; ?>"><?php echo $word; ?> PANEL</div>
                                <div class="noti-wrap" style="visibility: hidden;">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="fac-images/<?php echo $path; ?>" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $name; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="fac-images/<?php echo $path; ?>" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $name; ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $dep; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="pic.php">
                                                        <i class="zmdi zmdi-settings"></i>Update Profile Picture</a>
                                                </div>
												<?php
												if(isset($_SESSION["orignal"])){
													?>
													<div class="account-dropdown__item">
													<form method="POST" action="smart.php">
                                                    <a><button name="goback">
                                                        <i class="zmdi zmdi-settings"></i>Go Back To Admin</button></a>
													</form>
                                                </div>
													<?php
												}
												?>
                                             </div>
                                            <div class="account-dropdown__footer">
                                                <form method="post">
                                                <button type="submit" name="logout">
                                                    <i class="zmdi zmdi-power"></i> Logout</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- END PAGE CONTAINER-->
        <?php
                if(isset($_POST['logout'])) {
                    session_destroy();
                    echo "<script>window.location = '../';</script>";
                }}
            ?>