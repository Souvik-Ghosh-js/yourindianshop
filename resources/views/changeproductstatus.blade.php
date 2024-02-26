<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Your Indian Shop Warehouse</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="/assets/css/animate.css">

<link rel="stylesheet" href="/assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="/assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

    <div class="header">
        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
        <span></span>
        <span></span>
        <span></span>
        </span>
        </a>

        <ul class="nav user-menu">

        <li class="nav-item dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
        <img src="/assets/img/icons/notification-bing.svg" alt="img"> <span class="badge rounded-pill">4</span>
        </a>
        <div class="dropdown-menu notifications">
        <div class="topnav-dropdown-header">
        <span class="notification-title">Notifications</span>
        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
        </div>
        <div class="noti-content">
        <ul class="notification-list">
        <li class="notification-message">
        <a href="">
        <div class="media d-flex">
        <span class="avatar flex-shrink-0">
        <img alt="" src="/assets/img/profiles/avatar-02.jpg">
        </span>
        <div class="media-body flex-grow-1">
        <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
        </div>
        </div>
        </a>
        </li>
        <li class="notification-message">
        <a href="">
        <div class="media d-flex">
        <span class="avatar flex-shrink-0">
        <img alt="" src="/assets/img/profiles/avatar-03.jpg">
        </span>
        <div class="media-body flex-grow-1">
        <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
        <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
        </div>
        </div>
        </a>
        </li>
        <li class="notification-message">
        <a href="">
        <div class="media d-flex">
        <span class="avatar flex-shrink-0">
        <img alt="" src="/assets/img/profiles/avatar-06.jpg">
        </span>
        <div class="media-body flex-grow-1">
        <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
        <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
        </div>
        </div>
        </a>
        </li>
        <li class="notification-message">
        <a href="">
        <div class="media d-flex">
        <span class="avatar flex-shrink-0">
        <img alt="" src="/assets/img/profiles/avatar-17.jpg">
        </span>
        <div class="media-body flex-grow-1">
        <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
        <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
        </div>
        </div>
        </a>
        </li>
        <li class="notification-message">
        <a href="">
        <div class="media d-flex">
        <span class="avatar flex-shrink-0">
        <img alt="" src="/assets/img/profiles/avatar-13.jpg">
        </span>
        <div class="media-body flex-grow-1">
        <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
        <p class="noti-time"><span class="notification-time">2 days ago</span></p>
        </div>
        </div>
        </a>
        </li>
        </ul>
        </div>
        </div>
        </li>
        </ul>
        </div>
        <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
        <ul>
        <li class="active">
        <a href="/index.html"><img src="/assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
        </li>
        </ul>
        </div>
        </div>
        </div>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Edit Details</h4>
</div>
</div>

<div class="card">
                <div class="card-body">
                    <form action="/api/change-status/{{$product->product_id}}" method="post">
                        @csrf
                        @method('put')

                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" value="{{ $product->name }}" placeholder="Enter product name" name="name">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" value="{{ $product->description }}" placeholder="Enter description" name="description">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Remark</label>
                                    <input type="text" value="" placeholder="Enter remark" name="remark">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="select" name="status">

                                        <option value="Received" {{ $product->status === 'received' ? 'selected' : '' }}>Received</option>
                                        <option value="Shipped" {{ $product->status === 'Shipped' ? 'selected' : '' }}>Shipped</option>
                                        <option value="Delivered" {{ $product->status === 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-submit me-2">Update</button>
                                <a href="/" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

</div>
</div>
</div>


<script src="/assets/js/jquery-3.6.0.min.js"></script>

<script src="/assets/js/feather.min.js"></script>

<script src="/assets/js/jquery.slimscroll.min.js"></script>

<script src="/assets/js/jquery.dataTables.min.js"></script>
<script src="/assets/js/dataTables.bootstrap4.min.js"></script>

<script src="/assets/js/bootstrap.bundle.min.js"></script>

<script src="/assets/plugins/select2/js/select2.min.js"></script>

<script src="/assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="/assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="/assets/js/script.js"></script>
</body>
</html>
