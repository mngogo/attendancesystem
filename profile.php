<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="css/separate/vendor/slick.min.css">
<link rel="stylesheet" href="css/separate/pages/profile.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

	<header class="site-header">
	    <div class="container-fluid">
	
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="img/logo-2.png" alt="">
	            <img class="hidden-lg-up" src="img/logo-2-mob.png" alt="">
	        </a>
	
	        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	            <span>toggle menu</span>
	        </button>
	
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                    <div class="dropdown dropdown-notification notif">
	                        <a href="#"
	                           class="header-alarm dropdown-toggle active"
	                           id="dd-notification"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-alarm"></i>
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
	                            <div class="dropdown-menu-notif-header">
	                                Notifications
	                                <span class="label label-pill label-danger">4</span>
	                            </div>
	                            <div class="dropdown-menu-notif-list">
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-1.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Morgan</a> was bothering about something
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-2.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Lioneli</a> had commented on this <a href="#">Super Important Thing</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-3.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Xavier</a> had commented on the <a href="#">Movie title</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-4.jpg" alt="">
	                                    </div>
	                                    <a href="#">Lionely</a> wants to go to <a href="#">Cinema</a> with you to see <a href="#">This Movie</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="#">See more</a>
	                            </div>
	                        </div>
	                    </div>
	
	                    <div class="dropdown dropdown-notification messages">
	                        <a href="#"
	                           class="header-alarm dropdown-toggle active"
	                           id="dd-messages"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-mail"></i>
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-messages" aria-labelledby="dd-messages">
	                            <div class="dropdown-menu-messages-header">
	                                <ul class="nav" role="tablist">
	                                    <li class="nav-item">
	                                        <a class="nav-link active"
	                                           data-toggle="tab"
	                                           href="#tab-incoming"
	                                           role="tab">
	                                            Inbox
	                                            <span class="label label-pill label-danger">8</span>
	                                        </a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link"
	                                           data-toggle="tab"
	                                           href="#tab-outgoing"
	                                           role="tab">Outbox</a>
	                                    </li>
	                                </ul>
	                                <!--<button type="button" class="create">
	                                    <i class="font-icon font-icon-pen-square"></i>
	                                </button>-->
	                            </div>
	                            <div class="tab-content">
	                                <div class="tab-pane active" id="tab-incoming" role="tabpanel">
	                                    <div class="dropdown-menu-messages-list">
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Christian Burton</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Christian Burton</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something...</span>
	                                        </a>
	                                    </div>
	                                </div>
	                                <div class="tab-pane" id="tab-outgoing" role="tabpanel">
	                                    <div class="dropdown-menu-messages-list">
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Christian Burton</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something...</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Christian Burtons</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="#">See more</a>
	                            </div>
	                        </div>
	                    </div>
	
	                    <div class="dropdown dropdown-lang">
	                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <span class="flag-icon flag-icon-us"></span>
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right">
	                            <div class="dropdown-menu-col">
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ru"></span>Русский</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-de"></span>Deutsch</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-it"></span>Italiano</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-es"></span>Español</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-pl"></span>Polski</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-li"></span>Lietuviu</a>
	                            </div>
	                            <div class="dropdown-menu-col">
	                                <a class="dropdown-item current" href="#"><span class="flag-icon flag-icon-us"></span>English</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr"></span>Français</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-by"></span>Беларускi</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ua"></span>Українська</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-cz"></span>Česky</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ch"></span>中國</a>
	                            </div>
	                        </div>
	                    </div>
	
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="img/avatar-2-64.png" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
	                        </div>
	                    </div>
	
	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div><!--.site-header-shown-->
	
	                <div class="mobile-menu-right-overlay"></div>
	                <div class="site-header-collapsed">
	                    <div class="site-header-collapsed-in">
	                        <div class="dropdown dropdown-typical">
	                            <div class="dropdown-menu" aria-labelledby="dd-header-sales">
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-marketing" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="font-icon font-icon-cogwheel"></span>
	                                <span class="lbl">Marketing automation</span>
	                            </a>
	
	                            <div class="dropdown-menu" aria-labelledby="dd-header-marketing">
	                                <a class="dropdown-item" href="#">Current Search</a>
	                                <a class="dropdown-item" href="#">Search for Issues</a>
	                                <div class="dropdown-divider"></div>
	                                <div class="dropdown-header">Recent issues</div>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                                <div class="dropdown-more">
	                                    <div class="dropdown-more-caption padding">more...</div>
	                                    <div class="dropdown-more-sub">
	                                        <div class="dropdown-more-sub-in">
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="dropdown-divider"></div>
	                                <a class="dropdown-item" href="#">Import Issues from CSV</a>
	                                <div class="dropdown-divider"></div>
	                                <div class="dropdown-header">Filters</div>
	                                <a class="dropdown-item" href="#">My Open Issues</a>
	                                <a class="dropdown-item" href="#">Reported by Me</a>
	                                <div class="dropdown-divider"></div>
	                                <a class="dropdown-item" href="#">Manage filters</a>
	                                <div class="dropdown-divider"></div>
	                                <div class="dropdown-header">Timesheet</div>
	                                <a class="dropdown-item" href="#">Subscribtions</a>
	                            </div>
	                        </div>
	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-social" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="font-icon font-icon-share"></span>
	                                <span class="lbl">Social media</span>
	                            </a>
	
	                            <div class="dropdown-menu" aria-labelledby="dd-header-social">
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="dropdown dropdown-typical">
	                            <a href="#" class="dropdown-toggle no-arr">
	                                <span class="font-icon font-icon-page"></span>
	                                <span class="lbl">Projects</span>
	                                <span class="label label-pill label-danger">35</span>
	                            </a>
	                        </div>
	
	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-form-builder" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="font-icon font-icon-pencil"></span>
	                                <span class="lbl">Form builder</span>
	                            </a>
	
	                            <div class="dropdown-menu" aria-labelledby="dd-header-form-builder">
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="dropdown">
	                            <button class="btn btn-rounded dropdown-toggle" id="dd-header-add" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                Add
	                            </button>
	                            <div class="dropdown-menu" aria-labelledby="dd-header-add">
	                                <a class="dropdown-item" href="#">Quant and Verbal</a>
	                                <a class="dropdown-item" href="#">Real Gmat Test</a>
	                                <a class="dropdown-item" href="#">Prep Official App</a>
	                                <a class="dropdown-item" href="#">CATprer Test</a>
	                                <a class="dropdown-item" href="#">Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="help-dropdown">
	                            <button type="button">
	                                <i class="font-icon font-icon-help"></i>
	                            </button>
	                            <div class="help-dropdown-popup">
	                                <div class="help-dropdown-popup-side">
	                                    <ul>
	                                        <li><a href="#">Getting Started</a></li>
	                                        <li><a href="#" class="active">Creating a new project</a></li>
	                                        <li><a href="#">Adding customers</a></li>
	                                        <li><a href="#">Settings</a></li>
	                                        <li><a href="#">Importing data</a></li>
	                                        <li><a href="#">Exporting data</a></li>
	                                    </ul>
	                                </div>
	                                <div class="help-dropdown-popup-cont">
	                                    <div class="help-dropdown-popup-cont-in">
	                                        <div class="jscroll">
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum is simply
	                                                <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Contrary to popular belief
	                                                <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                The point of using Lorem Ipsum
	                                                <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum
	                                                <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum is simply
	                                                <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Contrary to popular belief
	                                                <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                The point of using Lorem Ipsum
	                                                <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum
	                                                <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum is simply
	                                                <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Contrary to popular belief
	                                                <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                The point of using Lorem Ipsum
	                                                <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum
	                                                <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
	                                            </a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div><!--.help-dropdown-->
	                        <a class="btn btn-nav btn-rounded btn-inline btn-danger-outline" href="http://themeforest.net/item/startui-premium-bootstrap-4-admin-dashboard-template/15228250">
	                            Buy Theme
	                        </a>
	                        <div class="site-header-search-container">
	                            <form class="site-header-search closed">
	                                <input type="text" placeholder="Search"/>
	                                <button type="submit">
	                                    <span class="font-icon-search"></span>
	                                </button>
	                                <div class="overlay"></div>
	                            </form>
	                        </div>
	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-lg-pull-6 col-md-6 col-sm-6">
					<section class="box-typical">
						<div class="profile-card">
							<div class="profile-card-photo">
								<img src="img/photo-220-1.jpg" alt=""/>
							</div>
							<div class="profile-card-name">Sarah Sanchez</div>
							<div class="profile-card-status">Company Founder</div>
							<div class="profile-card-location">Greater Seattle Area</div>
							<button type="button" class="btn btn-rounded">Follow</button>
							<div class="btn-group">
								<button type="button"
										class="btn btn-rounded btn-primary-outline dropdown-toggle"
										data-toggle="dropdown"
										aria-haspopup="true"
										aria-expanded="false">
									Connect
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
								</div>
							</div>
						</div><!--.profile-card-->

						<div class="profile-statistic tbl">
							<div class="tbl-row">
								<div class="tbl-cell">
									<b>200</b>
									Connections
								</div>
								<div class="tbl-cell">
									<b>1.9M</b>
									Followers
								</div>
							</div>
						</div>

						<ul class="profile-links-list">
							<li class="nowrap">
								<i class="font-icon font-icon-earth-bordered"></i>
								<a href="#">example.com</a>
							</li>
							<li class="nowrap">
								<i class="font-icon font-icon-fb-fill"></i>
								<a href="#">facebook.com/example</a>
							</li>
							<li class="nowrap">
								<i class="font-icon font-icon-vk-fill"></i>
								<a href="#">vk.com/example</a>
							</li>
							<li class="nowrap">
								<i class="font-icon font-icon-in-fill"></i>
								<a href="#">linked.in/example</a>
							</li>
							<li class="nowrap">
								<i class="font-icon font-icon-tw-fill"></i>
								<a href="#">twitter.com/example</a>
							</li>
							<li class="divider"></li>
							<li>
								<i class="font-icon font-icon-pdf-fill"></i>
								<a href="#">Export page as PDF</a>
							</li>
						</ul>
					</section><!--.box-typical-->

					<section class="box-typical">
						<header class="box-typical-header-sm">
							Friends
							&nbsp;
							<a href="#" class="full-count">268</a>
						</header>
						<div class="friends-list">
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-2.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name status-online"><a href="#">Dan Cederholm</a></p>
											<p class="user-card-row-location">New York</p>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-1.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Oykun Yilmaz</a></p>
											<p class="user-card-row-location">Los Angeles</p>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-3.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Bill S Kenney</a></p>
											<p class="user-card-row-location">Cardiff</p>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-4.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Maggy Smith</a></p>
											<p class="user-card-row-location">Dusseldorf</p>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-2.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Dan Cederholm</a></p>
											<p class="user-card-row-location">New York</p>
										</div>
									</div>
								</div>
							</article>
						</div>
					</section><!--.box-typical-->
				</div><!--.col- -->

				<div class="col-lg-6 col-lg-push-3 col-md-12">
					<form class="box-typical">
						<input type="text" class="write-something" placeholder="Write Something..."/>
						<div class="box-typical-footer">
							<div class="tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<button type="button" class="btn-icon">
											<i class="font-icon font-icon-earth"></i>
										</button>
										<button type="button" class="btn-icon">
											<i class="font-icon font-icon-picture"></i>
										</button>
										<button type="button" class="btn-icon">
											<i class="font-icon font-icon-calend"></i>
										</button>
										<button type="button" class="btn-icon">
											<i class="font-icon font-icon-video-fill"></i>
										</button>
									</div>
									<div class="tbl-cell tbl-cell-action">
										<button type="submit" class="btn btn-rounded">Send</button>
									</div>
								</div>
							</div>
						</div>
					</form><!--.box-typical-->

					<section class="box-typical">
						<header class="box-typical-header-sm">
							Posts
							<div class="slider-arrs">
								<button type="button" class="posts-slider-prev">
									<i class="font-icon font-icon-arrow-left"></i>
								</button>
								<button type="button" class="posts-slider-next">
									<i class="font-icon font-icon-arrow-right"></i>
								</button>
							</div>
						</header>
						<div class="posts-slider">
							<div class="slide">
								<article class="post-announce">
									<div class="post-announce-pic">
										<a href="#">
											<img src="img/post-1.jpeg" alt="">
										</a>
									</div>
									<div class="post-announce-title">
										<a href="#">3 Myths That Confuse the D Myths That Confuse the D Myths That Confuse the D</a>
									</div>
									<div class="post-announce-date">Februrary 19, 2016</div>
									<ul class="post-announce-meta">
										<li>
											<i class="font-icon font-icon-eye"></i>
											18
										</li>
										<li>
											<i class="font-icon font-icon-heart"></i>
											5K
										</li>
										<li>
											<i class="font-icon font-icon-comment"></i>
											3K
										</li>
									</ul>
								</article>
							</div><!--.slide-->
							<div class="slide">
								<article class="post-announce">
									<div class="post-announce-pic">
										<a href="#">
											<img src="img/post-2.jpg" alt="">
										</a>
									</div>
									<div class="post-announce-title">
										<a href="#">How Much Do We Spend on How Much Do We Spend on How Much Do We Spend on </a>
									</div>
									<div class="post-announce-date">January 21, 2016</div>
									<ul class="post-announce-meta">
										<li>
											<i class="font-icon font-icon-eye"></i>
											18
										</li>
										<li>
											<i class="font-icon font-icon-heart"></i>
											5K
										</li>
										<li>
											<i class="font-icon font-icon-comment"></i>
											3K
										</li>
									</ul>
								</article>
							</div><!--.slide-->
							<div class="slide">
								<article class="post-announce">
									<div class="post-announce-pic">
										<a href="#">
											<img src="img/post-3.jpeg" alt="">
										</a>
									</div>
									<div class="post-announce-title">
										<a href="#">Good News You Might Have Good News You Might Have Good News You Might Have </a>
									</div>
									<div class="post-announce-date">December 30, 2016</div>
									<ul class="post-announce-meta">
										<li>
											<i class="font-icon font-icon-eye"></i>
											18
										</li>
										<li>
											<i class="font-icon font-icon-heart"></i>
											5K
										</li>
										<li>
											<i class="font-icon font-icon-comment"></i>
											3K
										</li>
									</ul>
								</article>
							</div><!--.slide-->
							<div class="slide">
								<article class="post-announce">
									<div class="post-announce-pic">
										<a href="#">
											<img src="img/post-1.jpeg" alt="">
										</a>
									</div>
									<div class="post-announce-title">
										<a href="#">3 Myths That Confuse the D Myths That Confuse the D Myths That Confuse the D</a>
									</div>
									<div class="post-announce-date">Februrary 19, 2016</div>
									<ul class="post-announce-meta">
										<li>
											<i class="font-icon font-icon-eye"></i>
											18
										</li>
										<li>
											<i class="font-icon font-icon-heart"></i>
											5K
										</li>
										<li>
											<i class="font-icon font-icon-comment"></i>
											3K
										</li>
									</ul>
								</article>
							</div><!--.slide-->
							<div class="slide">
								<article class="post-announce">
									<div class="post-announce-pic">
										<a href="#">
											<img src="img/post-2.jpg" alt="">
										</a>
									</div>
									<div class="post-announce-title">
										<a href="#">How Much Do We Spend on How Much Do We Spend on How Much Do We Spend on </a>
									</div>
									<div class="post-announce-date">January 21, 2016</div>
									<ul class="post-announce-meta">
										<li>
											<i class="font-icon font-icon-eye"></i>
											18
										</li>
										<li>
											<i class="font-icon font-icon-heart"></i>
											5K
										</li>
										<li>
											<i class="font-icon font-icon-comment"></i>
											3K
										</li>
									</ul>
								</article>
							</div><!--.slide-->
							<div class="slide">
								<article class="post-announce">
									<div class="post-announce-pic">
										<a href="#">
											<img src="img/post-3.jpeg" alt="">
										</a>
									</div>
									<div class="post-announce-title">
										<a href="#">Good News You Might Have Good News You Might Have Good News You Might Have </a>
									</div>
									<div class="post-announce-date">December 30, 2016</div>
									<ul class="post-announce-meta">
										<li>
											<i class="font-icon font-icon-eye"></i>
											18
										</li>
										<li>
											<i class="font-icon font-icon-heart"></i>
											5K
										</li>
										<li>
											<i class="font-icon font-icon-comment"></i>
											3K
										</li>
									</ul>
								</article>
							</div><!--.slide-->
						</div><!--.posts-slider-->
					</section><!--.box-typical-->

					<section class="box-typical">
						<header class="box-typical-header-sm">Background</header>
						<article class="profile-info-item">
							<header class="profile-info-item-header">
								<i class="font-icon font-icon-notebook-bird"></i>
								Summary
							</header>
							<div class="text-block text-block-typical">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
							</div>
						</article><!--.profile-info-item-->

						<article class="profile-info-item">
							<header class="profile-info-item-header">
								<i class="font-icon font-icon-case"></i>
								Experience
							</header>
							<ul class="exp-timeline">
								<li class="exp-timeline-item">
									<div class="dot"></div>
									<div class="tbl">
										<div class="tbl-row">
											<div class="tbl-cell">
												<div class="exp-timeline-range">2000 President</div>
												<div class="exp-timeline-status">Co-founder, Chairman</div>
												<div class="exp-timeline-location"><a href="#">Company</a></div>
											</div>
											<div class="tbl-cell tbl-cell-logo">
												<img src="img/logo-2.png" alt="">
											</div>
										</div>
									</div>
								</li>
								<li class="exp-timeline-item">
									<div class="dot"></div>
									<div class="tbl">
										<div class="tbl-row">
											<div class="tbl-cell">
												<div class="exp-timeline-range">1992–1999</div>
												<div class="exp-timeline-status">Senior Developer</div>
												<div class="exp-timeline-location"><a href="#">YouTube</a></div>
											</div>
											<div class="tbl-cell tbl-cell-logo">
												<img src="img/logo-2.png" alt="">
											</div>
										</div>
									</div>
								</li>
								<li class="exp-timeline-item">
									<div class="dot"></div>
									<div class="tbl">
										<div class="tbl-row">
											<div class="tbl-cell">
												<div class="exp-timeline-range">2000 President</div>
												<div class="exp-timeline-status">Co-founder, Chairman</div>
												<div class="exp-timeline-location"><a href="#">Company</a></div>
											</div>
											<div class="tbl-cell tbl-cell-logo">
												<img src="img/logo-2.png" alt="">
											</div>
										</div>
									</div>
								</li>
							</ul>
						</article><!--.profile-info-item-->

						<article class="profile-info-item">
							<header class="profile-info-item-header">
								<i class="font-icon font-icon-award"></i>
								Edication
							</header>
							<ul class="exp-timeline">
								<li class="exp-timeline-item">
									<div class="dot"></div>
									<div class="tbl">
										<div class="tbl-row">
											<div class="tbl-cell">
												<div class="exp-timeline-range">1973 – 1975</div>
												<div class="exp-timeline-status">Harvard University</div>
												<div class="exp-timeline-location"><a href="#">BS Computer Science</a></div>
											</div>
											<div class="tbl-cell tbl-cell-logo">
												<img src="img/logo-2.png" alt="">
											</div>
										</div>
									</div>
								</li>
								<li class="exp-timeline-item">
									<div class="dot"></div>
									<div class="tbl">
										<div class="tbl-row">
											<div class="tbl-cell">
												<div class="exp-timeline-range">1960 – 1973</div>
												<div class="exp-timeline-status">Lakeside Scool, Seattle</div>
											</div>
											<div class="tbl-cell tbl-cell-logo">
												<img src="img/logo-2.png" alt="">
											</div>
										</div>
									</div>
								</li>
							</ul>
						</article><!--.profile-info-item-->

						<article class="profile-info-item">
							<header class="profile-info-item-header">
								<i class="font-icon font-icon-lamp"></i>
								Skills
							</header>

							<section class="skill-item tbl">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-num">
										<div class="skill-circle skill-circle-num">74</div>
									</div>
									<div class="tbl-cell tbl-cell-txt">Social Media Marketing</div>
									<div class="tbl-cell tbl-cell-users">
										<img class="skill-user-photo" src="img/avatar-1-64.png" alt=""/>
										<img class="skill-user-photo" src="img/photo-64-3.jpg" alt=""/>
										<img class="skill-user-photo" src="img/photo-64-4.jpg" alt=""/>
										<div class="skill-circle skill-circle-users">+74</div>
									</div>
								</div>
							</section><!--.skill-item-->

							<section class="skill-item tbl">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-num">
										<div class="skill-circle skill-circle-num">67</div>
									</div>
									<div class="tbl-cell tbl-cell-txt">Web Development</div>
									<div class="tbl-cell tbl-cell-users">
										<img class="skill-user-photo" src="img/avatar-2-64.png" alt=""/>
										<img class="skill-user-photo" src="img/photo-64-2.jpg" alt=""/>
										<img class="skill-user-photo" src="img/photo-64-3.jpg" alt=""/>
										<div class="skill-circle skill-circle-users">+82</div>
									</div>
								</div>
							</section><!--.skill-item-->

							<section class="skill-item tbl">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-num">
										<div class="skill-circle skill-circle-num">25</div>
									</div>
									<div class="tbl-cell tbl-cell-txt">Search Engine Optimization</div>
									<div class="tbl-cell tbl-cell-users">
										<img class="skill-user-photo" src="img/avatar-3-64.png" alt=""/>
										<img class="skill-user-photo" src="img/photo-64-1.jpg" alt=""/>
										<img class="skill-user-photo" src="img/photo-64-2.jpg" alt=""/>
										<div class="skill-circle skill-circle-users">+4</div>
									</div>
								</div>
							</section><!--.skill-item-->

							<section class="skill-item tbl">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-num">
										<div class="skill-circle skill-circle-num">20</div>
									</div>
									<div class="tbl-cell tbl-cell-txt">User Experience Design</div>
									<div class="tbl-cell tbl-cell-users">
										<img class="skill-user-photo" src="img/photo-64-3.jpg" alt=""/>
										<img class="skill-user-photo" src="img/photo-64-4.jpg" alt=""/>
										<img class="skill-user-photo" src="img/photo-64-1.jpg" alt=""/>
										<div class="skill-circle skill-circle-users">+13</div>
									</div>
								</div>
							</section><!--.skill-item-->
						</article><!--.profile-info-item-->

						<article class="profile-info-item">
							<header class="profile-info-item-header">
								<i class="font-icon font-icon-star"></i>
								More interest
							</header>
							<div class="profile-interests">
								<a href="#" class="label label-light-grey">Interest</a>
								<a href="#" class="label label-light-grey">Example</a>
								<a href="#" class="label label-light-grey">One more</a>
								<a href="#" class="label label-light-grey">Here is example interest</a>
								<a href="#" class="label label-light-grey">Interest</a>
								<a href="#" class="label label-light-grey">Example</a>
								<a href="#" class="label label-light-grey">One more</a>
								<a href="#" class="label label-light-grey">Here is example interest</a>
								<a href="#" class="label label-light-grey">Interest</a>
								<a href="#" class="label label-light-grey">Example</a>
								<a href="#" class="label label-light-grey">One more</a>
								<a href="#" class="label label-light-grey">Here is example interest</a>
							</div>
						</article><!--.profile-info-item-->
					</section><!--.box-typical-->

					<section class="box-typical">
						<header class="box-typical-header-sm">
							Recomendations
							<div class="slider-arrs">
								<button type="button" class="recomendations-slider-prev">
									<i class="font-icon font-icon-arrow-left"></i>
								</button>
								<button type="button" class="recomendations-slider-next">
									<i class="font-icon font-icon-arrow-right"></i>
								</button>
							</div>
						</header>
						<div class="recomendations-slider">
							<div class="slide">
								<div class="citate-speech-bubble">
									<i class="font-icon-quote"></i>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-3.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
											<p class="user-card-row-status"><a href="#">PatchworkLabs</a></p>
										</div>
									</div>
								</div>
							</div><!--.slide-->

							<div class="slide">
								<div class="citate-speech-bubble">
									<i class="font-icon-quote"></i>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-1.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
											<p class="user-card-row-status"><a href="#">PatchworkLabs</a></p>
										</div>
									</div>
								</div>
							</div><!--.slide-->

							<div class="slide">
								<div class="citate-speech-bubble">
									<i class="font-icon-quote"></i>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-2.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
											<p class="user-card-row-status"><a href="#">PatchworkLabs</a></p>
										</div>
									</div>
								</div>
							</div><!--.slide-->

							<div class="slide">
								<div class="citate-speech-bubble">
									<i class="font-icon-quote"></i>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-4.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
											<p class="user-card-row-status"><a href="#">PatchworkLabs</a></p>
										</div>
									</div>
								</div>
							</div><!--.slide-->

							<div class="slide">
								<div class="citate-speech-bubble">
									<i class="font-icon-quote"></i>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-2.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
											<p class="user-card-row-status"><a href="#">PatchworkLabs</a></p>
										</div>
									</div>
								</div>
							</div><!--.slide-->

							<div class="slide">
								<div class="citate-speech-bubble">
									<i class="font-icon-quote"></i>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-4.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
											<p class="user-card-row-status"><a href="#">PatchworkLabs</a></p>
										</div>
									</div>
								</div>
							</div><!--.slide-->
						</div><!--.recomendations-slider-->
					</section><!--.box-typical-->

					<section class="box-typical">
						<header class="box-typical-header-sm">Following</header>
						<div class="profile-following">
							<div class="profile-following-grid">
								<div class="col">
									<article class="follow-group">
										<div class="follow-group-logo">
											<a href="#" class="follow-group-logo-in"><img src="img/logo-2.png" alt=""></a>
										</div>
										<div class="follow-group-name">
											<a href="#">KIPP Foundation</a>
										</div>
										<div class="follow-group-link">
											<a href="#">
												<span class="plus-link-circle"><span>&plus;</span></span>
												Follow
											</a>
										</div>
									</article>
								</div>
								<div class="col">
									<article class="follow-group">
										<div class="follow-group-logo">
											<a href="#" class="follow-group-logo-in"><img src="img/logo-2.png" alt=""></a>
										</div>
										<div class="follow-group-name">
											<a href="#">KIPP Foundation</a>
										</div>
										<div class="follow-group-link">
											<a href="#">
												<span class="plus-link-circle"><span>&plus;</span></span>
												Follow
											</a>
										</div>
									</article>
								</div>
								<div class="col">
									<article class="follow-group">
										<div class="follow-group-logo">
											<a href="#" class="follow-group-logo-in"><img src="img/logo-2.png" alt=""></a>
										</div>
										<div class="follow-group-name">
											<a href="#">KIPP Foundation</a>
										</div>
										<div class="follow-group-link">
											<a href="#">
												<span class="plus-link-circle"><span>&plus;</span></span>
												Follow
											</a>
										</div>
									</article>
								</div>
								<div class="col">
									<article class="follow-group">
										<div class="follow-group-logo">
											<a href="#" class="follow-group-logo-in"><img src="img/logo-2.png" alt=""></a>
										</div>
										<div class="follow-group-name">
											<a href="#">KIPP Foundation</a>
										</div>
										<div class="follow-group-link">
											<a href="#">
												<span class="plus-link-circle"><span>&plus;</span></span>
												Follow
											</a>
										</div>
									</article>
								</div>
							</div>
							<a href="#" class="btn btn-rounded btn-primary-outline">See all (20)</a>
						</div><!--.profile-following-->
					</section><!--.box-typical-->
				</div><!--.col- -->

				<div class="col-lg-3 col-md-6 col-sm-6">
					<section class="box-typical">
						<header class="box-typical-header-sm">People also viewed</header>
						<div class="friends-list stripped">
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-2.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name status-online"><a href="#">Dan Cederholm</a></p>
											<p class="user-card-row-status">Co-founder of <a href="#">Company</a></p>
										</div>
										<div class="tbl-cell tbl-cell-action">
											<a href="#" class="plus-link-circle"><span>&plus;</span></a>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-1.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Oykun Yilmaz</a></p>
											<p class="user-card-row-status">Co-founder of <a href="#">Company</a></p>
										</div>
										<div class="tbl-cell tbl-cell-action">
											<a href="#" class="plus-link-circle"><span>&plus;</span></a>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-3.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Bill S Kenney</a></p>
											<p class="user-card-row-status">Co-founder of <a href="#">Company</a></p>
										</div>
										<div class="tbl-cell tbl-cell-action">
											<a href="#" class="plus-link-circle"><span>&plus;</span></a>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-4.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Maggy Smith</a></p>
											<p class="user-card-row-status">Co-founder of <a href="#">Company</a></p>
										</div>
										<div class="tbl-cell tbl-cell-action">
											<a href="#" class="plus-link-circle"><span>&plus;</span></a>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="img/photo-64-2.jpg" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Susan Andrews</a></p>
											<p class="user-card-row-status">Co-founder of <a href="#">Company</a></p>
										</div>
										<div class="tbl-cell tbl-cell-action">
											<a href="#" class="plus-link-circle"><span>&plus;</span></a>
										</div>
									</div>
								</div>
							</article>
						</div>

						<div class="see-all">
							<a href="#">See All (300)</a>
						</div>

						<section>
							<header class="box-typical-header-sm">More Influencer</header>
							<div class="profile-card-slider">
								<div class="slide">
									<div class="profile-card">
										<div class="profile-card-photo">
											<img src="img/photo-220-1.jpg" alt=""/>
										</div>
										<div class="profile-card-name">Jackie Tran</div>
										<div class="profile-card-status">Company Founder</div>
										<button type="button" class="btn btn-rounded btn-primary-outline">Follow</button>
									</div><!--.profile-card-->
								</div><!--.slide-->
								<div class="slide">
									<div class="profile-card">
										<div class="profile-card-photo">
											<img src="img/avatar-1-256.png" alt=""/>
										</div>
										<div class="profile-card-name">Jackie Tran</div>
										<div class="profile-card-status">Company Founder</div>
										<button type="button" class="btn btn-rounded btn-primary-outline">Follow</button>
									</div><!--.profile-card-->
								</div><!--.slide-->
								<div class="slide">
									<div class="profile-card">
										<div class="profile-card-photo">
											<img src="img/avatar-2-256.png" alt=""/>
										</div>
										<div class="profile-card-name">Sarah Sanchez</div>
										<div class="profile-card-status">Longnameexample<br/>corporation</div>
										<button type="button" class="btn btn-rounded btn-primary-outline">Follow</button>
									</div><!--.profile-card-->
								</div><!--.slide-->
								<div class="slide">
									<div class="profile-card">
										<div class="profile-card-photo">
											<img src="img/avatar-3-256.png" alt=""/>
										</div>
										<div class="profile-card-name">Sarah Sanchez</div>
										<div class="profile-card-status">Longnameexample<br/>corporation</div>
										<button type="button" class="btn btn-rounded btn-primary-outline">Follow</button>
									</div><!--.profile-card-->
								</div><!--.slide-->
							</div><!--.profile-card-slider-->
						</section>
					</section><!--.box-typical-->

					<section class="box-typical">
						<header class="box-typical-header-sm">People you may know</header>
						<div class="people-rel-list">
							<div class="people-rel-list-name"><a href="#">Jackie Tran Anh</a>  /  Designer</div>
							<ul class="people-rel-list-photos">
								<li><a href="#"><img src="img/photo-92-1.jpg" alt=""></a></li>
								<li><a href="#"><img src="img/photo-92-2.jpg" alt=""></a></li>
								<li><a href="#"><img src="img/photo-92-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="img/avatar-1-128.png" alt=""></a></li>
								<li><a href="#"><img src="img/photo-92-2.jpg" alt=""></a></li>
								<li><a href="#"><img src="img/avatar-2-128.png" alt=""></a></li>
								<li><a href="#"><img src="img/photo-92-1.jpg" alt=""></a></li>
								<li><a href="#"><img src="img/avatar-3-128.png" alt=""></a></li>
								<li><a href="#"><img src="img/photo-92-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="img/photo-92-1.jpg" alt=""></a></li>
								<li><a href="#"><img src="img/photo-92-2.jpg" alt=""></a></li>
								<li><a href="#"><img src="img/photo-92-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="img/photo-92-1.jpg" alt=""></a></li>
								<li><a href="#"><img src="img/photo-92-2.jpg" alt=""></a></li>
								<li><a href="#"><img src="img/photo-92-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="img/photo-92-1.jpg" alt=""></a></li>
							</ul>
							<form class="site-header-search">
								<input type="text" placeholder="Search for people"/>
								<button type="submit">
									<span class="font-icon-search"></span>
								</button>
								<div class="overlay"></div>
							</form>
						</div>
					</section><!--.box-typical-->
				</div><!--.col- -->
			</div><!--.row-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/lib/slick-carousel/slick.min.js"></script>
	<script>
		$(function () {
			$(".profile-card-slider").slick({
				slidesToShow: 1,
				adaptiveHeight: true,
				prevArrow: '<i class="slick-arrow font-icon-arrow-left"></i>',
				nextArrow: '<i class="slick-arrow font-icon-arrow-right"></i>'
			});

			var postsSlider = $(".posts-slider");

			postsSlider.slick({
				slidesToShow: 4,
				adaptiveHeight: true,
				arrows: false,
				responsive: [
					{
						breakpoint: 1700,
						settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 1350,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 500,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});

			$('.posts-slider-prev').click(function(){
				postsSlider.slick('slickPrev');
			});

			$('.posts-slider-next').click(function(){
				postsSlider.slick('slickNext');
			});

			/* ==========================================================================
			 Recomendations slider
			 ========================================================================== */

			var recomendationsSlider = $(".recomendations-slider");

			recomendationsSlider.slick({
				slidesToShow: 4,
				adaptiveHeight: true,
				arrows: false,
				responsive: [
					{
						breakpoint: 1700,
						settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 1350,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 500,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});

			$('.recomendations-slider-prev').click(function() {
				recomendationsSlider.slick('slickPrev');
			});

			$('.recomendations-slider-next').click(function(){
				recomendationsSlider.slick('slickNext');
			});
		});
	</script>
<script src="js/app.js"></script>
</body>
</html>