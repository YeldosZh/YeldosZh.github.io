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
                                    <a class="active" href="map.php"><i class="fa fa-plus-square"></i><span class="sidebar-mini-hide">Аптеки</span></a>
                                </li>
                                <li>
                                    <a href="contacts.php"><i class="glyphicon glyphicon-user"></i><span class="sidebar-mini-hide">Контакты</span></a>
                                </li>
                                <li class="nav-main-heading"><span style="color: rgb(32, 228, 163);" class="sidebar-mini-hide">Коталог товаров</span></li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-medkit"></i><span class="sidebar-mini-hide">Лекарства</span></a>
                                    <ul>       
                                        <li>
                                            <a href="index.php?queue=Аналгетики">Анальгетики</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Антибиотики">Антибиотики</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Антисептики">Антисептики</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Гинекологические препараты">Гинекологические препараты</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Гормональные препараты">Гормональные препараты</a>
                                        </li>   
                                        <li>
                                            <a href="index.php?queue=Для повышения иммунитета">Для повышения иммунитета</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Гормональные препараты">Гормональные препараты</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Жаропонижающие">Жаропонижающие</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Женские препараты">Женские препараты</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Инъекционные растворы">Инъекционные растворы</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Кожные заболевания">Кожные заболевания</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение алкоголизма, наркомании, табакокурения">Лечение алкоголизма, наркомании, табакокурения</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение артериального давления">Лечение артериального давления</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение геморроя">Лечение геморроя</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение глаз">Лечение глаз</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение головного кровооброщения">Лечение головного кровооброщения</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение десен">Лечение десен</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение жкт">Лечение жкт</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение заболеваний мочеполовой системы">Лечение заболеваний мочеполовой системы</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение заболеваний опорно-двигательного аппарата">Лечение заболеваний опорно-двигательного аппарата</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение лор заболеваний">Лечение лор заболеваний</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение неврологических нарушений">Лечение неврологических нарушений</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение печени">Лечение печени</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение почек">Лечение почек</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение ран и ожогов">Лечение ран и ожогов</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение сахарного диабета">Лечение сахарного диабета</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Лечение сердечно-сосудистых заболеваний">Лечение сердечно-сосудистых заболеваний</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Мужские препараты">Мужские препараты</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Онкологические препараты">Онкологические препараты</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=От паразитов">От паразитов</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Препараты урологии и гинекологии">Препараты урологии и гинекологии</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Пробиотики и пребиотики">Пробиотики и пребиотики</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Противоастматические препараты">Противоастматические препараты</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Противовирусные препараты">Противовирусные препараты</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Противовоспалительные средства">Противовоспалительные средства</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Противогрибковые средства">Противогрибковые средства</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Противокашлевые препараты">Противокашлевые препараты</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Рецептурные препараты">Рецептурные препараты</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Слабительные препараты">Слабительные препараты</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Спазмолитические препараты">Спазмолитические препараты</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=Средства от аллергии">Средства от аллергии</a>
                                        </li> 
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-medkit"></i><span class="sidebar-mini-hide">Витамины и БАДы</span></a>
                                    <ul>       
                                        <li>
                                            <a href="index.php?queue=БАДы">БАДы</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Витамины и минералы">Витамины и минералы</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Спорт и фитнес">Спорт и фитнес</a>
                                        </li> 
                                        <li>
                                            <a href="index.php?queue=АнтисепТравы и фиточаитики">Травы и фиточаи</a>
                                        </li> 
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-medkit"></i><span class="sidebar-mini-hide">Изделия мед. назначения</span></a>
                                    <ul>       
                                        <li>
                                            <a href="index.php?queue=Медицинские расходные материалы">Медицинские расходные материалы</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Диагностические тесты">Диагностические тесты</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Лечебный трикотаж">Лечебный трикотаж</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Медицинские изделия">Медицинские изделия</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Медицинские инструменты">Медицинские инструменты</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Медицинские приборы">Медицинские приборы</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Ортопедические изделия">Ортопедические изделия</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Перевязочные материалы">Перевязочные материалы</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Средства ухода за больными">Средства ухода за больными</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Технические средства реабилитации">Технические средства реабилитации</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-medkit"></i><span class="sidebar-mini-hide">Мать и дитя</span></a>
                                    <ul>
                                        <li>
                                            <a href="index.php?queue=Детская мебель">Детская мебель</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Детское питание и кормление">Детское питание и кормление</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Одежда">Одежда</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Питание">Питание</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Товары для детей">Товары для детей</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Товары для мам">Товары для мам</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-medkit"></i><span class="sidebar-mini-hide">Красота и гигиена</span></a>
                                    <ul>
                                        <li>
                                            <a href="index.php?queue=Бытовая химия">Бытовая химия</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Гигиена">Гигиена</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Дезодоранты">Дезодоранты</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Дермокосметика">Дермокосметика</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Для ванны и душа">Для ванны и душа</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Женская гигиена">Женская гигиена</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Загар и защита от солнца">Загар и защита от солнца</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Защита от насекомых">Защита от насекомых</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Мужская линия">Мужская линия</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Оптика">Оптика</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Подарочные наборы">Подарочные наборы</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Уход за волосами">Уход за волосами</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Уход за лицом">Уход за лицом</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Уход за ногами">Уход за ногами</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Уход за полостью рта">Уход за полостью рта</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Уход за руками">Уход за руками</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Уход за телом">Уход за телом</a>
                                        </li>
                                        <li>
                                            <a href="index.php?queue=Эфирные и косметические масла">Эфирные и косметические масла</a>
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
                        
                        <a class="text-primary" href="javascript:void(0)">
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
                                <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Google Map Container is initialized in js/pages/base_comp_maps_full.js, for more examples you can check out https://hpneo.github.io/gmaps/ -->
                    <script src="https://api-maps.yandex.ru/2.1/?apikey=41a86c62-b8b7-46fa-b6e6-1b91655a606f&lang=ru_RU" type="text/javascript">
                    </script>
                        <script type="text/javascript">
                        ymaps.ready(init);

                        function init() {
                            var myMap = new ymaps.Map("map", {
                                    center: [43.25654, 76.92848],
                                    zoom: 15
                                }, {
                                    searchControlProvider: 'yandex#search'
                                }),

                                myGeoObject = new ymaps.GeoObject(),
                                myPieChart = new ymaps.Placemark();

                                myMap.geoObjects
                                .add(myGeoObject)
                                .add(myPieChart)
                                .add(new ymaps.Placemark([43.2557,76.9280], {
                                    iconCaption: 'Аптека, Казыбек би 117/1'
                                }, {
                                    preset: 'islands#greenDotIconWithCaption'
                                }));
                        }
                    </script>
                    <div id="map" style="width: 1200px; height: 800px"></div>
            </main>
            <!-- END Main Container -->
            

            <!-- Footer -->
            <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
                <div class="pull-right">
                    <a class="font-w600" href="#" target="_blank">Aika_pharma.kz</a>
                </div>
                <div class="pull-left">
                    <a class="font-w600" href="#" target="_blank">OneUI</a> &copy; <span class="js-year-copy">2021</span>
                </div>
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