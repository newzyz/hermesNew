<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<?php include "../function.php" ?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url("/assets/img/apple-icon.png")?>">
    <link rel="icon" type="image/png" href="<?php echo base_url("/assets/img/favicon.ico")?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?php echo base_url("/assets/css/bootstrap.min.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("/assets/css/light-bootstrap-dashboard.css?v=2.0.0")?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url("/assets/css/demo.css")?>" rel="stylesheet" />

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="<?php echo base_url("/assets/img/sidebar-5.jpg") ?>">
            <!--
         Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
 
         Tip 2: you can also add an image using data-image tag
     -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.html">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./user.html">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./table.html">
                            <i class="nc-icon nc-notes"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./typography.html">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./icons.html">
                            <i class="nc-icon nc-atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./maps.html">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="upgrade.html">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand" href="#pablo"> Dashboard </a> -->
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <!-- <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul> -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->




            <div class="content">
                <!-- Row Contact -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="card-title" id="result">Modify or Cancel this booking</h4>
                                </div>
                                <div class="col-md-4 text-right">
                                    <button type="button" id="btn_add" class="btn btn-primary btn-round" data-toggle="modal" data-target="#add_room"><i class="nc-icon nc-simple-add"></i> Add</button>
                                    <button type="button" id="btn_close" class="btn btn-info btn-round"><i class="nc-icon nc-simple-remove"></i> Close</button>
                                </div>
                            </div>
                        </div>
                        <!-- form -->
                        <form id="form_edit_contact" action="" method="POST">
                            <div class="card-body">
                                <!-- row contact -->
                                <hr>
                                <div class="row">
                                    <div class="col-md-5">
                                        <h4><i class="nc-icon nc-backpack"></i> Contact/Agency</h4>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="text-md-right">
                                            <h4><a href="" id="save_update" data-toggle="modal" data-target="#confirm_update">S</a> <a href="" id="cancel_reservation_update" data-toggle="modal" data-target="#cancel_reservation">C</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <!--end row contact -->
                                <!-- row form edit data -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Check In </label>
                                            <input class="form-control" type="date" id="display_check_in" name="display_check_in" value="" placeholder="Check in">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Check Out (<strong id="night_head"></strong>
                                                nights)</label>
                                            <input class="form-control" type="date" id="display_check_out" name="display_check_out" value="" placeholder="Check out">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Agency</label>
                                            <select class="form-control" name="agency_reservation" id="agency_reservation">
                                                <option value="defult">select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>First name</label>
                                            <!-- style="display:none;" -->
                                            <input style="display:none;" type="text" name="display_id" id="display_id" class="form-control" placeholder="id">
                                            <input style="display:none;" type="text" name="display_id_guest_contact" id="display_id_guest_contact" class="form-control" placeholder="id">
                                            <input type="text" name="display_firstname" id="display_firstname" class="form-control hide" placeholder="first name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input style="display:none;" type="text" name="display_idlast" id="display_idlast" class="form-control" placeholder="id">
                                            <input type="text" name="display_lastname" id="display_lastname" class="form-control" placeholder="last name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="display_email" id="display_email" class="form-control" placeholder="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="tel" name="display_telephone" id="display_telephone" class="form-control" placeholder="number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Notes</label>
                                            <textarea name="display_note" id="display_note" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END form -->
                    </div>
                </div>
                <!-- End Row Contact -->
                <!-- Row GUEST -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="card">
                            <!-- form GUEST -->
                            <form id="form_edit_guest" action="" method="POST">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h4><strong id="head_room_name">unknow</strong> - <strong id="head_guest_firstname">unknow</strong> <strong id="head_guest_lastname">unknow</strong> </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="text-md-right">
                                                <h4><a id="save_update_guest" href="" data-toggle="modal" data-target="#confirm_update_guest">S</a> <a href="" data-toggle="modal" data-target="#cancel_guest_comment" id="cancel_guest">C</a> <a href="" id="a_move_room" data-toggle="modal" data-target="#move_room">M</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Room :</label>
                                                    <select class="form-control" id="display_guest_room" name="display_guest_room">
                                                        <option value="defult">Room</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <label>Room : <strong id="display_room"></strong></label><br> -->
                                            <label>Type : <strong id="display_roomtype"></strong></label><br>
                                            <label>Building : <strong id="display_roombuilding"></strong></label><br>
                                            <label>Views : <strong id="display_roomviews"></strong></label><br>
                                            <span id="display_room_price" value=""></span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md">
                                                    <div class="form-group">
                                                        <label>First name</label>
                                                        <!-- store id guest -->
                                                        <input style="display:none;" type="text" name="display_guest_id" id="display_guest_id" class="form-control" placeholder="id">
                                                        <!-- End Store -->
                                                        <input type="text" name="display_guest_firstname" id="display_guest_firstname" class="form-control" placeholder="first name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md">
                                                    <div class="form-group">
                                                        <label>Last name</label>
                                                        <input type="text" name="display_guest_lastname" id="display_guest_lastname" class="form-control" placeholder="first name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="tel" name="display_guest_telephone" id="display_guest_telephone" class="form-control" placeholder="number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" name="display_guest_email" id="display_guest_email" class="form-control" placeholder="first name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END form -->
                        </div>
                    </div>
                </div>
                <!-- End Row Guest -->
            </div>


            <!--                    Modal                   -->

            <div class="modal fade" id="confirm_update" tabindex="-1" role="dialog" aria-labelledby="confirm_updateTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="confirm_updateTitle">UPDATE DATABASE</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>Are you sure you want to <strong>Save</strong> this <strong>CONTACT</strong> into the
                                database?</label>
                        </div>
                        <div class="modal-footer">
                            <button id="btn_no" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button id="btn_yes" type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal alert update -->
            <div class="modal fade" id="confirm_update_guest" tabindex="-1" role="dialog" aria-labelledby="confirm_update_guestTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="confirm_update_guestTitle">UPDATE DATABASE</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to <strong>Save</strong> this <strong>GUEST</strong> into the
                            database?
                        </div>
                        <div class="modal-footer">
                            <button id="btn_no_guest" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button id="btn_yes_guest" type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal alert update -->
            <!-- modal alert -->
            <div id="modal_alert" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content alert alert-success">
                        Update Success.
                    </div>
                </div>
            </div>
            <!-- end modal alert -->


            <!-- modal add room -->

            <!-- Modal -->
            <div class="modal fade" id="add_room" tabindex="-1" role="dialog" aria-labelledby="add_roomLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 45rem;">
                        <div class="modal-header">
                            <div class="col-md-5">
                                <h4 class="modal-title" id="add_roomLabel">
                                    ADD RESERVATION
                                </h4>
                            </div>
                            <div class="col-md-7">
                                <div class="text-md-right">
                                    <h4>
                                        <a href="" id="save_add_room">S</a>
                                        <a href="" id="cancel_add_room" data-dismiss="modal">X</a>
                                    </h4>
                                </div>
                            </div>
                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> -->
                        </div>
                        <div class="modal-body" style="width: 45rem;">
                            <!-- start code -->
                            <form id="save_form" method="POST">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <input type="text" name="id_bl_save" id="id_bl_save" style="display:none;">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Add Room </label>
                                                <select class="form-control" name="select" id="select">
                                                    <option value="defult">Room</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="">First Name : </label>
                                                <br />
                                                <input type="text" class="form-control" placeholder="First Name" id="fname1" readonly />
                                                <br />
                                            </div>
                                            <div class="form-group">
                                                <label for="">Last Name : </label>
                                                <br />
                                                <input type="text" class="form-control" placeholder="Last Name" id="lname1" readonly />
                                                <br />
                                            </div>
                                            <div class="form-group">
                                                <label for="">Phone : </label>
                                                <br />
                                                <input type="text" class="form-control" placeholder="Phone" id="tel1" readonly />
                                                <br />
                                            </div>
                                            <div class="form-group">
                                                <label for="">E-mail : </label>
                                                <br />
                                                <input type="text" class="form-control" placeholder="Phone" id="email1" readonly />
                                                <br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- end code -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal room -->


            <!--      start  modal group 2    -->
            <div class="modal fade" id="cancel_reservation" tabindex="-1" role="dialog" aria-labelledby="cancel_reservationTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="cancel_reservationTitle">Cancel Reservation</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label for="exampleInputEmail1">Please explain,why you need to
                                cancel this reservation (more than 10 characters)?</label>
                            <input id="comment" name="comment" value="" type="text" class="form-control" placeholder="Please specify" min="10" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="save_comment">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="cancel_guest_comment" tabindex="-1" role="dialog" aria-labelledby="cancel_guest_commentTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="cancel_guest_commentTitle">Cancel
                                Guest</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>Please explain,why you need to
                                cancel this reservation (more than 10 character)?</label>
                            <input id="comment_guest" name="comment_guest" value="" type="text" class="form-control" placeholder="Please specify" min="10" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="save_guest">Save</button>
                            <!-- <button onclik="myFunction()" type="button" class="btn btn-primary">Save</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--      END modal g2           -->


            <!--      start modal group 5  -->
            <!-- Move Room -->
            <div class="modal fade" id="move_room" tabindex="-1" role="dialog" aria-labelledby="move_roomLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width:45rem;">
                        <div class="modal-header">
                            <div class="col-md-5">
                                <h2 class="modal-title" id="move_roomLabel">Move Room</h2>
                            </div>
                            <div class="col-md-7">
                                <div class="text-md-right">
                                    <h4><a href="" id="cancel_move_room" data-dismiss="modal">X</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body" style="width:45rem;">
                            <div class="card">
                                <div class="card-body">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <form action="post">
                                                    <div class="form-group">
                                                        <label>Select Room :</label>
                                                        <select id="select2" class="form-control">
                                                            <option value="">Select Room</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <span id="room_id"></span>
                                            <div class="col-md-4">
                                                <label for="name"><strong>Room :</strong>(<span id="Room"> </span>)
                                                    (<span id="Roomnew">
                                                    </span>)</label><br />
                                                <label for="type"><strong>Type :</strong> (<span id="Type"> </span>)
                                                    (<span id="Typenew">
                                                    </span>)</label><br />
                                                <label for="building"><strong>Building :</strong> (<span id="Building">
                                                    </span>) (<span id="Buildingnew"> </span>)</label><br />
                                                <label for="views"><strong>Views :</strong> (<span id="View"> </span>)
                                                    (<span id="Viewnew"> </span>)</label><br />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="price"><strong>Price :</strong> (<span id="Price"> </span>)
                                                    (<span id="Pricenew"> </span>)</label><br />
                                                <label for="night"><strong>Night :</strong> (<span id="Night"> </span>)
                                                    (<span id="Nightnew"> </span>)</label><br />
                                                <label for="totalprice"><strong>Total Price :</strong> (<span id="Total_Price"> </span>)
                                                    (<span id="Total_Pricenew"> </span>)</label><br />
                                            </div>
                                        </div>
                                        <button id="btnConfirm" type="submit" data-dismiss="modal" class="btn btn-primary pull-right">Comfirm</button>
                                        <button id="btnReturn" type="submit" data-dismiss="modal" class="btn btn-info pull-left">Cancel</button>
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--      END modal group 5 -->

            <!--                    end moal                        -->


            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url("/assets/js/core/jquery.3.2.1.min.js") ?>" type="text/javascript"></script>
<script src="<?php echo base_url("/assets/js/core/popper.min.js") ?>" type="text/javascript"></script>
<script src="<?php echo base_url("/assets/js/core/bootstrap.min.js") ?>" type="text/javascript"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?php echo base_url("/assets/js/light-bootstrap-dashboard.js?v=2.0.0") ?>" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url("/assets/js/demo.js") ?>"></script>
</script>
<script src="<?php echo base_url("/application/load_hermes.js")?>"></script>
<script src="<?php echo base_url("/application/update_reversation.js")?>"></script>

</html>