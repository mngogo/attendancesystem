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
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="with-side-menu-compact">

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

	<div class="mobile-menu-left-overlay"></div>
	<nav class="side-menu side-menu-compact">
	    <div class="side-menu-avatar">
	        <div class="avatar-preview avatar-preview-64">
	            <img src="img/avatar-1-128.png" alt="">
	        </div>
	    </div>
	    <ul class="side-menu-list">
	        <li class="brown">
	            <a href="#">
	                <i class="font-icon font-icon-home"></i>
	                <span class="lbl">Overview</span>
	            </a>
	        </li>
	        <li class="green">
	            <a href="#">
	                <i class="font-icon font-icon-cart"></i>
	                <span class="lbl">Marketplace</span>
	            </a>
	        </li>
	        <li class="gold">
	            <a href="#">
	                <i class="font-icon font-icon-speed"></i>
	                <span class="lbl">Performance</span>
	            </a>
	        </li>
	        <li class="blue">
	            <a href="#">
	                <i class="font-icon font-icon-users"></i>
	                <span class="lbl">Community</span>
	            </a>
	        </li>
	        <li class="purple opened">
	            <a href="#">
	                <i class="font-icon font-icon-comments active"></i>
	                <span class="lbl">Messages</span>
	            </a>
	        </li>
	        <li class="orange-red">
	            <a href="#">
	                <i class="font-icon font-icon-help"></i>
	                <span class="lbl">Support</span>
	            </a>
	        </li>
	        <li class="grey">
	            <a href="#">
	                <i class="font-icon font-icon-dots"></i>
	                <span class="lbl">More</span>
	            </a>
	        </li>
	        <li class="blue-dirty">
	            <a href="#">
	                <i class="font-icon font-icon-edit"></i>
	                <span class="lbl">Forms</span>
	            </a>
	        </li>
	        <li class="coral">
	            <a href="#">
	                <i class="font-icon font-icon-chart"></i>
	                <span class="lbl">Reports</span>
	            </a>
	        </li>
	        <li class="pink-red">
	            <a href="#">
	                <i class="font-icon font-icon-zigzag"></i>
	                <span class="lbl">Activity</span>
	            </a>
	        </li>
	        <li class="gold">
	            <a href="#">
	                <i class="font-icon font-icon-tablet"></i>
	                <span class="lbl">Tables</span>
	            </a>
	        </li>
	        <li class="magenta">
	            <a href="#">
	                <i class="font-icon font-icon-widget"></i>
	                <span class="lbl">Widges</span>
	            </a>
	        </li>
	        <li class="pink">
	            <a href="#">
	                <i class="font-icon font-icon-map"></i>
	                <span class="lbl">Maps</span>
	            </a>
	        </li>
	        <li class="blue-darker">
	            <a href="#">
	                <i class="font-icon font-icon-chart-2"></i>
	                <span class="lbl">Charts</span>
	            </a>
	        </li>
	        <li class="grey">
	            <a href="#">
	                <i class="font-icon font-icon-doc"></i>
	                <span class="lbl">Documents</span>
	            </a>
	        </li>
	        <li class="blue-sky">
	            <a href="#">
	                <i class="font-icon font-icon-question"></i>
	                <span class="lbl">Help</span>
	            </a>
	        </li>
	        <li class="coral">
	            <a href="#">
	                <i class="font-icon font-icon-cogwheel"></i>
	                <span class="lbl">Settings</span>
	            </a>
	        </li>
	        <li class="magenta">
	            <a href="#">
	                <i class="font-icon font-icon-user"></i>
	                <span class="lbl">Profile</span>
	            </a>
	        </li>
	        <li class="blue-dirty">
	            <a href="#">
	                <i class="font-icon font-icon-notebook"></i>
	                <span class="lbl">Tasks</span>
	            </a>
	        </li>
	        <li class="aquamarine">
	            <a href="#">
	                <i class="font-icon font-icon-mail"></i>
	                <span class="lbl">Contact form</span>
	            </a>
	        </li>
	        <li class="pink">
	            <a href="#">
	                <i class="font-icon font-icon-users-group"></i>
	                <span class="lbl">Group</span>
	            </a>
	        </li>
	        <li class="gold">
	            <a href="#">
	                <i class="font-icon font-icon-picture-2"></i>
	                <span class="lbl">Gallery</span>
	            </a>
	        </li>
	        <li class="brown">
	            <a href="#">
	                <i class="font-icon font-icon-event"></i>
	                <span class="lbl">Event</span>
	            </a>
	        </li>
	        <li class="red">
	            <a href="#">
	                <i class="font-icon font-icon-case-2"></i>
	                <span class="lbl">Project</span>
	            </a>
	        </li>
	    </ul>
	</nav><!--.side-menu-->

	<div class="page-content">
		<div class="container-fluid">
			Content
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
	                    <i class="font-icon-close-2"></i>
	                </button>
	                <h4 class="modal-title" id="myModalLabel">Upload File</h4>
	            </div>
	            <div class="modal-upload">
	                <div class="modal-upload-cont">
	                    <div class="modal-upload-cont-in">
	                        <div class="tab-content">
	                            <div role="tabpanel" class="tab-pane active" id="tab-upload">
	                                <div class="modal-upload-body scrollable-block">
	                                    <div class="uploading-container">
	                                        <div class="uploading-container-left">
	                                            <div class="drop-zone">
	                                                <!--
	                                                при перетаскиваении добавляем класс .dragover
	                                                <div class="drop-zone dragover">
	                                                -->
	                                                <i class="font-icon font-icon-cloud-upload-2"></i>
	                                                <div class="drop-zone-caption">Drag file to upload</div>
	                                                <span class="btn btn-rounded btn-file">
	                                                    <span>Choose file</span>
	                                                    <input type="file" name="files[]" multiple>
	                                                </span>
	                                            </div>
	                                        </div><!--.uploading-container-left-->
	                                        <div class="uploading-container-right">
	                                            <div class="uploading-container-right-in">
	                                                <h6 class="uploading-list-title">Uploading</h6>
	                                                <ul class="uploading-list">
	                                                    <li class="uploading-list-item">
	                                                        <div class="uploading-list-item-wrapper">
	                                                            <div class="uploading-list-item-name">
	                                                                <i class="font-icon font-icon-cam-photo"></i>
	                                                                photo.png
	                                                            </div>
	                                                            <div class="uploading-list-item-size">7,5 mb</div>
	                                                            <button type="button" class="uploading-list-item-close">
	                                                                <i class="font-icon-close-2"></i>
	                                                            </button>
	                                                        </div>
	                                                        <progress class="progress" value="25" max="100">
	                                                            <div class="progress">
	                                                                <span class="progress-bar" style="width: 25%;">25%</span>
	                                                            </div>
	                                                        </progress>
	                                                        <div class="uploading-list-item-progress">37% done</div>
	                                                        <div class="uploading-list-item-speed">90KB/sec</div>
	                                                    </li>
	                                                    <li class="uploading-list-item">
	                                                        <div class="uploading-list-item-wrapper">
	                                                            <div class="uploading-list-item-name">
	                                                                <i class="font-icon font-icon-page"></i>
	                                                                task.doc
	                                                            </div>
	                                                            <div class="uploading-list-item-size">7,5 mb</div>
	                                                            <button type="button" class="uploading-list-item-close">
	                                                                <i class="font-icon-close-2"></i>
	                                                            </button>
	                                                        </div>
	                                                        <progress class="progress" value="50" max="100">
	                                                            <div class="progress">
	                                                                <span class="progress-bar" style="width: 50%;">50%</span>
	                                                            </div>
	                                                        </progress>
	                                                        <div class="uploading-list-item-progress">37% done</div>
	                                                        <div class="uploading-list-item-speed">90KB/sec</div>
	                                                    </li>
	                                                    <li class="uploading-list-item">
	                                                        <div class="uploading-list-item-wrapper">
	                                                            <div class="uploading-list-item-name">
	                                                                <i class="font-icon font-icon-cam-photo"></i>
	                                                                dashboard.png
	                                                            </div>
	                                                            <div class="uploading-list-item-size">7,5 mb</div>
	                                                            <button type="button" class="uploading-list-item-close">
	                                                                <i class="font-icon-close-2"></i>
	                                                            </button>
	                                                        </div>
	                                                        <progress class="progress" value="100" max="100">
	                                                            <div class="progress">
	                                                                <span class="progress-bar" style="width: 100%;">100%</span>
	                                                            </div>
	                                                        </progress>
	                                                        <div class="uploading-list-item-progress">Completed</div>
	                                                        <div class="uploading-list-item-speed">90KB/sec</div>
	                                                    </li>
	                                                </ul>
	                                            </div>
	                                        </div><!--.uploading-container-right-->
	                                    </div><!--.uploading-container-->
	                                </div><!--.modal-upload-body-->
	                                <div class="modal-upload-bottom">
	                                    <button type="button" class="btn btn-rounded btn-default">Cancel</button>
	                                    <button type="button" class="btn btn-rounded">Done</button>
	                                </div><!--.modal-upload-bottom-->
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-dropbox">
	                                <div class="upload-dropbox">
	                                    <h3>Upload a file from Dropbox</h3>
	                                    <p>
	                                        Get files your Dropbox account.<br/>
	                                        We play nice. You just need to login.
	                                    </p>
	                                    <button type="button" class="btn btn-rounded">Connect to Dropbox</button>
	                                    <div class="text-muted">We will open a new page to connect your Dropbox account.</div>
	                                </div>
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-google-drive">
	                                <div class="modal-upload-body scrollable-block">
	                                    <div class="upload-gd-header">
	                                        <div class="tbl-row">
	                                            <div class="tbl-cell">
	                                                <input type="text" class="form-control form-control-rounded" placeholder="Search"/>
	                                            </div>
	                                            <div class="tbl-cell tbl-cell-btns">
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-cam-photo"></i>
	                                                </button>
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-cam-video"></i>
	                                                </button>
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-sound"></i>
	                                                </button>
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-page"></i>
	                                                </button>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="gd-doc-grid">
	                                        <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="modal-upload-bottom">
	                                    <button type="button" class="btn btn-rounded">Select</button>
	                                    <button type="button" class="btn btn-rounded btn-default">Cancel</button>
	                                </div>
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-yandex-disk">
	                                Yandex Disk
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-box">
	                                Box
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-one-drive">
	                                One drive
	                            </div><!--.tab-pane-->
	                        </div><!--.tab-content-->
	                    </div><!--.modal-upload-cont-in-->
	                </div><!--.modal-upload-cont-->
	                <div class="modal-upload-side">
	                    <ul class="upload-list" role="tablist">
	                        <li class="nav-item">
	                            <a href="#tab-upload" role="tab" data-toggle="tab" class="active">
	                                <i class="font-icon font-icon-cloud-upload-2"></i>
	                                <span>Upload</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-dropbox" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-dropbox"></i>
	                                <span>Dropbox</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-google-drive" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-google-drive"></i>
	                                <span>Google Drive</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-yandex-disk" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-yandex-disk"></i>
	                                <span>Yandex Disk</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-box" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-box"></i>
	                                <span>Box</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-one-drive" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-one-drive"></i>
	                                <span>One Drive</span>
	                            </a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </div>
	</div><!--.modal-->

	<div class="modal fade" id="upload2Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
	                    <i class="font-icon-close-2"></i>
	                </button>
	                <h4 class="modal-title" id="myModalLabel">Upload File</h4>
	            </div>
	            <div class="modal-upload menu-bottom">
	                <div class="modal-upload-cont">
	                    <div class="modal-upload-cont-in">
	                        <div class="tab-content">
	                            <div role="tabpanel" class="tab-pane active" id="tab-upload-2">
	                                <div class="modal-upload-body scrollable-block">
	                                    <div class="uploading-container">
	                                        <div class="uploading-container-left">
	                                            <div class="drop-zone">
	                                                <!--
	                                                при перетаскиваении добавляем класс .dragover
	                                                <div class="drop-zone dragover">
	                                                -->
	                                                <i class="font-icon font-icon-cloud-upload-2"></i>
	                                                <div class="drop-zone-caption">Drag file to upload</div>
	                                                <span class="btn btn-rounded btn-file">
	                                                    <span>Choose file</span>
	                                                    <input type="file" name="files[]" multiple>
	                                                </span>
	                                            </div>
	                                        </div><!--.uploading-container-left-->
	                                        <div class="uploading-container-right">
	                                            <div class="uploading-container-right-in">
	                                                <h6 class="uploading-list-title">Uploading</h6>
	                                                <ul class="uploading-list">
	                                                    <li class="uploading-list-item">
	                                                        <div class="uploading-list-item-wrapper">
	                                                            <div class="uploading-list-item-name">
	                                                                <i class="font-icon font-icon-cam-photo"></i>
	                                                                photo.png
	                                                            </div>
	                                                            <div class="uploading-list-item-size">7,5 mb</div>
	                                                            <button type="button" class="uploading-list-item-close">
	                                                                <i class="font-icon-close-2"></i>
	                                                            </button>
	                                                        </div>
	                                                        <progress class="progress" value="25" max="100">
	                                                            <div class="progress">
	                                                                <span class="progress-bar" style="width: 25%;">25%</span>
	                                                            </div>
	                                                        </progress>
	                                                        <div class="uploading-list-item-progress">37% done</div>
	                                                        <div class="uploading-list-item-speed">90KB/sec</div>
	                                                    </li>
	                                                    <li class="uploading-list-item">
	                                                        <div class="uploading-list-item-wrapper">
	                                                            <div class="uploading-list-item-name">
	                                                                <i class="font-icon font-icon-page"></i>
	                                                                task.doc
	                                                            </div>
	                                                            <div class="uploading-list-item-size">7,5 mb</div>
	                                                            <button type="button" class="uploading-list-item-close">
	                                                                <i class="font-icon-close-2"></i>
	                                                            </button>
	                                                        </div>
	                                                        <progress class="progress" value="50" max="100">
	                                                            <div class="progress">
	                                                                <span class="progress-bar" style="width: 50%;">50%</span>
	                                                            </div>
	                                                        </progress>
	                                                        <div class="uploading-list-item-progress">37% done</div>
	                                                        <div class="uploading-list-item-speed">90KB/sec</div>
	                                                    </li>
	                                                    <li class="uploading-list-item">
	                                                        <div class="uploading-list-item-wrapper">
	                                                            <div class="uploading-list-item-name">
	                                                                <i class="font-icon font-icon-cam-photo"></i>
	                                                                dashboard.png
	                                                            </div>
	                                                            <div class="uploading-list-item-size">7,5 mb</div>
	                                                            <button type="button" class="uploading-list-item-close">
	                                                                <i class="font-icon-close-2"></i>
	                                                            </button>
	                                                        </div>
	                                                        <progress class="progress" value="100" max="100">
	                                                            <div class="progress">
	                                                                <span class="progress-bar" style="width: 100%;">100%</span>
	                                                            </div>
	                                                        </progress>
	                                                        <div class="uploading-list-item-progress">Completed</div>
	                                                        <div class="uploading-list-item-speed">90KB/sec</div>
	                                                    </li>
	                                                </ul>
	                                            </div>
	                                        </div><!--.uploading-container-right-->
	                                    </div><!--.uploading-container-->
	                                </div><!--.modal-upload-body-->
	                                <div class="modal-upload-bottom">
	                                    <button type="button" class="btn btn-rounded btn-default">Cancel</button>
	                                    <button type="button" class="btn btn-rounded">Done</button>
	                                </div><!--.modal-upload-bottom-->
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-dropbox-2">
	                                <div class="upload-dropbox">
	                                    <h3>Upload a file from Dropbox</h3>
	                                    <p>
	                                        Get files your Dropbox account.<br/>
	                                        We play nice. You just need to login.
	                                    </p>
	                                    <button type="button" class="btn btn-rounded">Connect to Dropbox</button>
	                                    <div class="text-muted">We will open a new page to connect your Dropbox account.</div>
	                                </div>
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-google-drive-2">
	                                <div class="modal-upload-body scrollable-block">
	                                    <div class="upload-gd-header">
	                                        <div class="tbl-row">
	                                            <div class="tbl-cell">
	                                                <input type="text" class="form-control form-control-rounded" placeholder="Search"/>
	                                            </div>
	                                            <div class="tbl-cell tbl-cell-btns">
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-cam-photo"></i>
	                                                </button>
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-cam-video"></i>
	                                                </button>
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-sound"></i>
	                                                </button>
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-page"></i>
	                                                </button>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="gd-doc-grid">
	                                        <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="modal-upload-bottom">
	                                    <button type="button" class="btn btn-rounded">Select</button>
	                                    <button type="button" class="btn btn-rounded btn-default">Cancel</button>
	                                </div>
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-yandex-disk-2">
	                                Yandex Disk
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-box-2">
	                                Box
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-one-drive-2">
	                                One drive
	                            </div><!--.tab-pane-->
	                        </div><!--.tab-content-->
	                    </div><!--.modal-upload-cont-in-->
	                </div><!--.modal-upload-cont-->
	                <div class="modal-upload-side">
	                    <ul class="upload-list" role="tablist">
	                        <li class="nav-item">
	                            <a href="#tab-upload-2" role="tab" data-toggle="tab" class="active">
	                                <i class="font-icon font-icon-cloud-upload-2"></i>
	                                <span>Upload</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-dropbox-2" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-dropbox"></i>
	                                <span>Dropbox</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-google-drive-2" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-google-drive"></i>
	                                <span>Google Drive</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-yandex-disk-2" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-yandex-disk"></i>
	                                <span>Yandex Disk</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-box-2" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-box"></i>
	                                <span>Box</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-one-drive-2" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-one-drive"></i>
	                                <span>One Drive</span>
	                            </a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </div>
	</div><!--.modal-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

<script src="js/app.js"></script>
</body>
</html>