<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-right">

                <div class="dropdown d-inline-block ml-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="mdi mdi-tune"></i>
                    </button>
                </div>

            </div>

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/" class="logo logo-dark">
                    <span class="logo-sm">
<<<<<<< HEAD
                        <img src={{assets('assets/images/logo-sm-dark.png')}} alt="" height="22">
=======
                        <img src="{{assets('assets/images/logo-sm-dark.png')}}" alt="" height="22">
>>>>>>> 5c8cc0c634f4b3b0593c50b505662042ec8dcb73
                    </span>
                    <span class="logo-lg">
                        <img src={{{{ asset('assets/images/logo-dark.png') }}}} alt="" height="20">
                    </span>
                </a>

                <a href="/" class="logo logo-light">
                    <span class="logo-sm">
<<<<<<< HEAD
                        <img src={{{{ asset('assets/images/logo-sm-light.png') }}}} alt="" height="22">
=======
                        <img src={{assets('assets/images/logo-sm-light.png')}} alt="" height="22">
>>>>>>> 5c8cc0c634f4b3b0593c50b505662042ec8dcb73
                    </span>
                    <span class="logo-lg">
                        <img src={{{{ asset('assets/images/logo-light.png') }}}} alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="topnav">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">
                                    Dashboard
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Elements <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu dropdown-mega-menu-xl px-2" aria-labelledby="topnav-uielement">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="dropdown-item-text font-weight-semibold font-size-16">
                                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-box"></i></div> UI Elements</div>

                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <a href={{{{ asset('ui-alerts.html') }}}} class="dropdown-item">Alerts</a>
                                                    <a href={{ui-badge.html}} class="dropdown-item">Badge</a>
                                                    <a href={{{{ asset('ui-buttons.html') }}}} class="dropdown-item">Buttons</a>
                                                    <a href={{{{ asset('ui-cards.html') }}}} class="dropdown-item">Cards</a>
                                                    <a href={{{{ asset('ui-dropdowns.html') }}}} class="dropdown-item">Dropdowns</a>
                                                    <a href={{{{ asset('ui-navs.html') }}}} class="dropdown-item">Navs</a>
                                                </div>
                                                <div class="col-lg-5">
                                                    <div>
                                                        <a href={{{{ asset('ui-tabs-accordions.html') }}}} class="dropdown-item">Tabs &amp; Accordions</a>
                                                        <a href={{{{ asset('ui-modals.html') }}}} class="dropdown-item">Modals</a>
                                                        <a href={{{{ asset('ui-images.html') }}}} class="dropdown-item">Images</a>
                                                        <a href={{{{ asset('ui-progressbars.html') }}}} class="dropdown-item">Progress Bars</a>
                                                        <a href={{{{ asset('ui-pagination.html') }}}} class="dropdown-item">Pagination</a>
                                                        <a href={{{{ asset('ui-popover-tooltips.html') }}}} class="dropdown-item">Popover & Tooltips</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="dropdown-item-text font-weight-semibold font-size-16">
                                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layer-group"></i></div> Advanced UI</div>

                                            <div>
                                                <a href={{{{ asset('advanced-alertify.html') }}}} class="dropdown-item">Alertify</a>
                                                <a href={{{{ asset('advanced-rating.html') }}}} class="dropdown-item">Rating</a>
                                                <a href={{{{ asset('advanced-nestable.html') }}}} class="dropdown-item">Nestable</a>
                                                <a href={{{{ asset('advanced-rangeslider.html') }}}} class="dropdown-item">Range Slider</a>
                                                <a href={{{{ asset('advanced-sweet-alert.html') }}}} class="dropdown-item">Sweet-Alert</a>
                                                <a href={{{{ asset('advanced-lightbox.html') }}}} class="dropdown-item">Lightbox</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Components <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-components">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="d-inline-block icons-sm mr-2"><i class="uim uim-comment-message"></i></div> Email
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-email">
                                            <a href={{{{ asset('email-inbox.html') }}}} class="dropdown-item">Inbox</a>
                                            <a href={{{{ asset('email-read.html') }}}} class="dropdown-item">Email Read</a>
                                            <a href={{{{ asset('email-compose.htm') }}}} class="dropdown-item">Email Compose</a>
                                        </div>
                                    </div>
                                    <a href="calendar.html" class="dropdown-item">
                                        <div class="d-inline-block icons-sm mr-2"><i class="uim uim-schedule"></i></div> Calendar</a>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icon" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="d-inline-block icons-sm mr-2"><i class="uim uim-object-ungroup"></i></div>Icons
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-icon">
                                            <a href={{{{ asset('icons-materialdesign.html') }}}} class="dropdown-item">Material Design</a>
                                            <a href={{{{ asset('icons-dripicons.html') }}}} class="dropdown-item">Dripicons</a>
                                            <a href={{{{ asset('icons-fontawesome.html') }}}} class="dropdown-item">Font awesome 5</a>
                                            <a href={{{{ asset('icons-themify.html') }}}} class="dropdown-item">Themify</a>
                                            <a href={{{{ asset('icons-unicons.html') }}}} class="dropdown-item">Unicons - Dual Tone</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="d-inline-block icons-sm mr-2"><i class="uim uim-table"></i></div>Tables
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-table">
                                            <a href={{{{ asset('tables-basic.html') }}}} class="dropdown-item">Basic Tables</a>
                                            <a href={{{{ asset('tables-datatable.html') }}}} class="dropdown-item">Data Tables</a>
                                            <a href={{{{ asset('tables-responsive.html') }}}} class="dropdown-item">Responsive Table</a>
                                            <a href={{{{ asset('tables-editable.html') }}}} class="dropdown-item">Editable Table</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="d-inline-block icons-sm mr-2"><i class="uim uim-document-layout-left"></i></div>Forms
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-form">
                                            <a href={{{{ asset('form-elements.html') }}}} class="dropdown-item">Form Elements</a>
                                            <a href={{{{ asset('form-validation.html') }}}} class="dropdown-item">Form Validation</a>
                                            <a href={{{{ asset('form-advanced.html') }}}} class="dropdown-item">Form Advanced</a>
                                            <a href={{{{ asset('form-editors.html') }}}} class="dropdown-item">Form Editors</a>
                                            <a href={{{{ asset('form-uploads.html') }}}} class="dropdown-item">Form File Upload</a>
                                            <a href={{{{ asset('form-mask.html') }}}} class="dropdown-item">Form Mask</a>
                                            <a href={{{{ asset('form-summernote.html') }}}} class="dropdown-item">Summernote</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-chart" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="d-inline-block icons-sm mr-2"><i class="uim uim-chart-pie"></i></div>Charts
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-chart">
                                            <a href={{{{ asset('charts-morris.html') }}}} class="dropdown-item">Morris</a>
                                            <a href={{{{ asset('charts-apex.html') }}}} class="dropdown-item">Apex</a>
                                            <a href={{{{ asset('charts-chartist.html') }}}} class="dropdown-item">Chartist</a>
                                            <a href={{{{ asset('charts-chartjs.html') }}}} class="dropdown-item">Chartjs</a>
                                            <a href={{{{ asset('charts-flot.html') }}}} class="dropdown-item">Flot</a>
                                            <a href={{{{ asset('charts-sparkline.html') }}}} class="dropdown-item">Sparkline</a>
                                            <a href={{{{ asset('charts-knob.html') }}}} class="dropdown-item">Jquery Knob</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-maps" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="d-inline-block icons-sm mr-2"><i class="uim uim-comment-plus"></i></div>Maps
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-maps">
                                            <a href={{{{ asset('maps-google.html') }}}} class="dropdown-item">Google map</a>
                                            <a href={{{{ asset('maps-vector.html') }}}} class="dropdown-item">Vector map</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Extra pages <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-more">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Authentication <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                            <a href={{{{ asset('auth-login.html') }}}} class="dropdown-item">Login</a>
                                            <a href={{{{ asset('auth-register.html') }}}} class="dropdown-item">Register</a>
                                            <a href={{{{ asset('auth-recoverpw.html') }}}} class="dropdown-item">Recover Password</a>
                                            <a href={{{{ asset('auth-lock-screen.html') }}}} class="dropdown-item">Lock Screen</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Utility <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                            <a href={{{{ asset('pages-starter.html') }}}} class="dropdown-item">Starter Page</a>
                                            <a href={{{{ asset('pages-maintenance.html') }}}} class="dropdown-item">Maintenance</a>
                                            <a href={{{{ asset('"pages-comingsoon.html"') }}}} class="dropdown-item">Coming Soon</a>
                                            <a href={{{{ asset('pages-timeline.html') }}}} class="dropdown-item">Timeline</a>
                                            <a href={{{{ asset('pages-gallery.html') }}}} class="dropdown-item">Gallery</a>
                                            <a href={{{{ asset('pages-faqs.html') }}}} class="dropdown-item">FAQs</a>
                                            <a href={{{{ asset('pages-pricing.html') }}}} class="dropdown-item">Pricing</a>
                                            <a href={{{{ asset('pages-404.html') }}}} class="dropdown-item">Error 404</a>
                                            <a href={{{{ asset('pages-500.html') }}}} class="dropdown-item">Error 500</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Layouts <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-layout">
                                            <a href={{{{ asset('layouts-horizontal.html') }}}} class="dropdown-item">Horizontal</a>
                                            <a href={{{{ asset('layouts-dark-sidebar.html') }}}} class="dropdown-item">Dark Sidebar</a>
                                            <a href={{{{ asset('layouts-sidebar-sm.html') }}}} class="dropdown-item">Small Sidebar</a>
                                            <a href={{{{ asset('layouts-icon-sidebar.html') }}}} class="dropdown-item">Icon Sidebar</a>
                                            <a href={{{{ asset('layouts-colored-sidebar.html') }}}} class="dropdown-item">Dark Topbar</a>
                                            <a href={{{{ asset('layouts-boxed.html') }}}} class="dropdown-item">Boxed Layout</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>


</header>
