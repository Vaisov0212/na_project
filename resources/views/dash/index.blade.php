<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <!-- Links Of CSS File -->
        <link href="{{ asset('/admin/assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/admin/assets/css/simplebar.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/admin/assets/css/prism.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/admin/assets/css/quill.snow.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/admin/assets/css/remixicon.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/admin/assets/css/swiper-bundle.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/admin/assets/css/jsvectormap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/admin/assets/css/style.css') }}" rel="stylesheet"/>
        <!-- Favicon -->
        <link href="{{ asset('/admin/assets/images/favicon.png') }}" rel="icon" type="image/png"/>
        <!-- Title -->
        <title>@yield('title', config('app.name', 'Laravel'))</title>
    </head>
    <body class="bg-body-bg">
        <!-- Start Preloader Area -->
        <div class="preloader" id="preloader">
            <div class="preloader">
                <div class="waviy position-relative">
                    <span class="d-inline-block">S</span>
                    <span class="d-inline-block">T</span>
                    <span class="d-inline-block">K</span>
                    <span class="d-inline-block">H</span>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Sidebar Area -->
        <div class="sidebar-area" id="sidebar-area">
            <div class="logo position-relative d-flex align-items-center justify-content-between">
                <a class="d-block text-decoration-none position-relative" href="{{ route('admin713.') }}">
                    <img alt="logo-icon" src="{{ asset('/admin/assets/images/logo-icon.png') }}"/>
                    <span class="logo-text text-secondary fw-semibold">StarCode</span>
                </a>
                <button class="sidebar-burger-menu-close bg-transparent py-3 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y" id="sidebar-burger-menu-close">
                    <span class="border-1 d-block for-dark-burger" style="border-bottom: 1px solid #475569; height: 1px; width: 25px; transform: rotate(45deg);"></span>
                    <span class="border-1 d-block for-dark-burger" style="border-bottom: 1px solid #475569; height: 1px; width: 25px; transform: rotate(-45deg);"></span>
                </button>
                <button class="sidebar-burger-menu bg-transparent p-0 border-0" id="sidebar-burger-menu">
                    <span class="border-1 d-block for-dark-burger" style="border-bottom: 1px solid #475569; height: 1px; width: 25px;"></span>
                    <span class="border-1 d-block for-dark-burger" style="border-bottom: 1px solid #475569; height: 1px; width: 25px; margin: 6px 0;"></span>
                    <span class="border-1 d-block for-dark-burger" style="border-bottom: 1px solid #475569; height: 1px; width: 25px;"></span>
                </button>
            </div>
            <aside class="layout-menu menu-vertical menu active" data-simplebar="" id="layout-menu">
                <ul class="menu-inner">
                    <li class="menu-title small text-uppercase">
                        <span class="menu-title-text">MAIN</span>
                    </li>
                    <li class="menu-item open">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">dashboard</span>
                            <span class="title">Dashboard</span>
                            <span class="count">11</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="{{ route('admin713.') }}">E-Commerce</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">CRM</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Project Management</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">LMS</a></li>
                            <li class="menu-item">
                                <a class="menu-link" href="#">Help Desk <span class="new tag">Hot</span></a>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="#">HR Management</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">School</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Marketing</a></li>
                            <li class="menu-item"><a class="menu-link active" href="#">Analytics</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Hospital</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Finance</a></li>
                        </ul>
                    </li>
                    <li class="menu-title small text-uppercase">
                        <span class="menu-title-text">APPS</span>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="material-symbols-outlined menu-icon">ballot</span>
                            <span class="title">To Do List</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="material-symbols-outlined menu-icon">calendar_today</span>
                            <span class="title">Calendar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="material-symbols-outlined menu-icon">perm_contact_calendar</span>
                            <span class="title">Contacts</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="material-symbols-outlined menu-icon">chat</span>
                            <span class="title">Chat</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">email</span>
                            <span class="title">Email</span>
                            <span class="count new bg-success-40 text-success-50">3</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Inbox</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Compose</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Read</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="material-symbols-outlined menu-icon">keyboard_command_key</span>
                            <span class="title">Kanban Board</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">insert_drive_file</span>
                            <span class="title">File Manager</span>
                            <span class="count new bg-danger-40 text-danger-50">7</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">My Drive</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Assets</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Projects</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Personal</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Applications</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Documents</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Media</a></li>
                        </ul>
                    </li>
                    <li class="menu-title small text-uppercase">
                        <span class="menu-title-text">PAGES</span>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">shopping_cart</span>
                            <span class="title">E-Commerce</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Products Grid</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Products List</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Product Details</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Create Product</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Edit Product</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Cart</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Checkout</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Orders</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Order Details</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Create Order</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Order Tracking</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Customers</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Customer Details</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Categories</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Create Category</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Edit Category</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Sellers</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Seller Details</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Create Seller</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Reviews</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Refunds</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">handshake</span>
                            <span class="title">CRM</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Contacts</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Create Contact</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Customers</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Leads</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Create Lead</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Deals</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">description</span>
                            <span class="title">Project Management</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Project Overview</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Projects List</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Create Project</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Clients</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Teams</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Kanban Board</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Users</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Create User</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">auto_stories</span>
                            <span class="title">LMS</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Courses List</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Course Details</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Create Course</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Edit Course</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Instructors</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">support</span>
                            <span class="title">Help Desk</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Tickets</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Ticket Details</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Agents</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Reports</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">clinical_notes</span>
                            <span class="title">HR Management</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Employee List</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Add New Employee</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Employee Leave</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Add Leave</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Attendance</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Departments</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Add Departments</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Holidays</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Employee Salary</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Create Payslip</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">school</span>
                            <span class="title">School</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Student List</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Add Student</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Teacher List</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Add Teacher</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Staff List</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Add Staff</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">All Courses</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Add Course</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Fees Collection</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Add Fees</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Attendance</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Library</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Add Library Book</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">home_health</span>
                            <span class="title">Hospital</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Patients</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Patient Details</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Doctors</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Doctor Details</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">All Schedule</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Book Appointments</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">local_activity</span>
                            <span class="title">Events</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Events</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Event Details</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Create An Event</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Edit An Event</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">share</span>
                            <span class="title">Social</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Profile</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Settings</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">content_paste</span>
                            <span class="title">Invoices</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Invoices</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Invoice Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">person</span>
                            <span class="title">Users</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Team Members</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Users List</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Add User</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">account_box</span>
                            <span class="title">Profile</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">User Profile</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Teams</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Projects</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="material-symbols-outlined menu-icon">star_border</span>
                            <span class="title">Starter</span>
                        </a>
                    </li>
                    <li class="menu-title small text-uppercase">
                        <span class="menu-title-text">MODULES</span>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">emoji_emotions</span>
                            <span class="title">Icons</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Material Symbols</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">RemixIcon</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">qr_code_scanner</span>
                            <span class="title">UI Elements</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Alerts</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Avatar</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Buttons</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Cards</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Carousels</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Dropdowns</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Grids</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Images</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">List</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Modals</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Navs</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Pagination's</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Progress</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Spinners</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Tabs</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Accordions</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Date Time Picker</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Videos</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">table_chart</span>
                            <span class="title">Tables</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Basic Table</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">forum</span>
                            <span class="title">Forms</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Basic Elements</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Advanced Elements</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Validation</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Wizard</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Editors</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">File Uploader</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">pie_chart</span>
                            <span class="title">ApexCharts</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Line</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Area</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Column</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Mixed</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">RadialBar</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Radar</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Pie</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Polar</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">More</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">lock_open</span>
                            <span class="title">Authentication</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="{{ route('login') }}">Sign In</a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ route('register') }}">Sign Up</a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ route('password.request') }}">Forgot Password</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Reset Password</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Confirm Email</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Lock Screen</a></li>
                            <li class="menu-item">
                                {{-- Logout — POST usuli bilan --}}
                                <form method="POST" action="{{ route('logout') }}" id="sidebar-logout-form">
                                    @csrf
                                </form>
                                <a class="menu-link" href="#"
                                   onclick="event.preventDefault(); document.getElementById('sidebar-logout-form').submit();">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">content_copy</span>
                            <span class="title">Extra Pages</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Pricing</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Timeline</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">FAQ</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Gallery</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Testimonials</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Search</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Coming Soon</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Blank Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">error</span>
                            <span class="title">Errors</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">404 Error Page</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Internal Error</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="material-symbols-outlined menu-icon">widgets</span>
                            <span class="title">Widgets</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="material-symbols-outlined menu-icon">map</span>
                            <span class="title">Maps</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="material-symbols-outlined menu-icon">notifications</span>
                            <span class="title">Notifications</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="material-symbols-outlined menu-icon">people</span>
                            <span class="title">Members</span>
                        </a>
                    </li>
                    <li class="menu-title small text-uppercase">
                        <span class="menu-title-text">OTHERS</span>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="material-symbols-outlined menu-icon">account_circle</span>
                            <span class="title">My Profile</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">settings</span>
                            <span class="title">Settings</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a class="menu-link" href="#">Account Settings</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Change Password</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Connections</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Privacy Policy</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Terms &amp; Conditions</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link menu-toggle active" href="javascript:void(0);">
                            <span class="material-symbols-outlined menu-icon">keyboard_arrow_down</span>
                            <span class="title">Multi Level Menu</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item after-sub-menu menu-level">
                                <a class="menu-link menu-toggle" href="javascript:void(0);">
                                    <span class="title">Level One</span>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item"><a class="menu-link" href="#">Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        {{-- Sidebar pastki Logout tugmasi --}}
                        <form method="POST" action="{{ route('logout') }}" id="sidebar-bottom-logout-form">
                            @csrf
                        </form>
                        <a class="menu-link" href="#"
                           onclick="event.preventDefault(); document.getElementById('sidebar-bottom-logout-form').submit();">
                            <span class="material-symbols-outlined menu-icon">logout</span>
                            <span class="title">Logout</span>
                        </a>
                    </li>
                </ul>
            </aside>
        </div>
        <!-- End Sidebar Area -->

        <!-- Start Main Content Area -->
        <div class="container-fluid">
            <div class="main-content d-flex flex-column">
                <!-- Start Header Area -->
                <header class="header-area bg-white mb-4 rounded-10 border border-white" id="header-area">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="left-header-content">
                                <ul class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-md-start">
                                    <li class="d-xl-none">
                                        <button class="header-burger-menu bg-transparent p-0 border-0 position-relative top-3" id="header-burger-menu">
                                            <span class="border-1 d-block for-dark-burger" style="border-bottom: 1px solid #475569; height: 1px; width: 25px;"></span>
                                            <span class="border-1 d-block for-dark-burger" style="border-bottom: 1px solid #475569; height: 1px; width: 25px; margin: 6px 0;"></span>
                                            <span class="border-1 d-block for-dark-burger" style="border-bottom: 1px solid #475569; height: 1px; width: 25px;"></span>
                                        </button>
                                    </li>
                                    <li>
                                        <form class="src-form position-relative">
                                            <input class="form-control" placeholder="Search here..." type="text"/>
                                            <div class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
                                                <span class="material-symbols-outlined">search</span>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-header-content mt-3 mt-md-0">
                                <ul class="d-flex align-items-center justify-content-center justify-content-md-end ps-0 mb-0 list-unstyled">
                                    <li class="header-right-item language-item">
                                        <div class="dropdown notifications language">
                                            <button aria-expanded="false" class="btn btn-secondary dropdown-toggle border-0 p-0 position-relative" data-bs-toggle="dropdown" type="button">
                                                <span class="material-symbols-outlined" style="font-size: 19px;">translate</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-lg p-0 border-0 dropdown-menu-end">
                                                <span class="fw-medium fs-16 text-secondary d-block title" style="padding-top: 20px; padding-bottom: 20px;">Choose Language</span>
                                                <div class="max-h-275" data-simplebar="">
                                                    <div class="notification-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img alt="usa" class="wh-30 rounded-circle" src="{{ asset('admin/assets/images/usa.png') }}"/>
                                                                </div>
                                                                <div class="flex-grow-1 ms-10">
                                                                    <span class="text-secondary fw-medium fs-15">English</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="notification-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img alt="australia" class="wh-30 rounded-circle" src="{{ asset('admin/assets/images/australia.png') }}"/>
                                                                </div>
                                                                <div class="flex-grow-1 ms-10">
                                                                    <span class="text-secondary fw-medium fs-15">Australia</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="notification-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img alt="spain" class="wh-30 rounded-circle" src="{{ asset('admin/assets/images/spain.png') }}"/>
                                                                </div>
                                                                <div class="flex-grow-1 ms-10">
                                                                    <span class="text-secondary fw-medium fs-15">Spanish</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="notification-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img alt="france" class="wh-30 rounded-circle" src="{{ asset('admin/assets/images/france.png') }}"/>
                                                                </div>
                                                                <div class="flex-grow-1 ms-10">
                                                                    <span class="text-secondary fw-medium fs-15">France</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="notification-menu mb-0">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img alt="germany" class="wh-30 rounded-circle" src="{{ asset('admin/assets/images/germany.png') }}"/>
                                                                </div>
                                                                <div class="flex-grow-1 ms-10">
                                                                    <span class="text-secondary fw-medium fs-15">Spain</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header-right-item light-dark-item">
                                        <div class="light-dark">
                                            <button class="switch-toggle dark-btn p-0 bg-transparent lh-0 border-0" id="switch-toggle">
                                                <span class="dark"><i class="material-symbols-outlined">dark_mode</i></span>
                                                <span class="light"><i class="material-symbols-outlined">light_mode</i></span>
                                            </button>
                                        </div>
                                    </li>
                                    <li class="header-right-item calendar-item">
                                        <div class="dropdown notifications">
                                            <a class="btn btn-secondary border-0 p-0 position-relative" href="#">
                                                <span class="material-symbols-outlined" style="font-size: 19px;">calendar_today</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="header-right-item messages-item">
                                        <div class="dropdown notifications noti messages">
                                            <button aria-expanded="false" class="btn btn-secondary border-0 p-0 position-relative" data-bs-toggle="dropdown" type="button">
                                                <span class="material-symbols-outlined">mail</span>
                                                <span class="count bg-primary">5</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-lg p-0 border-0 p-0 dropdown-menu-end">
                                                <div class="d-flex justify-content-between align-items-center title">
                                                    <span class="fw-medium fs-16 text-secondary">Messages <span class="fw-normal text-body fs-16">(03)</span></span>
                                                    <button class="p-0 m-0 bg-transparent border-0 fs-15 text-primary fw-medium">Mark all as read</button>
                                                </div>
                                                <div data-simplebar="" style="max-height: 300px;">
                                                    <div class="notification-menu unseen">
                                                        <a class="dropdown-item" href="#">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img alt="user1" class="rounded-circle" src="{{ asset('admin/assets/images/user1.jpg') }}" style="width: 44px; height: 44px;"/>
                                                                </div>
                                                                <div class="flex-grow-1 ms-10">
                                                                    <p class="fs-16 fw-medium text-secondary mb-2">Jacob Liwiski <span class="fs-14 fw-normal text-body ms-2">35 min ago</span></p>
                                                                    <span class="fs-14-5 fw-medium d-inline-block" style="line-height: 1.4;">Hey Victor! Could you please...</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="notification-menu unseen">
                                                        <a class="dropdown-item" href="#">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img alt="user2" class="rounded-circle" src="{{ asset('admin/assets/images/user2.jpg') }}" style="width: 44px; height: 44px;"/>
                                                                </div>
                                                                <div class="flex-grow-1 ms-10">
                                                                    <p class="fs-16 fw-medium text-secondary mb-2">Angela Carter <span class="fs-14 fw-normal text-body ms-2">1 day ago</span></p>
                                                                    <span class="fs-14-5 fw-medium d-inline-block" style="line-height: 1.4;">How are you Angela? Would you please...</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="notification-menu">
                                                        <a class="dropdown-item" href="#">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img alt="user3" class="rounded-circle" src="{{ asset('admin/assets/images/user3.jpg') }}" style="width: 44px; height: 44px;"/>
                                                                </div>
                                                                <div class="flex-grow-1 ms-10">
                                                                    <p class="fs-16 fw-medium text-secondary mb-2">Brad Traversy <span class="fs-14 fw-normal text-body ms-2">2 days ago</span></p>
                                                                    <span class="fs-14-5 fw-medium d-inline-block" style="line-height: 1.4;">Hey Brad Traversy! Could you please...</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item text-center text-primary d-block view-all fw-medium rounded-bottom-3" href="#">
                                                    <span>See All Messages</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header-right-item">
                                        <div class="dropdown notifications noti">
                                            <button aria-expanded="false" class="btn btn-secondary border-0 p-0 position-relative" data-bs-toggle="dropdown" type="button">
                                                <span class="material-symbols-outlined">notifications</span>
                                                <span class="count">3</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-lg p-0 border-0 p-0 dropdown-menu-end">
                                                <div class="d-flex justify-content-between align-items-center title">
                                                    <span class="fw-medium fs-16 text-secondary">Notifications <span class="fw-normal text-body fs-16">(03)</span></span>
                                                    <button class="p-0 m-0 bg-transparent border-0 fs-15 text-primary fw-medium">Clear All</button>
                                                </div>
                                                <div data-simplebar="" style="max-height: 300px;">
                                                    <div class="notification-menu unseen">
                                                        <a class="dropdown-item" href="#">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0"><i class="material-symbols-outlined text-primary">sms</i></div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <p class="fs-16 fw-medium text-secondary">You have requested to withdrawal</p>
                                                                    <span class="fs-14 fw-medium">2 hrs ago</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="notification-menu unseen">
                                                        <a class="dropdown-item" href="#">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0"><i class="material-symbols-outlined text-info">person</i></div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <p class="fs-16 fw-medium text-secondary">A new user added in StarCode</p>
                                                                    <span class="fs-14 fw-medium">3 hrs ago</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="notification-menu">
                                                        <a class="dropdown-item" href="#">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0"><i class="material-symbols-outlined text-success">mark_email_unread</i></div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <p class="fs-16 fw-medium text-secondary">You have requested to withdrawal</p>
                                                                    <span class="fs-14 fw-medium">1 day ago</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item text-center text-primary d-block view-all fw-medium rounded-bottom-3" href="#">
                                                    <span>See All Notifications</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header-right-item">
                                        <div class="dropdown admin-profile">
                                            <div class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor dropdown-toggle" data-bs-toggle="dropdown">
                                                <div class="flex-shrink-0 position-relative">
                                                    <img alt="admin" class="rounded-circle admin-img-width-for-mobile" src="{{ asset('admin/assets/images/admin.png') }}" style="width: 40px; height: 40px;"/>
                                                    <span class="d-block bg-success-60 border border-2 border-white rounded-circle position-absolute end-0 bottom-0" style="width: 11px; height: 11px;"></span>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu border-0 bg-white dropdown-menu-end">
                                                <div class="d-flex align-items-center info">
                                                    <div class="flex-shrink-0">
                                                        <img alt="admin" class="rounded-circle" src="{{ asset('admin/assets/images/admin.png') }}" style="width: 40px; height: 40px;"/>
                                                    </div>
                                                    <div class="flex-grow-1 ms-10">
                                                        <h3 class="fw-medium fs-17 mb-0">{{ auth()->user()->name ?? 'Admin' }}</h3>
                                                        <span class="fs-15 fw-medium">Admin</span>
                                                    </div>
                                                </div>
                                                <ul class="admin-link mb-0 list-unstyled">
                                                    <li>
                                                        <a class="dropdown-item admin-item-link d-flex align-items-center text-body" href="#">
                                                            <i class="material-symbols-outlined">person</i>
                                                            <span class="ms-2">My Profile</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item admin-item-link d-flex align-items-center text-body" href="#">
                                                            <i class="material-symbols-outlined">settings</i>
                                                            <span class="ms-2">Settings</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item admin-item-link d-flex align-items-center text-body" href="#">
                                                            <i class="material-symbols-outlined">info</i>
                                                            <span class="ms-2">Support</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        {{-- Dropdown Logout — POST usuli bilan --}}
                                                        <form method="POST" action="{{ route('logout') }}" id="header-logout-form">
                                                            @csrf
                                                        </form>
                                                        <a class="dropdown-item admin-item-link d-flex align-items-center text-body" href="#"
                                                           onclick="event.preventDefault(); document.getElementById('header-logout-form').submit();">
                                                            <i class="material-symbols-outlined">logout</i>
                                                            <span class="ms-2">Logout</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- End Header Area -->

                {{-- ===== PAGE CONTENT ===== --}}
                <div class="main-content-container overflow-hidden">
                    @yield('content')
                </div>
                {{-- ===== END PAGE CONTENT ===== --}}

                <div class="flex-grow-1"></div>

                <!-- Start Footer Area -->
                <footer class="footer-area bg-white text-center rounded-10 rounded-bottom-0">
                    <p class="fs-16 text-body">
                        &copy; <span class="text-secondary">{{ config('app.name', 'StarCode') }}</span>
                    </p>
                </footer>
                <!-- End Footer Area -->
            </div>
        </div>
        <!-- End Main Content Area -->

        <!-- Start Theme Setting Area -->
        <button aria-controls="offcanvasScrolling" class="btn btn-primary theme-settings-btn p-0 position-fixed z-2 text-center rounded-circle" data-bs-target="#offcanvasScrolling" data-bs-toggle="offcanvas" style="bottom: 24px; right: 24px; width: 56px; height: 56px; line-height: 54px;" type="button">
            <i class="text-white ri-settings-3-fill fs-28" data-bs-placement="left" data-bs-title="Click On Theme Settings" data-bs-toggle="tooltip"></i>
        </button>
        <div aria-labelledby="offcanvasScrollingLabel" class="offcanvas offcanvas-end bg-white border-0" data-bs-backdrop="true" data-bs-scroll="true" id="offcanvasScrolling" style="box-shadow: 0 4px 20px #2f8fe812 !important; max-width: 300px;" tabindex="-1">
            <div class="offcanvas-header bg-light p-20">
                <h5 class="offcanvas-title fs-18 fw-medium" id="offcanvasScrollingLabel">Configuration Panel</h5>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="offcanvas" type="button"></button>
            </div>
            <div class="offcanvas-body p-0 overflow-hidden">
                <div class="last-child-none" data-simplebar="" style="max-height: 858px;">
                    <div class="p-20 border-bottom child">
                        <h4 class="fs-15 fw-medium mb-12">RTL Mode</h4>
                        <div class="rtl-btn">
                            <label id="switch">
                                <input class="toggle-switch rtl-switch" id="slider" onchange="toggleTheme()" type="checkbox"/>
                            </label>
                        </div>
                    </div>
                    <div class="p-20 border-bottom child">
                        <h4 class="fs-15 fw-medium mb-12">Only Sidebar Dark</h4>
                        <div class="sidebar-light-dark" id="sidebar-light-dark">
                            <input class="toggle-switch sidebar-dark-switch" type="checkbox"/>
                        </div>
                    </div>
                    <div class="p-20 border-bottom child">
                        <h4 class="fs-15 fw-medium mb-12">Only Header Dark</h4>
                        <div class="header-light-dark" id="header-light-dark">
                            <input class="toggle-switch header-dark-switch" type="checkbox"/>
                        </div>
                    </div>
                    <div class="p-20 border-bottom child">
                        <h4 class="fs-15 fw-medium mb-12">Right Sidebar</h4>
                        <div class="right-sidebar" id="right-sidebar">
                            <input class="toggle-switch right-sidebar-switch" type="checkbox"/>
                        </div>
                    </div>
                    <div class="p-20 border-bottom child">
                        <h4 class="fs-15 fw-medium mb-12">Hide Sidebar</h4>
                        <div class="icon-sidebar" id="icon-sidebar">
                            <input class="toggle-switch icon-sidebar-switch" type="checkbox"/>
                        </div>
                    </div>
                    <div class="p-20 border-bottom child">
                        <h4 class="fs-15 fw-medium mb-12">Bordered Card</h4>
                        <div class="card-border" id="card-border">
                            <input class="toggle-switch border-switch" type="checkbox"/>
                        </div>
                    </div>
                    <div class="p-20 border-bottom child">
                        <h4 class="fs-15 fw-medium mb-12">Card Border Radius</h4>
                        <div class="card-radius-square" id="card-radius-square">
                            <input class="toggle-switch border-radius-switch" type="checkbox"/>
                        </div>
                    </div>
                    <div class="p-20 border-bottom child">
                        <a class="btn btn-primary text-white" href="#">Buy StarCode</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Theme Setting Area -->

        <!-- Link Of JS File -->
        <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/sidebar-menu.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/quill.min.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/data-table.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/prism.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/clipboard.min.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/apexcharts.min.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/echarts.min.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/fullcalendar.main.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/jsvectormap.min.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/world-merc.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/custom/apexcharts.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/custom/echarts.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/custom/maps.js') }}"></script>
        <script src="{{ asset('/admin/assets/js/custom/custom.js') }}"></script>

        @stack('scripts')
    </body>
</html>
