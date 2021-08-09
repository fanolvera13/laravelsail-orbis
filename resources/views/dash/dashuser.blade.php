<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Dashboard 2 | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="../assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="../assets/css/config/saas/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="../assets/css/config/saas/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="../assets/css/config/saas/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="../assets/css/config/saas/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body class="loading" data-layout-mode="two-column" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": false}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('dash.partials.navbar')
<!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" >

                    <div class="sidebar-content">
                        <div class="sidebar-icon-menu h-100" data-simplebar>
                            <!-- LOGO -->
                            <a href="index.html" class="logo">
                                <span>
                                    <img src="../assets/images/logo-sm-light.png" alt="" height="28">
                                </span>
                            </a>
                            <nav class="nav flex-column" id="two-col-sidenav-main">
                                <a class="nav-link" href="#dashboard" title="Dashboard">
                                    <i data-feather="home"></i>
                                </a>
                                <a class="nav-link" href="#apps" title="Apps">
                                    <i data-feather="grid"></i>
                                </a>
                                <a class="nav-link" href="#pages" title="Pages">
                                    <i data-feather="file-text"></i>
                                </a>
                                <a class="nav-link" href="#layouts" title="Layouts">
                                    <i data-feather="layout"></i>
                                </a>
                                <a class="nav-link" href="#uielements" title="UI Elements">
                                    <i data-feather="briefcase"></i>
                                </a>
                                <a class="nav-link" href="#components" title="Components">
                                    <i data-feather="package"></i>
                                </a>
                                <a class="nav-link" href="widgets.html" title="Widgets">
                                    <i data-feather="gift"></i>
                                </a>
                            </nav>
                        </div>
                        <!--- Sidemenu -->
                        <div class="sidebar-main-menu">
                            <div id="two-col-menu" class="h-100" data-simplebar>
                                <div class="twocolumn-menu-item d-block" id="dashboard">
                                    <div class="title-box">
                                        <h5 class="menu-title">Dashboards</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="index.html">Dashboard 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="dashboard-2.html">Dashboard 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="dashboard-3.html">Dashboard 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="dashboard-4.html">Dashboard 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="twocolumn-menu-item" id="apps">
                                    <h5 class="menu-title">Apps</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-calendar.html">Calendar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-chat.html">Chat</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarEcommerce" data-bs-toggle="collapse" class="nav-link">
                                                <span> Ecommerce </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarEcommerce">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="ecommerce-dashboard.html">Dashboard</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-products.html">Products</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-product-detail.html">Product Detail</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-product-edit.html">Add Product</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-customers.html">Customers</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-orders.html">Orders</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-order-detail.html">Order Detail</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-sellers.html">Sellers</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-cart.html">Shopping Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-checkout.html">Checkout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrm" data-bs-toggle="collapse" class="nav-link">
                                                <span> CRM </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarCrm">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="crm-dashboard.html">Dashboard</a>
                                                    </li>
                                                    <li>
                                                        <a href="crm-contacts.html">Contacts</a>
                                                    </li>
                                                    <li>
                                                        <a href="crm-opportunities.html">Opportunities</a>
                                                    </li>
                                                    <li>
                                                        <a href="crm-leads.html">Leads</a>
                                                    </li>
                                                    <li>
                                                        <a href="crm-customers.html">Customers</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarEmail" data-bs-toggle="collapse" class="nav-link">
                                                <span> Email </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarEmail">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="email-inbox.html">Inbox</a>
                                                    </li>
                                                    <li>
                                                        <a href="email-read.html">Read Email</a>
                                                    </li>
                                                    <li>
                                                        <a href="email-compose.html">Compose Email</a>
                                                    </li>
                                                    <li>
                                                        <a href="email-templates.html">Email Templates</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-social-feed.html">Social Feed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-companies.html">Companies</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarProjects" data-bs-toggle="collapse" class="nav-link">
                                                <span> Projects </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarProjects">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="project-list.html">List</a>
                                                    </li>
                                                    <li>
                                                        <a href="project-detail.html">Detail</a>
                                                    </li>
                                                    <li>
                                                        <a href="project-create.html">Create Project</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarTasks" data-bs-toggle="collapse" class="nav-link">
                                                <span> Tasks </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarTasks">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="task-list.html">List</a>
                                                    </li>
                                                    <li>
                                                        <a href="task-details.html">Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="task-kanban-board.html">Kanban Board</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarContacts" data-bs-toggle="collapse" class="nav-link">
                                                <span> Contacts </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarContacts">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="contacts-list.html">Members List</a>
                                                    </li>
                                                    <li>
                                                        <a href="contacts-profile.html">Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarTickets" data-bs-toggle="collapse" class="nav-link">
                                                <span> Tickets </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarTickets">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="tickets-list.html">List</a>
                                                    </li>
                                                    <li>
                                                        <a href="tickets-detail.html">Detail</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-file-manager.html">File Manager</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="twocolumn-menu-item" id="pages">
                                    <div class="title-box">
                                        <h5 class="menu-title">Pages</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-starter.html">Starter</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-timeline.html">Timeline</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-sitemap.html">Sitemap</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-invoice.html">Invoice</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-faqs.html">FAQs</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-search-results.html">Search Results</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-pricing.html">Pricing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-maintenance.html">Maintenance</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-coming-soon.html">Coming Soon</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-gallery.html">Gallery</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarAuth" data-bs-toggle="collapse" class="nav-link">
                                                    <span> Auth Pages </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarAuth">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="auth-login.html">Log In</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-login-2.html">Log In 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-register.html">Register</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-register-2.html">Register 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-signin-signup.html">Signin - Signup</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-signin-signup-2.html">Signin - Signup 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-recoverpw.html">Recover Password</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-recoverpw-2.html">Recover Password 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-lock-screen.html">Lock Screen</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-lock-screen-2.html">Lock Screen 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-logout.html">Logout</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-logout-2.html">Logout 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-confirm-mail.html">Confirm Mail</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-confirm-mail-2.html">Confirm Mail 2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarErrors" data-bs-toggle="collapse" class="nav-link">
                                                    Error Pages <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarErrors">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="pages-404.html">Error 404</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-404-two.html">Error 404 Two</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-404-alt.html">Error 404-alt</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-500.html">Error 500</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-500-two.html">Error 500 Two</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                
                                        </ul>
                                    </div>
                                </div>

                                <div class="twocolumn-menu-item" id="layouts">
                                    <div class="title-box">
                                        <h5 class="menu-title">Layouts</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="layouts-vertical.html">Vertical</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="layouts-horizontal.html">Horizontal</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="layouts-detached.html">Detached</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="layouts-two-tone-icons.html">Two Tones Icons</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="layouts-preloader.html">Preloader</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="twocolumn-menu-item" id="uielements">
                                    <div class="title-box">
                                        <h5 class="menu-title">UI Elements</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-buttons.html">Buttons</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-cards.html">Cards</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-avatars.html">Avatars</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-portlets.html">Portlets</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-modals.html">Modals</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-progress.html">Progress</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-notifications.html">Notifications</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-offcanvas.html">Offcanvas</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-spinners.html">Spinners</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-images.html">Images</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-carousel.html">Carousel</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-list-group.html">List Group</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-video.html">Embed Video</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-dropdowns.html">Dropdowns</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-ribbons.html">Ribbons</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-tooltips-popovers.html">Tooltips & Popovers</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-general.html">General UI</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-typography.html">Typography</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-grid.html">Grid</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="twocolumn-menu-item" id="components">
                                    <div class="title-box">
                                        <h5 class="menu-title">Components</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="#sidebarExtendedui" data-bs-toggle="collapse" class="nav-link">
                                                    <span class="badge bg-info float-end">Hot</span>
                                                    <span> Extended UI </span>
                                                </a>
                                                <div class="collapse" id="sidebarExtendedui">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="extended-nestable.html">Nestable List</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-range-slider.html">Range Slider</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-dragula.html">Dragula</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-animation.html">Animation</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-sweet-alert.html">Sweet Alert</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-tour.html">Tour Page</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-scrollspy.html">Scrollspy</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-loading-buttons.html">Loading Buttons</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarIcons" data-bs-toggle="collapse" class="nav-link">
                                                    <span> Icons </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarIcons">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="icons-two-tone.html">Two Tone Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="icons-feather.html">Feather Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="icons-mdi.html">Material Design Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="icons-dripicons.html">Dripicons</a>
                                                        </li>
                                                        <li>
                                                            <a href="icons-font-awesome.html">Font Awesome 5</a>
                                                        </li>
                                                        <li>
                                                            <a href="icons-themify.html">Themify</a>
                                                        </li>
                                                        <li>
                                                            <a href="icons-simple-line.html">Simple Line</a>
                                                        </li>
                                                        <li>
                                                            <a href="icons-weather.html">Weather</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarForms" data-bs-toggle="collapse" class="nav-link">
                                                    <span> Forms </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarForms">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="forms-elements.html">General Elements</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-advanced.html">Advanced</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-validation.html">Validation</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-pickers.html">Pickers</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-wizard.html">Wizard</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-masks.html">Masks</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-quilljs.html">Quilljs Editor</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-file-uploads.html">File Uploads</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-x-editable.html">X Editable</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-image-crop.html">Image Crop</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarTables" data-bs-toggle="collapse" class="nav-link">
                                                    <span> Tables </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarTables">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="tables-basic.html">Basic Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="tables-datatables.html">Data Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="tables-editable.html">Editable Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="tables-responsive.html">Responsive Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="tables-footables.html">FooTable</a>
                                                        </li>
                                                        <li>
                                                            <a href="tables-bootstrap.html">Bootstrap Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="tables-tablesaw.html">Tablesaw Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="tables-jsgrid.html">JsGrid Tables</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarCharts" data-bs-toggle="collapse" class="nav-link">
                                                    <span> Charts </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarCharts">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="charts-apex.html">Apex Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-flot.html">Flot Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-morris.html">Morris Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-chartjs.html">Chartjs Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-peity.html">Peity Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-chartist.html">Chartist Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-c3.html">C3 Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-sparklines.html">Sparklines Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-knob.html">Jquery Knob Charts</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarMaps" data-bs-toggle="collapse" class="nav-link">
                                                    <span> Maps </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarMaps">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="maps-google.html">Google Maps</a>
                                                        </li>
                                                        <li>
                                                            <a href="maps-vector.html">Vector Maps</a>
                                                        </li>
                                                        <li>
                                                            <a href="maps-mapael.html">Mapael Maps</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarMultilevel" data-bs-toggle="collapse" class="nav-link">
                                                    <span> Multi Level </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarMultilevel">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="#sidebarMultilevel2" data-bs-toggle="collapse">
                                                                Second Level <span class="menu-arrow"></span>
                                                            </a>
                                                            <div class="collapse" id="sidebarMultilevel2">
                                                                <ul class="nav-second-level">
                                                                    <li>
                                                                        <a href="javascript: void(0);">Item 1</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript: void(0);">Item 2</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                
                                                        <li>
                                                            <a href="#sidebarMultilevel3" data-bs-toggle="collapse">
                                                                Third Level <span class="menu-arrow"></span>
                                                            </a>
                                                            <div class="collapse" id="sidebarMultilevel3">
                                                                <ul class="nav-second-level">
                                                                    <li>
                                                                        <a href="javascript: void(0);">Item 1</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#sidebarMultilevel4" data-bs-toggle="collapse">
                                                                            Item 2 <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <div class="collapse" id="sidebarMultilevel4">
                                                                            <ul class="nav-second-level">
                                                                                <li>
                                                                                    <a href="javascript: void(0);">Item 1</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);">Item 2</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- End Sidebar -->

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item active">Dashboard 2</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dasboard para el usuario rol User</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-sm bg-primary rounded">
                                                    <i class="fe-aperture avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark my-1">$<span data-plugin="counterup">12,145</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Income status</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h6 class="text-uppercase">Target <span class="float-end">60%</span></h6>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="visually-hidden">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-sm bg-success rounded">
                                                    <i class="fe-shopping-cart avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup">1576</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">January's Sales</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h6 class="text-uppercase">Target <span class="float-end">49%</span></h6>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: 49%">
                                                    <span class="visually-hidden">49% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-sm bg-warning rounded">
                                                    <i class="fe-bar-chart-2 avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark my-1">$<span data-plugin="counterup">8947</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Payouts</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h6 class="text-uppercase">Target <span class="float-end">18%</span></h6>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%">
                                                    <span class="visually-hidden">18% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-sm bg-info rounded">
                                                    <i class="fe-cpu avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup">178</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Available Stores</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h6 class="text-uppercase">Target <span class="float-end">74%</span></h6>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%">
                                                    <span class="visually-hidden">74% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4 col-md-12">
                                <!-- Portlet card -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Lifetime Sales</h4>

                                        <div id="cardCollpase1" class="collapse pt-3 show">
                                            <div class="text-center">
                                                <div id="lifetime-sales" data-colors="#2892fd,#5ad092"></div>
        
                                                <div class="row mt-3">
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                        <h4><i class="fe-arrow-down text-danger me-1"></i>$7.8k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>$1.4k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                        <h4><i class="fe-arrow-down text-danger me-1"></i>$9.8k</h4>
                                                    </div>
                                                </div> <!-- end row -->
                                                
                                            </div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Income Amounts</h4>

                                        <div id="cardCollpase2" class="collapse pt-3 show">
                                            <div class="text-center">
                                                <div id="income-amounts" data-colors="#4fc6e1"></div>
                                                <div class="row mt-3">
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>641</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                        <h4><i class="fe-arrow-down text-danger me-1"></i>234</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>3201</h4>
                                                    </div>
                                                </div> <!-- end row -->
                                            </div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Total Users</h4>

                                        <div id="cardCollpase3" class="collapse pt-3 show">
                                            <div class="text-center">
                                                <div id="total-users" data-colors="#4fc6e1,#fdc45e,#e3eaef,#6658dd"></div>
                                                <div class="row mt-3">
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                        <h4><i class="fe-arrow-down text-danger me-1"></i>18k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>3.25k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>28k</h4>
                                                    </div>
                                                </div> <!-- end row -->
                                            </div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false" aria-controls="cardCollpase4"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Revenue By Location</h4>

                                        <div id="cardCollpase4" class="collapse pt-3 show">
                                            <div id="world-map-markers" style="height: 433px"></div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false" aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Top Selling Products</h4>

                                        <div id="cardCollpase5" class="collapse pt-3 show">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-centered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Product Name</th>
                                                            <th>Price</th>
                                                            <th>Quantity</th>
                                                            <th>Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>ASOS Ridley High Waist</td>
                                                            <td>$79.49</td>
                                                            <td>82</td>
                                                            <td>$6,518.18</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Marco Lightweight Shirt</td>
                                                            <td>$128.50</td>
                                                            <td>37</td>
                                                            <td>$4,754.50</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Half Sleeve Shirt</td>
                                                            <td>$39.99</td>
                                                            <td>64</td>
                                                            <td>$2,559.36</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lightweight Jacket</td>
                                                            <td>$20.00</td>
                                                            <td>184</td>
                                                            <td>$3,680.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Marco Shoes</td>
                                                            <td>$28.49</td>
                                                            <td>69</td>
                                                            <td>$1,965.81</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ASOS Ridley High Waist</td>
                                                            <td>$79.49</td>
                                                            <td>82</td>
                                                            <td>$6,518.18</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Half Sleeve Shirt</td>
                                                            <td>$39.99</td>
                                                            <td>64</td>
                                                            <td>$2,559.36</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lightweight Jacket</td>
                                                            <td>$20.00</td>
                                                            <td>184</td>
                                                            <td>$3,680.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- end table responsive-->
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
    
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link py-2" data-bs-toggle="tab" href="#chat-tab" role="tab">
                            <i class="mdi mdi-message-text d-block font-22 my-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" data-bs-toggle="tab" href="#tasks-tab" role="tab">
                            <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab" role="tab">
                            <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content pt-0">
                    <div class="tab-pane" id="chat-tab" role="tabpanel">
                
                        <form class="search-bar p-3">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>

                        <h6 class="fw-medium px-3 mt-2 text-uppercase">Group Chats</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-success"></i>
                                <span class="mb-0 mt-1">App Development</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-warning"></i>
                                <span class="mb-0 mt-1">Office Work</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-danger"></i>
                                <span class="mb-0 mt-1">Personal Group</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1"></i>
                                <span class="mb-0 mt-1">Freelance</span>
                            </a>
                        </div>

                        <h6 class="fw-medium px-3 mt-3 text-uppercase">Favourites <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="../assets/images/users/user-10.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Andrew Mackie</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="../assets/images/users/user-1.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Rory Dalyell</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="../assets/images/users/user-9.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Jaxon Dunhill</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <h6 class="fw-medium px-3 mt-3 text-uppercase">Other Chats <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>

                        <div class="p-2 pb-4">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="../assets/images/users/user-2.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Jackson Therry</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="../assets/images/users/user-4.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Charles Deakin</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="../assets/images/users/user-5.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Ryan Salting</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">If several languages coalesce the grammar of the resulting.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="../assets/images/users/user-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Sean Howse</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="../assets/images/users/user-7.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Dean Coward</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="../assets/images/users/user-8.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Hayley East</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="text-center mt-3">
                                <a href="javascript:void(0);" class="btn btn-sm btn-white">
                                    <i class="mdi mdi-spin mdi-loading me-2"></i>
                                    Load more
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="tasks-tab" role="tabpanel">
                        <h6 class="fw-medium p-3 m-0 text-uppercase">Working Tasks</h6>
                        <div class="px-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">App Development<span class="float-end">75%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Database Repair<span class="float-end">37%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Backup Create<span class="float-end">52%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <h6 class="fw-medium px-3 mb-0 mt-4 text-uppercase">Upcoming Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Sales Reporting<span class="float-end">12%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Redesign Website<span class="float-end">67%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">New Admin Design<span class="float-end">84%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <div class="p-3 mt-2 d-grid">
                            <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Create Task</a>
                        </div>

                    </div>
                    <div class="tab-pane active" id="settings-tab" role="tabpanel">
                        <h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                            <span class="d-block py-1">Theme Settings</span>
                        </h6>

                        <div class="p-3">
                            <div class="alert alert-warning" role="alert">
                                <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                            </div>

                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
                                    id="light-mode-check" checked />
                                <label class="form-check-label" for="light-mode-check">Light Mode</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
                                    id="dark-mode-check" />
                                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                            </div>

                            <!-- Width -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="width" value="fluid" id="fluid-check" checked />
                                <label class="form-check-label" for="fluid-check">Fluid</label>
                            </div>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="width" value="boxed" id="boxed-check" />
                                <label class="form-check-label" for="boxed-check">Boxed</label>
                            </div>

                            <!-- Left Sidebar-->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="light" id="light-check" />
                                <label class="form-check-label" for="light-check">Light</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="dark" id="dark-check" checked/>
                                <label class="form-check-label" for="dark-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="brand" id="brand-check" />
                                <label class="form-check-label" for="brand-check">Brand</label>
                            </div>

                            <div class="form-check form-switch mb-3">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="gradient" id="gradient-check" />
                                <label class="form-check-label" for="gradient-check">Gradient</label>
                            </div>


                            <!-- Topbar -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check"
                                    checked />
                                <label class="form-check-label" for="darktopbar-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                                <label class="form-check-label" for="lighttopbar-check">Light</label>
                            </div>


                            <div class="d-grid mt-4">
                                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                                <a href="https://1.envato.market/uboldadmin" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="../assets/js/vendor.min.js"></script>

        <!-- Plugins js-->
        <script src="../assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="../assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

        <!-- Dashboard 2 init -->
        <script src="../assets/js/pages/dashboard-2.init.js"></script>

        <!-- App js-->
        <script src="../assets/js/app.min.js"></script>
        
    </body>
</html>