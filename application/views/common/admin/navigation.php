<!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="<?php echo SITEURL; ?>" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?php echo get_second_site_logo();?>" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?php echo get_second_site_logo();?>" alt="" height="20">
                        </span>
                    </a>

                    <a href="<?php echo SITEURL; ?>" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="<?php echo get_second_site_logo();?>" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?php echo get_second_site_logo();?>" alt="" height="20">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Dashboard</li>

                            <li>
                                <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ADMIN) echo 'class="active-menu"';?> href="<?php echo SITEURL;?>">
                                    <i class="bx bx-layer"></i>
                                    <span><?php echo get_languageword('dashboard');?></span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-basket"></i>
                                    <span>Orders</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ecommerce-products.html">Products</a></li>
                                </ul>
                            </li>

                            <li>
                                <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ADMIN) echo 'class="active-menu"';?> href="<?php echo SITEURL;?>">
                                    <i class="bx bxs-printer"></i>
                                    <span><?php echo get_languageword('report');?></span>
                                </a>
                            </li>

                            <li class="menu-title">Accounting</li>

                             <li>
                                <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ADMIN) echo 'class="active-menu"';?> href="<?php echo SITEURL;?>">
                                    <i class="bx bxs-bank"></i>
                                    <span>Cash & Bank</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-bookmarks"></i>
                                    <span>Sales</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html">Sales Orders</a></li>
                                    <li><a href="email-inbox.html">Sales Delivery</a></li>
                                    <li><a href="email-inbox.html">Sales Qoute</a></li>
                                    <li><a href="email-inbox.html">Sales Invoices</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-cart"></i>
                                    <span>Purchases</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="invoices-list.html">Purchases Orders</a></li>
                                    <li><a href="email-inbox.html">Purchases Delivery</a></li>
                                    <li><a href="email-inbox.html">Purchases Qoute</a></li>
                                    <li><a href="invoices-list.html">Purchases Invoices</a></li>
                                </ul>
                            </li>

                            <li>
                                <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ADMIN) echo 'class="active-menu"';?> href="<?php echo SITEURL;?>">
                                    <i class="bx bxs-bank"></i>
                                    <span><?php echo get_languageword('expenses');?></span>
                                </a>
                            </li>

                            <li class="menu-title">Inventory</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-user"></i>
                                    <span>Contacts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html">Customer</a></li>
                                    <li><a href="auth-login.html">Supplier</a></li>
                                    <li><a href="auth-login.html">Employee</a></li>
                                    <li><a href="auth-login.html">Vendor</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-package"></i>
                                    <span>Products</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-archive"></i>
                                    <span>Assets Managements</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#">Starter Page</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-file"></i>
                                    <span>Chart of Accounts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#">Starter Page</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Employees</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-clipboard"></i>
                                    <span>Tax Managements</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-user-rectangle"></i>
                                    <span>Payroll</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Website Settings</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-customize"></i>
                                    <span>Master Settings</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-brush"></i>
                                    <span>Page Settings</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->