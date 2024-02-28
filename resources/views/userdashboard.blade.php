<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Your Indian Shop- USER</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
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
<a id="notificationButton" href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
    <img src="assets/img/icons/notification-bing.svg" alt="img">
    <span class="badge rounded-pill">4</span>
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
<img alt="" src="assets/img/profiles/avatar-02.jpg">
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
<img alt="" src="assets/img/profiles/avatar-03.jpg">
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
<img alt="" src="assets/img/profiles/avatar-06.jpg">
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
<img alt="" src="assets/img/profiles/avatar-17.jpg">
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
<img alt="" src="assets/img/profiles/avatar-13.jpg">
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

<li class="nav-item dropdown has-arrow main-drop">
    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
    <span class="user-img"><img src="assets/img/profiles/avatar-17.jpg" alt="">
    <span class="status online"></span></span>
    </a>
    <div class="dropdown-menu menu-drop-user">
    <div class="profilename">
    <div class="profileset">
    <span class="user-img"><img src="assets/img/profiles/avatar-17.jpg" alt="">
    <span class="status online"></span></span>
    <div class="profilesets">
    <h6>John Doe</h6>
    <h5>Admin</h5>
    </div>
    </div>
    <hr class="m-0">
    <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My Profile</a>
    <hr class="m-0">
    <a class="dropdown-item logout pb-0" href="signin.html"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
    </div>
    </div>
    </li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="signin.html">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="active">
<a href="index.html"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
</li>
<li><a href="">Assisted Purchase</a></li>
<li><a href="">Indian Shops</a></li>
<li><a href="">Prohibited Items</a></li>
<li><a href="">Shipping Calc</a></li>
<li>
<a href="purchasereport.html"><i data-feather="file"></i><span> Wallet</span> </a>
</li>
</ul>
</div>
</div>
</div>

<div class="page-wrapper">
<div class="content">
<div class="row">
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count">
            <div class="dash-counts">
            <h4>₹ 10000</h4>
            <h5>Wallet Balance</h5>
            </div>
            <div class="dash-imgs">
            <i data-feather="user"></i>
            </div>
            </div>
            </div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das2">
<div class="dash-counts">
<h4>100</h4>
<h5>Warehouse ID</h5>
</div>
<div class="dash-imgs">
<i data-feather="user"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das2">
<div class="dash-counts">
<h4>100</h4>
<h5>Delivered</h5>
</div>
<div class="dash-imgs">
<i data-feather="file-text"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das3">
<div class="dash-counts">
<h4>0 packages</h4>
<h5>Shipment</h5>
</div>
<div class="dash-imgs">
<i data-feather="file"></i>
</div>
</div>
</div>
</div>
<div class="card">
    <div class="card-body">
    <div class="requiredfield">
    </div>
    <div class="row">
    <div class="col-lg-3 col-sm-6 col-12">
    </div>
    <div class="col-lg-12">
    <div class="form-group">
    <h2> Your Warehouse</h2>
    </div>
    </div>
    <div class="col-lg-6 col-sm-12">
    <div class="productdetails productdetailnew">
    <ul class="product-bar">
    @foreach ($warehouses as $warehouse)
    <li>
                        <h4>Area</h4>
                        <h6 class="manitorygreen">{{ $warehouse->area }}</h6>
                    </li>
                    <li>
                        <h4>WarehouseId</h4>
                        <h6 class="manitorygreen">{{ $warehouse->id }}</h6>
                    </li>
                    <li>
                        <h4>Address</h4>
                        <h6 class="manitorygreen">{{ $warehouse->address }}</h6>
                    </li>
                    <li>
                        <h4>Street</h4>
                        <h6 class="manitorygreen">{{ $warehouse->street }}</h6>
                    </li>
                    <li>
                        <h4>Capacity</h4>
                        <h6 class="manitorygreen">{{ $warehouse->capacity }}</h6>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="productdetails productdetailnew">
                <ul class="product-bar">
                    <li>
                        <h4>Landmark</h4>
                        <h6 class="manitoryblue">{{ $warehouse->landmark }}</h6>
                    </li>
                    <li>
                        <h4>City</h4>
                        <h6 class="manitoryblue">{{ $warehouse->city }}</h6>
                    </li>
                    <li>
                        <h4>Pincode</h4>
                        <h6 class="manitoryblue">{{ $warehouse->pincode }}</h6>
                    </li>
                    <li>
                        <h4>State</h4>
                        <h6 class="manitoryblue">{{ $warehouse->state }}</h6>
                    </li>
                    <li>
                        <h4>Country</h4>
                        <h6 class="manitoryblue">{{ $warehouse->country }}</h6>
                    </li>@endforeach
    </ul>
    </div>
    </div>
    <div class="col-lg-12">
    <div class="form-group mb-0">
    <a href="" class="btn btn-submit me-2">Click Here to change warehouse</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="content">
        <div class="page-header">
        <div class="page-title">
        <h2>Product
            Acceptance
            Request</h2>
        </div>
        </div>
<form method="post" action="/api/PAR" enctype="multipart/form-data">
    @csrf
        <div class="card">
        <div class="card-body">
        <div class="row">
        <div class="col-lg-6 col-sm-8 col-12">
        <div class="form-group">
        <label>Product Title<span class="manitory">*</span></label>
        <input type="text" name="name" id="name" placeholder="Product Title">
        </div>
        </div>
        <div class="col-lg-6 col-sm-8 col-12">
        <div class="form-group">
        <label>Product Description<span class="manitory">*</span></label>
        <input type="text" name="description" id="description" placeholder="Product Description">
        </div>
        </div>
        <div class="col-lg-12">
        <div class="form-group">
        <label> Product Image<span class="manitory">*</span></label>
        <div class="image-upload">
        <input type="file" name="image" id="image">
        <div class="image-uploads">
        <img src="assets/img/icons/upload.svg" alt="img">
        <h4>Drag and drop a file to upload</h4>
        </div>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
            <button type ="submit"  class="btn btn-submit me-2">Submit Request and pay ₹500</submit>
        </div>

        </div>
        </div>
        </div>
        </div>
        </form>
        </div>
<div class="card mb-0">
<div class="card-body">
<h4 class="card-title">Your Couriers in Kailash Nagar</h4>
<div class="table-responsive dataview">
<table class="table datatable ">
<thead>
<tr>
<th>Action</th>

<th>Product Id</th>
<th>Product Name</th>
<th>Description</th>

<th>Status</th>
<th>Address</th>

<th> Date</th>
</tr>
</thead>
<!-- Your existing table structure -->
<tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                @if ($product->status === 'Received')
                                <a class="badges bg-lightgreen" style="color:#fff; text-decoration: none;" onclick="showConfirmation1('Dispatch')">Request Dispatch</a>

<a class="badges bg-lightred" style="color:#fff; text-decoration: none;" onclick="showConfirmation2('Return')">Request Return</a>
                                @else
                                    <span>Your Product is {{$product->status}}</span>
                                @endif
                            </td>
                            <td><a href="javascript:void(0);">{{ $product->product_id }}</a></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td><span class="">{{ $product->status }}</span></td>
                            <td>{{ $product->address }}</td>

                            <td>{{ $product->created_at->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>

</table>
</div>
</div>
</div>
</div>
</div>
</div>
<style>
    .confirmation-popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 20px;
        z-index: 9999;
    }

    .confirmation-popup h2 {
        margin-top: 0;
    }

    .confirmation-popup button {
        margin-top: 10px;
        padding: 5px 10px;
        cursor: pointer;
    }

    .confirmation-popup button:first-child {
        margin-right: 10px;
    }
</style>
<style>
    .badges {
        display: inline-block;
        padding: 5px 10px;
        margin: 5px;
        border-radius: 5px;
        cursor: pointer;
    }
    .bg-lightgreen {
        background-color: lightgreen;
    }
    .bg-lightred {
        background-color: lightcoral;
    }
    .confirmation-popup .yes{
        background-color: green;
        color:white;
        border: transparent;
    }
    .confirmation-popup .no{
        background-color: red;
        color:white;
        border: transparent;
    }
</style>

<div class="confirmation-popup" id="confirmationPopup">
    <h2>Confirm Action</h2>
    <p>Enter Your Address
        <span id="confirmationAction1">
        @foreach ($products as $product)

            <form method="post" action="api/add/address">
                <div class="row">
                    <div class="col-lg-6 col-sm-8 col-12">
                    <input type="hidden" name="productId" value="{{ $product->product_id }}">

                        <div class="form-group">
                            <label>Country<span class="mandatory">*</span></label>
                            <input type="text" name="country" id="country" placeholder="Country">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-8 col-12">
                        <div class="form-group">
                            <label>City<span class="mandatory">*</span></label>
                            <input type="text" name="city" id="city" placeholder="City">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-8 col-12">
                        <div class="form-group">
                            <label>Postal Code<span class="mandatory">*</span></label>
                            <input type="text" name="postalCode" id="postalCode" placeholder="Postal Code">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-8 col-12">
                        <div class="form-group">
                            <label>Landmark<span class="mandatory">*</span></label>
                            <input type="text" name="landmark" id="landmark" placeholder="Landmark">
                        </div>
                    </div>
                </div>
                <button class="yes" onclick="confirmAction(true, 'Dispatch')">Confirm</button>
                <button class="no" onclick="confirmAction(false)">No</button>
            </form>
            @endforeach

        </span>
    </p>
</div>

<div class="confirmation-popup" id="confirmationPopup2">
    <h2>Confirm Action</h2>
    <p>Enter Your Address
        <span id="confirmationAction2">
            <p>Please cancel from your ordered Application/website</p>
            <button class="yes" onclick="confirmAction(true, 'Cancel')">Confirm</button>
            <button class="no" onclick="confirmAction(false)">No</button>
        </span>
    </p>
</div>

<script>
     $(document).ready(function () {
        // Function to handle the click event on the notification button
        $('#notificationButton').click(function () {
            // Fetch notifications from the API
            $.ajax({
                url: '/api/getNotifications',
                method: 'GET',
                data: {
                    user_id: 1,  // Replace with the actual user ID
                    warehouse_id: 1,  // Replace with the actual warehouse ID
                    self: 1,
                    read: 0
                },
                success: function (response) {
                    // Update the notification dropdown with the received data
                    updateNotificationDropdown(response.notifications);
                },
                error: function (error) {
                    console.error('Error fetching notifications:', error);
                }
            });
        });

        // Function to update the notification dropdown with the received data
        function updateNotificationDropdown(notifications) {
            // Clear existing notifications
            $('.notification-list').empty();

            // Add new notifications
            notifications.forEach(function (notification) {
                var listItem = '<li class="notification-message">' +
                    '<a href="#">' +
                    '<div class="media d-flex">' +
                    '<span class="avatar flex-shrink-0">' +
                    '<img alt="" src="' + notification.avatar + '">' +
                    '</span>' +
                    '<div class="media-body flex-grow-1">' +
                    '<p class="noti-details"><span class="noti-title">' + notification.title + '</span> ' +
                    notification.message +
                    '</p>' +
                    '<p class="noti-time"><span class="notification-time">' + notification.time + '</span></p>' +
                    '</div>' +
                    '</div>' +
                    '</a>' +
                    '</li>';

                $('.notification-list').append(listItem);
            });
        }
    });
    function showConfirmation1(action) {
        document.getElementById('confirmationAction1').textContent = action;
        document.getElementById('confirmationPopup').style.display = 'block';
    }

    function showConfirmation2(action) {
        document.getElementById('confirmationAction2').textContent = action;
        document.getElementById('confirmationPopup2').style.display = 'block';
    }

    function confirmAction(confirmation, action) {
        if (confirmation) {
            // Here you can call the appropriate function based on the action
            if (action === 'Dispatch') {
                // Dispatch function
                showNotification('Request Dispatch successful', 'green');
            } else if (action === 'Return') {
                // Return function
                showNotification('Request Return successful', 'red');
            }
        }
        document.getElementById('confirmationPopup').style.display = 'none';
        document.getElementById('confirmationPopup2').style.display = 'none';
    }

    function showNotification(message, color) {
        const notification = document.createElement('div');
        notification.textContent = message;
        notification.style.backgroundColor = color;
        notification.style.color = '#fff';
        notification.style.padding = '10px';
        notification.style.position = 'fixed';
        notification.style.top = '10px';
        notification.style.right = '10px';
        notification.style.borderRadius = '5px';
        notification.style.zIndex = '9999';
        document.body.appendChild(notification);

    }
</script>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
