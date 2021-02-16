<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Интернет-аптека &amp; Купить лекарства </title>

        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available Classes:

            'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

            'sidebar-l'                  Left Sidebar and right Side Overlay
            'sidebar-r'                  Right Sidebar and left Side Overlay
            'sidebar-mini'               Mini hoverable Sidebar (> 991px)
            'sidebar-o'                  Visible Sidebar by default (> 991px)
            'sidebar-o-xs'               Visible Sidebar by default (< 992px)

            'side-overlay-hover'         Hoverable Side Overlay (> 991px)
            'side-overlay-o'             Visible Side Overlay by default (> 991px)

            'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

            'header-navbar-fixed'        Enables fixed header
        -->
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Overlay Scroll Container -->
                <div id="side-overlay-scroll">
                    <!-- Side Header -->
                    <div class="side-header side-content">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times"></i>
                        </button>
                        <span>
                            <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar10.jpg" alt="">
                            <span class="font-w600 push-10-l">John Parker</span>
                        </span>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <div class="side-content remove-padding-t">
                        <!-- Side Overlay Tabs -->
                        <div class="block pull-r-l border-t">
                            <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs">
                                <li class="active">
                                    <a href="#tabs-side-overlay-overview"><i class="fa fa-fw fa-coffee"></i> Overview</a>
                                </li>
                                <li>
                                    <a href="#tabs-side-overlay-sales"><i class="fa fa-fw fa-line-chart"></i> Sales</a>
                                </li>
                            </ul>
                            <div class="block-content tab-content">
                                <!-- Overview Tab -->
                                <div class="tab-pane fade fade-right in active" id="tabs-side-overlay-overview">
                                    <!-- Activity -->
                                    <div class="block pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">Recent Activity</h3>
                                        </div>
                                        <div class="block-content">
                                            <!-- Activity List -->
                                            <ul class="list list-activity">
                                                <li>
                                                    <i class="si si-wallet text-success"></i>
                                                    <div class="font-w600">New sale ($15)</div>
                                                    <div><a href="javascript:void(0)">Admin Template</a></div>
                                                    <div><small class="text-muted">3 min ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="si si-pencil text-info"></i>
                                                    <div class="font-w600">You edited the file</div>
                                                    <div><a href="javascript:void(0)"><i class="fa fa-file-text-o"></i> Documentation.doc</a></div>
                                                    <div><small class="text-muted">15 min ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="si si-close text-danger"></i>
                                                    <div class="font-w600">Project deleted</div>
                                                    <div><a href="javascript:void(0)">Line Icon Set</a></div>
                                                    <div><small class="text-muted">4 hours ago</small></div>
                                                </li>
                                            </ul>
                                            <!-- END Activity List -->
                                        </div>
                                    </div>
                                    <!-- END Activity -->

                                    <!-- Online Friends -->
                                    <div class="block pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">Online Friends</h3>
                                        </div>
                                        <div class="block-content block-content-full">
                                            <!-- Users Navigation -->
                                            <ul class="nav-users remove-margin-b">
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar8.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Susan Elliott
                                                        <div class="font-w400 text-muted"><small>Copywriter</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar13.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Adam Hall
                                                        <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar4.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Ann Parker
                                                        <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar8.jpg" alt="">
                                                        <i class="fa fa-circle text-warning"></i> Amber Walker
                                                        <div class="font-w400 text-muted"><small>Photographer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar12.jpg" alt="">
                                                        <i class="fa fa-circle text-warning"></i> Scott Ruiz
                                                        <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- END Users Navigation -->
                                        </div>
                                    </div>
                                    <!-- END Online Friends -->

                                    <!-- Quick Settings -->
                                    <div class="block pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">Quick Settings</h3>
                                        </div>
                                        <div class="block-content">
                                            <!-- Quick Settings Form -->
                                            <form class="form-bordered" action="base_pages_dashboard.html" method="post" onsubmit="return false;">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xs-8">
                                                            <div class="font-s13 font-w600">Online Status</div>
                                                            <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                                                        </div>
                                                        <div class="col-xs-4 text-right">
                                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                                <input type="checkbox"><span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xs-8">
                                                            <div class="font-s13 font-w600">Auto Updates</div>
                                                            <div class="font-s13 font-w400 text-muted">Keep up to date</div>
                                                        </div>
                                                        <div class="col-xs-4 text-right">
                                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                                <input type="checkbox"><span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xs-8">
                                                            <div class="font-s13 font-w600">Notifications</div>
                                                            <div class="font-s13 font-w400 text-muted">Do you need them?</div>
                                                        </div>
                                                        <div class="col-xs-4 text-right">
                                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                                <input type="checkbox" checked><span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xs-8">
                                                            <div class="font-s13 font-w600">API Access</div>
                                                            <div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
                                                        </div>
                                                        <div class="col-xs-4 text-right">
                                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                                <input type="checkbox" checked><span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END Quick Settings Form -->
                                        </div>
                                    </div>
                                    <!-- END Quick Settings -->
                                </div>
                                <!-- END Overview Tab -->

                                <!-- Sales Tab -->
                                <div class="tab-pane fade fade-left" id="tabs-side-overlay-sales">
                                    <div class="block pull-r-l">
                                        <!-- Stats -->
                                        <div class="block-content pull-t">
                                            <div class="row items-push">
                                                <div class="col-xs-6">
                                                    <div class="font-w700 text-gray-darker text-uppercase">Sales</div>
                                                    <a class="h3 font-w300 text-primary" href="javascript:void(0)">22030</a>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="font-w700 text-gray-darker text-uppercase">Balance</div>
                                                    <a class="h3 font-w300 text-primary" href="javascript:void(0)">$ 4.589,00</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Stats -->

                                        <!-- Today -->
                                        <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <span class="font-w600 font-s13 text-gray-darker text-uppercase">Today</span>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <span class="font-s13 text-muted">$996</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <ul class="list list-activity pull-r-l">
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $249</div>
                                                    <div><small class="text-muted">3 min ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $129</div>
                                                    <div><small class="text-muted">50 min ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $119</div>
                                                    <div><small class="text-muted">2 hours ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $499</div>
                                                    <div><small class="text-muted">3 hours ago</small></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- END Today -->

                                        <!-- Yesterday -->
                                        <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <span class="font-w600 font-s13 text-gray-darker text-uppercase">Yesterday</span>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <span class="font-s13 text-muted">$765</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <ul class="list list-activity pull-r-l">
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $249</div>
                                                    <div><small class="text-muted">26 hours ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-danger"></i>
                                                    <div class="font-w600">Product Purchase - $50</div>
                                                    <div><small class="text-muted">28 hours ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $119</div>
                                                    <div><small class="text-muted">29 hours ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-danger"></i>
                                                    <div class="font-w600">Paypal Withdrawal - $300</div>
                                                    <div><small class="text-muted">37 hours ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $129</div>
                                                    <div><small class="text-muted">39 hours ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $119</div>
                                                    <div><small class="text-muted">45 hours ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $499</div>
                                                    <div><small class="text-muted">46 hours ago</small></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- END Yesterday -->

                                        <!-- More -->
                                        <div class="text-center">
                                            <small><a href="javascript:void(0)">Load More..</a></small>
                                        </div>
                                        <!-- END More -->
                                    </div>
                                </div>
                                <!-- END Sales Tab -->
                            </div>
                        </div>
                        <!-- END Side Overlay Tabs -->
                    </div>
                    <!-- END Side Content -->
                </div>
                <!-- END Side Overlay Scroll Container -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="side-header side-content bg-white-op">
                            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                            <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                            <div class="btn-group pull-left">
                                <!-- <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                                    <i class="si si-drop"></i>
                                </button> -->
                                <a class="h5 text-white" href="index.php">
                                <img width="150" height="40" src="assets/img/avatars/1.png" alt="">
                                <br>
                            </a>
                            </div>
                            
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        <div class="side-content side-content-full">
                            <ul class="nav-main">
                                <li>
                                    <a href="onas.php"><i class="si si-badge"></i><span class="sidebar-mini-hide">О нас</span></a>
                                </li>
                                <li>
                                    <a href="map.php"><i class="fa fa-plus-square"></i><span class="sidebar-mini-hide">Аптеки</span></a>
                                </li>
                                <li>
                                    <a href="contacts.php"><i class="glyphicon glyphicon-user"></i><span class="sidebar-mini-hide">Контакты</span></a>
                                </li>
                                <li class="nav-main-heading"><span style="color: #18BCAC;" class="sidebar-mini-hide">Каталог товаров</span></li>
                                <li class="<?php if (isset($_GET['tree_id']) && $_GET['tree_id'] == '1') {echo "open";} ?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-medkit"></i><span class="sidebar-mini-hide">Лекарства</span></a>
                                    <ul>       
                                        <li>
                                            <a class="<?php if ($_GET['queue'] == 'Аналгетики') {echo "active";} ?>" href="index.php?queue=Анальгетики&tree_id=1">Анальгетики</a>
                                        </li>
                                        <li>
                                            <a class="<?php if ($_GET['queue'] == 'Антибиотики') {echo "active";} ?>" href="index.php?queue=Антибиотики&tree_id=1">Антибиотики</a>
                                        </li>
                                        <li>
                                            <a class="<?php if ($_GET['queue'] == 'Антисептики') {echo "active";} ?>" href="index.php?queue=Антисептики&tree_id=1">Антисептики</a>
                                        </li>
                                        <li>
                                            <a class="<?php if ($_GET['queue'] == 'Гинекологические препараты') {echo "active";} ?>" href="index.php?queue=Гинекологические препараты&tree_id=1">Гинекологические препараты</a>
                                        </li>
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Гормональные препараты') {echo "active";} ?>" href="index.php?queue=Гормональные препараты&tree_id=1">Гормональные препараты</a>
                                        </li>   
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Для повышения иммунитета') {echo "active";} ?>" href="index.php?queue=Для повышения иммунитета&tree_id=1">Для повышения иммунитета</a>
                                        </li> 
                                        <li>
                                           
                                            <a class="<?php if ($_GET['queue'] == 'Гормональные препараты') {echo "active";} ?>" href="index.php?queue=Гормональные препараты&tree_id=1">Гормональные препараты</a>
                                        </li> 
                                        <li>
                                          
                                            <a class="<?php if ($_GET['queue'] == 'Жаропонижающие') {echo "active";} ?>" href="index.php?queue=Жаропонижающие&tree_id=1">Жаропонижающие</a>
                                        </li> 
                                        <li>
                                           
                                            <a class="<?php if ($_GET['queue'] == 'Женские препараты') {echo "active";} ?>" href="index.php?queue=Женские препараты&tree_id=1">Женские препараты</a>
                                        </li> 
                                        <li>
                                           
                                            <a class="<?php if ($_GET['queue'] == 'Инъекционные растворы') {echo "active";} ?>" href="index.php?queue=Инъекционные растворы&tree_id=1">Инъекционные растворы</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Кожные заболевания') {echo "active";} ?>" href="index.php?queue=Кожные заболевания&tree_id=1">Кожные заболевания</a>
                                        </li> 
                                        <li>
                            
                                            <a class="<?php if ($_GET['queue'] == 'Лечение алкоголизма, наркомании, табакокурения') {echo "active";} ?>" href="index.php?queue=Лечение алкоголизма, наркомании, табакокурения&tree_id=1">Лечение алкоголизма, наркомании, табакокурения</a>
                                        </li> 
                                        <li>
                                 
                                            <a class="<?php if ($_GET['queue'] == 'Лечение артериального давления') {echo "active";} ?>" href="index.php?queue=Лечение артериального давления&tree_id=1">Лечение артериального давления</a>
                                        </li> 
                                        <li>
                                
                                            <a class="<?php if ($_GET['queue'] == 'Лечение геморроя') {echo "active";} ?>" href="index.php?queue=Лечение геморроя&tree_id=1">Лечение геморроя</a>
                                        </li> 
                                        <li>
                    
                                            <a class="<?php if ($_GET['queue'] == 'Лечение глаз') {echo "active";} ?>" href="index.php?queue=Лечение глаз&tree_id=1">Лечение глаз</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Лечение головного кровооброщения') {echo "active";} ?>" href="index.php?queue=Лечение головного кровооброщения&tree_id=1">Лечение головного кровооброщения</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Лечение десен') {echo "active";} ?>" href="index.php?queue=Лечение десен&tree_id=1">Лечение десен</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Лечение жкт') {echo "active";} ?>" href="index.php?queue=Лечение жкт&tree_id=1">Лечение жкт</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Лечение заболеваний мочеполовой системы') {echo "active";} ?>" href="index.php?queue=Лечение заболеваний мочеполовой системы&tree_id=1">Лечение заболеваний мочеполовой системы</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Лечение заболеваний опорно-двигательного аппарата') {echo "active";} ?>" href="index.php?queue=Лечение заболеваний опорно-двигательного аппарата&tree_id=1">Лечение заболеваний опорно-двигательного аппарата</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Лечение лор заболеваний') {echo "active";} ?>" href="index.php?queue=Лечение лор заболеваний&tree_id=1">Лечение лор заболеваний</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Лечение неврологических нарушений') {echo "active";} ?>" href="index.php?queue=Лечение неврологических нарушений&tree_id=1">Лечение неврологических нарушений</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Лечение печени') {echo "active";} ?>" href="index.php?queue=Лечение печени&tree_id=1">Лечение печени</a>
                                        </li> 
                                        <li>
                                           
                                            <a class="<?php if ($_GET['queue'] == 'Лечение почек') {echo "active";} ?>" href="index.php?queue=Лечение почек&tree_id=1">Лечение почек</a>
                                        </li> 
                                        <li>
                                        
                                            <a class="<?php if ($_GET['queue'] == 'Лечение ран и ожогов') {echo "active";} ?>" href="index.php?queue=Лечение ран и ожогов&tree_id=1">Лечение ран и ожогов</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Лечение сахарного диабета') {echo "active";} ?>" href="index.php?queue=Лечение сахарного диабета&tree_id=1">Лечение сахарного диабета</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Лечение сердечно-сосудистых заболеваний') {echo "active";} ?>" href="index.php?queue=Лечение сердечно-сосудистых заболеваний&tree_id=1">Лечение сердечно-сосудистых заболеваний</a>
                                        </li> 
                                        <li>
                                          
                                            <a class="<?php if ($_GET['queue'] == 'Мужские препараты') {echo "active";} ?>" href="index.php?queue=Мужские препараты&tree_id=1">Мужские препараты</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Онкологические препараты') {echo "active";} ?>" href="index.php?queue=Онкологические препараты&tree_id=1">Онкологические препараты</a>
                                        </li> 
                                        <li>
                                        
                                            <a class="<?php if ($_GET['queue'] == 'От паразитов') {echo "active";} ?>" href="index.php?queue=От паразитов&tree_id=1">От паразитов</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Препараты урологии и гинекологии') {echo "active";} ?>" href="index.php?queue=Препараты урологии и гинекологии&tree_id=1">Препараты урологии и гинекологии</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Пробиотики и пребиотики') {echo "active";} ?>" href="index.php?queue=Пробиотики и пребиотики&tree_id=1">Пробиотики и пребиотики</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Противоастматические препараты') {echo "active";} ?>" href="index.php?queue=Противоастматические препараты&tree_id=1">Противоастматические препараты</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Противовирусные препараты') {echo "active";} ?>" href="index.php?queue=Противовирусные препараты&tree_id=1">Противовирусные препараты</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Противовоспалительные средства') {echo "active";} ?>" href="index.php?queue=Противовоспалительные средства&tree_id=1">Противовоспалительные средства</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Противогрибковые средства') {echo "active";} ?>" href="index.php?queue=Противогрибковые средства&tree_id=1">Противогрибковые средства</a>
                                        </li> 
                                        <li>
                                           
                                            <a class="<?php if ($_GET['queue'] == 'Противокашлевые препараты') {echo "active";} ?>" href="index.php?queue=Противокашлевые препараты&tree_id=1">Противокашлевые препараты</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Рецептурные препараты') {echo "active";} ?>" href="index.php?queue=Рецептурные препараты&tree_id=1">Рецептурные препараты</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Слабительные препараты') {echo "active";} ?>" href="index.php?queue=Слабительные препараты&tree_id=1">Слабительные препараты</a>
                                        </li> 
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Спазмолитические препараты') {echo "active";} ?>" href="index.php?queue=Спазмолитические препараты&tree_id=1">Спазмолитические препараты</a>
                                        </li> 
                                        <li>
                                    
                                            <a class="<?php if ($_GET['queue'] == 'Средства от аллергии') {echo "active";} ?>" href="index.php?queue=Средства от аллергии&tree_id=1">Средства от аллергии</a>
                                        </li> 
                                    </ul>
                                </li>
                                <li class="<?php if (isset($_GET['tree_id']) && $_GET['tree_id'] == '2443') {echo "open";} ?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-medkit"></i><span class="sidebar-mini-hide">Витамины и БАДы</span></a>
                                    <ul>       
                                        <li>
                                            <!-- <a href="index.php?queue=БАДы">БАДы</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'БАДы') {echo "active";} ?>" href="index.php?queue=БАДы&tree_id=2443">БАДы</a>
                                        </li>
                                        <li>
                        
                                            <a class="<?php if ($_GET['queue'] == 'Витамины и минералы') {echo "active";} ?>" href="index.php?queue=Витамины и минералы&tree_id=2443">Витамины и минералы</a>
                                        </li>
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Спорт и фитнес') {echo "active";} ?>" href="index.php?queue=Спорт и фитнес&tree_id=2443">Спорт и фитнес</a>
                                        </li> 
                                        <li>
                                           
                                            <a class="<?php if ($_GET['queue'] == 'Травы и фиточаи') {echo "active";} ?>" href="index.php?queue=Травы и фиточаи&tree_id=2443">Травы и фиточаи</a>
                                        </li> 
                                    </ul>
                                </li>
                                <li class="<?php if (isset($_GET['tree_id']) && $_GET['tree_id'] == '3195') {echo "open";} ?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-medkit"></i><span class="sidebar-mini-hide">Изделия мед. назначения</span></a>
                                    <ul>       
                                        <li>
                                            
                                            <a class="<?php if ($_GET['queue'] == 'Медицинские расходные материалы') {echo "active";} ?>" href="index.php?queue=Медицинские расходные материалы&tree_id=3195">Медицинские расходные материалы</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Диагностические тесты">Диагностические тесты</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Диагностические тесты') {echo "active";} ?>" href="index.php?queue=Диагностические тесты&tree_id=3195">Диагностические тесты</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Лечебный трикотаж">Лечебный трикотаж</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Лечебный трикотаж') {echo "active";} ?>" href="index.php?queue=Лечебный трикотаж&tree_id=3195">Лечебный трикотаж</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Медицинские изделия">Медицинские изделия</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Медицинские изделия') {echo "active";} ?>" href="index.php?queue=Медицинские изделия&tree_id=3195">Медицинские изделия</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Медицинские инструменты">Медицинские инструменты</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Медицинские инструменты') {echo "active";} ?>" href="index.php?queue=Медицинские инструменты&tree_id=3195">Медицинские инструменты</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Медицинские приборы">Медицинские приборы</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Медицинские приборы') {echo "active";} ?>" href="index.php?queue=Медицинские приборы&tree_id=3195">Медицинские приборы</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Ортопедические изделия">Ортопедические изделия</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Ортопедические изделия') {echo "active";} ?>" href="index.php?queue=Ортопедические изделия&tree_id=3195">Ортопедические изделия</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Перевязочные материалы">Перевязочные материалы</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Перевязочные материалы') {echo "active";} ?>" href="index.php?queue=Перевязочные материалы&tree_id=3195">Перевязочные материалы</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Средства ухода за больными">Средства ухода за больными</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Средства ухода за больными') {echo "active";} ?>" href="index.php?queue=Средства ухода за больными&tree_id=3195">Средства ухода за больными</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Технические средства реабилитации">Технические средства реабилитации</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Технические средства реабилитации') {echo "active";} ?>" href="index.php?queue=Технические средства реабилитации&tree_id=3195">Технические средства реабилитации</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?php if (isset($_GET['tree_id']) && $_GET['tree_id'] == '3742') {echo "open";} ?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-medkit"></i><span class="sidebar-mini-hide">Мать и дитя</span></a>
                                    <ul>
                                        <li>
                                            <!-- <a href="index.php?queue=Детская мебель">Детская мебель</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Детская мебель') {echo "active";} ?>" href="index.php?queue=Детская мебель&tree_id=3742">Детская мебель</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Детское питание и кормление">Детское питание и кормление</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Детское питание и кормление') {echo "active";} ?>" href="index.php?queue=Детское питание и кормление&tree_id=3742">Детское питание и кормление</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Одежда">Одежда</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Одежда') {echo "active";} ?>" href="index.php?queue=Одежда&tree_id=3742">Одежда</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Питание">Питание</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Питание') {echo "active";} ?>" href="index.php?queue=Питание&tree_id=3742">Питание</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Товары для детей">Товары для детей</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Товары для детей') {echo "active";} ?>" href="index.php?queue=Товары для детей&tree_id=3742">Товары для детей</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Товары для мам">Товары для мам</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Товары для мам') {echo "active";} ?>" href="index.php?queue=Товары для мам&tree_id=3742">Товары для мам</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                                <li class="<?php if (isset($_GET['tree_id']) && $_GET['tree_id'] == '4698') {echo "open";} ?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-medkit"></i><span class="sidebar-mini-hide">Красота и гигиена</span></a>
                                    <ul>
                                        <li>
                                            <!-- <a href="index.php?queue=Бытовая химия">Бытовая химия</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Бытовая химия') {echo "active";} ?>" href="index.php?queue=Бытовая химия&tree_id=4698">Бытовая химия</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Гигиена">Гигиена</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Гигиена') {echo "active";} ?>" href="index.php?queue=Гигиена&tree_id=4698">Гигиена</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Дезодоранты">Дезодоранты</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Дезодоранты') {echo "active";} ?>" href="index.php?queue=Дезодоранты&tree_id=4698">Дезодоранты</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Дермокосметика">Дермокосметика</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Дермокосметика') {echo "active";} ?>" href="index.php?queue=Дермокосметика&tree_id=4698">Дермокосметика</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Для ванны и душа">Для ванны и душа</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Для ванны и душа') {echo "active";} ?>" href="index.php?queue=Для ванны и душа&tree_id=4698">Для ванны и душа</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Женская гигиена">Женская гигиена</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Женская гигиена') {echo "active";} ?>" href="index.php?queue=Женская гигиена&tree_id=4698">Женская гигиена</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Загар и защита от солнца">Загар и защита от солнца</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Загар и защита от солнца') {echo "active";} ?>" href="index.php?queue=Загар и защита от солнца&tree_id=4698">Загар и защита от солнца</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Защита от насекомых">Защита от насекомых</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Защита от насекомых') {echo "active";} ?>" href="index.php?queue=Защита от насекомых&tree_id=4698">Защита от насекомых</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Мужская линия">Мужская линия</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Мужская линия') {echo "active";} ?>" href="index.php?queue=Мужская линия&tree_id=4698">Мужская линия</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Оптика">Оптика</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Оптика') {echo "active";} ?>" href="index.php?queue=Оптика&tree_id=4698">Оптика</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Подарочные наборы">Подарочные наборы</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Подарочные наборы') {echo "active";} ?>" href="index.php?queue=Подарочные наборы&tree_id=4698">Подарочные наборы</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Уход за волосами">Уход за волосами</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Уход за волосами') {echo "active";} ?>" href="index.php?queue=Уход за волосами&tree_id=4698">Уход за волосами</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Уход за лицом">Уход за лицом</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Уход за лицом') {echo "active";} ?>" href="index.php?queue=Уход за лицом&tree_id=4698">Уход за лицом</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Уход за ногами">Уход за ногами</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Уход за ногами') {echo "active";} ?>" href="index.php?queue=Уход за ногами&tree_id=4698">Уход за ногами</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Уход за полостью рта">Уход за полостью рта</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Уход за полостью рта') {echo "active";} ?>" href="index.php?queue=Уход за полостью рта&tree_id=4698">Уход за полостью рта</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Уход за руками">Уход за руками</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Уход за руками') {echo "active";} ?>" href="index.php?queue=Уход за руками&tree_id=4698">Уход за руками</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Уход за телом">Уход за телом</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Уход за телом') {echo "active";} ?>" href="index.php?queue=Уход за телом&tree_id=4698">Уход за телом</a>
                                        </li>
                                        <li>
                                            <!-- <a href="index.php?queue=Эфирные и косметические масла">Эфирные и косметические масла</a> -->
                                            <a class="<?php if ($_GET['queue'] == 'Эфирные и косметические масла') {echo "active";} ?>" href="index.php?queue=Эфирные и косметические масла&tree_id=4698">Эфирные и косметические масла</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Content -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <ul class="nav-header pull-right">
                    <i class="glyphicon glyphicon-earphone"></i><big> +7 (700) 557-0057</big>
                        <a class="text-success" href="javascript:void(0)">
                             <i class="fa fa-2x fa-fw fa-whatsapp"></i>
                        </a>
                    
                        <a class="text-primary" href="javascript:void(0)">
                            <i class="fa fa-2x fa-fw fa-facebook-square"></i>
                        </a>
                        
                        <a class="text-primary" href="https://instagram.com/aika_pharma.kz">
                            <i class="fa fa-2x fa-fw fa-instagram"></i>
                        </a>
                        <big> | </big>
                        
                            <a class="text-gray-darker" href="javascript:void(0)">
                                <i class="fa fa-2x fa-fw fa-shopping-cart"></i> 
                            </a>
                        
                        
                   
                </ul>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                    
                    <li class="visible-xs">
                        <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                        <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </li>
                    <li class="js-header-search header-search">
                        <form class="form-horizontal" action="index.php" method="GET">
                            <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                                <input class="form-control" type="text" id="base-material-text" name="search-text" placeholder="Введите название лекарства">
                                <div class="input-group-btn">
                                    <button class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container" style="min-height: 597px;">
                
                            <!-- Hero Content -->
                            <div class="bg-video" data-vide-bg="assets/img/videos/hero_tech" data-vide-options="posterType: jpg, position: 50% 75%" style="position: relative;"><div style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 50% 75%; background-image: none;"><video autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 75%; left: 50%; transform: translate(-50%, -75%); visibility: visible; opacity: 1; width: auto; height: 569px;"><source src="assets/img/videos/hero_tech.mp4" type="video/mp4"><source src="assets/img/videos/hero_tech.webm" type="video/webm"><source src="assets/img/videos/hero_tech.ogv" type="video/ogg"></video></div>
                                <div class="bg-primary-dark-op">
                                    <section class="content content-full content-boxed">
                                        <!-- Section Content -->
                                        <div class="text-center push-30-t animated fadeIn" data-toggle="appear" data-class="animated fadeIn">
                                            <a class="h5 text-white" href="index.php">
                                                <img width="150" height="40" src="assets/img/avatars/1.png" alt="">
                                                <br>
                                            </a>
                                        </div>
                                        <div class="push-150-t push-100 text-center">
                                            <h1 class="h2 font-w700 text-white push-20 animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">Фармацевтическая компания - интернет магазин</h1>
                                            <h2 class="h4 text-white-op animated fadeIn" data-toggle="appear" data-timeout="750" data-class="animated fadeIn"><em>по низким ценам и с хорошим ассортиментом! Эффективные препараты по доступной цене!</em></h2>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            


                                        </div>
                                        <!-- END Section Content -->
                                    </section>
                                </div>
                            </div>
                            <!-- END Hero Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
                <div class="pull-right">
                    <a class="font-w600" href="#" target="_blank">Aika_pharma.kz</a>
                </div>
<!--                <div class="pull-left">
                    <a class="font-w600" href="#" target="_blank">OneUI</a> &copy; <span class="js-year-copy">2021</span>
                </div>-->
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps Block -->
                    <div class="block block-themed block-transparent">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Apps</h3>
                        </div>
                        <div class="block-content">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="base_pages_dashboard.html">
                                        <div class="block-content text-white bg-default">
                                            <i class="si si-speedometer fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Backend</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="bd_dashboard.html">
                                        <div class="block-content text-white bg-modern">
                                            <i class="si si-rocket fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Boxed</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Apps Block -->
                </div>
            </div>
        </div>
        <!-- END Apps Modal -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/app.js"></script>

        <!-- Page Plugins -->
        <script src="assets/js/plugins/slick/slick.min.js"></script>
        <script src="assets/js/plugins/chartjs/Chart.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_pages_dashboard.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>
    </body>
</html>