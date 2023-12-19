<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsuid'] == 0)) {
  header('location:login.php');
} else {
}
?>
<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Online Course Platform</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/dark-style.css" rel="stylesheet" />
    <link href="../assets/css/transparent-style.css" rel="stylesheet">
    <link href="../assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.html">
                            <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-lg-block">
                            <input type="text" class="form-control" id="typehead" placeholder="Search for results...">
                            <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex country">
                                            <a class="nav-link icon text-center" data-bs-target="#country-selector"
                                                data-bs-toggle="modal">
                                                <i class="fe fe-globe"></i><span
                                                    class="fs-16 ms-2 d-none d-xl-block">English</span>
                                            </a>
                                        </div>
                                        <!-- COUNTRY -->
                                        <div class="d-flex country">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- CART -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        <!-- FULL-SCREEN -->
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="../assets/images/users/21.jpg" alt="profile-user"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                <div class="text-center">
                                                        <?php
                                                        $uid = $_SESSION['obcsuid'];

                                                        $sql = "SELECT tblstudent.* from  tblstudent  where tblstudent.ID=:uid";
                                                        $query = $dbh->prepare($sql);
                                                        $query->bindParam(':uid', $uid, PDO::PARAM_STR);
                                                        $query->execute();
                                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                        if ($query->rowCount() > 0) {
                                                            foreach ($results as $row) {               ?> <?php }
                                                                                                    } ?>
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold"><?php echo htmlentities($row->Name); ?>&nbsp<?php echo htmlentities($row->LastName); ?></h5>
                                                        <small class="text-muted"><?php echo htmlentities($row->Email); ?></small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="profile.php">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                </a>
                                                <a class="dropdown-item" href="email-inbox.php">
                                                    <i class="dropdown-icon fe fe-mail"></i> Inbox
                                                    <span class="badge bg-danger rounded-pill float-end">5</span>
                                                </a>
                                                <a class="dropdown-item" href="lockscreen.php">
                                                    <i class="dropdown-icon fe fe-lock"></i> Lockscreen
                                                </a>
                                                <a class="dropdown-item" href="login.php">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.php">
                            <img src="assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="assets/images/brand/logo-1.png" class="header-brand-img toggle-logo"
                                alt="logo">
                            <img src="assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                            <img src="assets/images/brand/logo-6.jpeg" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.php"><i
                                        class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">Site home</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>User Interface Kit</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-slack"></i><span
                                        class="side-menu__label">Applications</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                                    <li><a href="course.php" class="slide-item">Course</a></li>
                                    <li><a href="table-task.php" class="slide-item">Tasks</a></li>
                                    <li><a href="table-test.php" class="slide-item">Test</a></li>
                                    <li><a href="lecture.php" class="slide-item">Lecture</a></li>
                                    <li><a href="schedules.php" class="slide-item">Full Calendar</a></li>
                                    
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>Different pages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-users"></i><span
                                        class="side-menu__label">Authentication</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Authentication</a></li>
                                    <li><a href="login.php" class="slide-item"> Login</a></li>
                                    <li><a href="register.php" class="slide-item"> Register</a></li>
                                    <li><a href="forgot-password.php" class="slide-item"> Forgot Password</a></li>
                                    <li><a href="lockscreen.php" class="slide-item"> Lock screen</a></li>      
                                </ul>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Full Calendar</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Full Calender</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Calender Events</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-5 col-xl-3">
                                                <div id="external-events">
                                                    <h4>Events</h4>
                                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary">
                                                        <div class="fc-event-main">Test</div>
                                                    </div>
                                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-secondary" data-class="bg-secondary">
                                                        <div class="fc-event-main">Task</div>
                                                    </div>
                                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-success" data-class=" bg-info">
                                                        <div class="fc-event-main">Lecture</div>
                                                    </div>
                                                </div>
                                                <div class="mt-5">
                                                    <h4 class="card-title mb-4">My Schedules</h4>
                                                    <div class="card border p-0 pt-3">
                                                        <div class="card-body pt-3">
                                                            <div class="dropdown">
                                                                <a class="nav-link float-end text-muted pe-0 pt-0" href="javascript:void(0)" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit me-1"></i> Shedule Date</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash-2 me-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <h5 class="card-title">
                                                            <?php
                                                                          $uid = $_SESSION['obcsuid'];
                                                                          $sql = "SELECT * from tbl_t_s where tbl_t_s.StudentID=:uid and Pass <=curdate() ";
                                                                          $query = $dbh->prepare($sql);
                                                                          $query->bindParam(':uid', $uid, PDO::PARAM_STR);
                                                                          $query->execute();
                                                                          $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                                          if ($query->rowCount() > 0) {
                                                                            foreach ($results as $row) {               ?>
                                                                            <?php echo htmlentities($row->TestID); ?>
                                                                            <?php  } } ?>
                                                                            
                                                            </h5>
                                                            <h6 class="card-subtitle mb-2 text-muted"> <?php echo htmlentities($row->Pass); ?></h6>
                                                            <a href="javascript:void(0)" class="btn btn-primary btn-sm me-3 mb-3">Test</a>
                                                            <a href="javascript:void(0)" class="btn btn-danger btn-sm mb-3">The test has not been done yet</a>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="media media-xs overflow-visible">
                                                                <img class="avatar brround avatar-md me-3" src="../assets/images/users/12.jpg" alt="avatar-img">
                                                                <div class="media-body valign-middle">
                                                                    <a href="profile.php" class=" fw-semibold text-dark">
                                                                     <?php
                                                        $uid = $_SESSION['obcsuid'];

                                                        $sql = "SELECT tblstudent.* from  tblstudent  where tblstudent.ID=:uid";
                                                        $query = $dbh->prepare($sql);
                                                        $query->bindParam(':uid', $uid, PDO::PARAM_STR);
                                                        $query->execute();
                                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                        $cnt = 1;
                                                        if ($query->rowCount() > 0) {
                                                            foreach ($results as $row) {               ?> <?php }
                                                                                                    } ?>
                                                                    <?php echo htmlentities($row->Name); ?>&nbsp<?php echo htmlentities($row->LastName); ?>
                                                                    </a><br>
                                                                    <a href="" class="text-muted mb-0"> Student</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card border p-0 pt-3">
                                                        <div class="card-body pt-3">
                                                            <div class="dropdown pe-0 pt-0">
                                                                <a class="nav-link float-end text-muted" href="javascript:void(0)" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit me-1"></i> Shedule Date</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash-2 me-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <h5 class="card-title">
                                                            <?php
                                                                          $uid = $_SESSION['obcsuid'];
                                                                          $sql = "SELECT * from tbltask where tbltask.StudentID=:uid and DataStart <=curdate() and DataEnd >=curdate() ";
                                                                          $query = $dbh->prepare($sql);
                                                                          $query->bindParam(':uid', $uid, PDO::PARAM_STR);
                                                                          $query->execute();
                                                                          $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                                          if ($query->rowCount() > 0) {
                                                                            foreach ($results as $row) {               ?>
                                                                            <?php echo htmlentities($row->NameTask); ?>
                                                                            <?php  } } ?>
                                                            </h5>
                                                            <h6 class="card-subtitle mb-2 text-muted"> <?php echo htmlentities($row->DataStart); ?>-<?php echo htmlentities($row->DataEnd); ?></h6>
                                                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm mb-3">Task</a>
                                                            <a href="javascript:void(0)" class="btn btn-danger btn-sm mb-3">The test has not been done yet</a>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="media media-xs overflow-visible">
                                                                <img class="avatar brround avatar-md me-3" src="../assets/images/users/16.jpg" alt="avatar-img">
                                                                <div class="media-body valign-middle">
                                                                    <a href="profile.php" class=" fw-semibold text-dark">
                                                                    <?php
                                                        $uid = $_SESSION['obcsuid'];

                                                        $sql = "SELECT tblstudent.* from  tblstudent  where tblstudent.ID=:uid";
                                                        $query = $dbh->prepare($sql);
                                                        $query->bindParam(':uid', $uid, PDO::PARAM_STR);
                                                        $query->execute();
                                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                        $cnt = 1;
                                                        if ($query->rowCount() > 0) {
                                                            foreach ($results as $row) {               ?> <?php }
                                                                                                    } ?>
                                                                    <?php echo htmlentities($row->Name); ?>&nbsp<?php echo htmlentities($row->LastName); ?>
                                                                    </a><br>
                                                                    <a href="" class="text-muted mb-0"> Student</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card border p-0 pt-3">
                                                        <div class="card-body pt-3">
                                                            <div class="dropdown pe-0 pt-0">
                                                                <a class="nav-link float-end text-muted" href="javascript:void(0)" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit me-1"></i> Shedule Date</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash-2 me-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <h5 class="card-title">
                                                            <?php
                                                                          $uid = $_SESSION['obcsuid'];
                                                                          $sql = "SELECT * from tbllecture where StudentID=:uid";
                                                                          $query = $dbh->prepare($sql);
                                                                          $query->bindParam(':uid', $uid, PDO::PARAM_STR);
                                                                          $query->execute();
                                                                          $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                                          if ($query->rowCount() > 0) {
                                                                            foreach ($results as $row) {               ?>
                                                                            <?php echo htmlentities($row->NameLecture); ?>
                                                                            <?php  } } ?>
                                                            </h5>
                                                            <h6 class="card-subtitle mb-2 text-muted"> 
                                                            <a href="http://gular.kz/teacher/lecture/<?php echo htmlentities($row->FilePDF); ?>" class="btn btn-success btn-sm mb-3" target="_blank">Open lecture</a>
                                                            </h6>
                                                            <a href="javascript:void(0)" class="btn btn-success btn-sm mb-3">Lecture</a>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="media media-xs overflow-visible">
                                                                <img class="avatar brround avatar-md me-3" src="../assets/images/users/16.jpg" alt="avatar-img">
                                                                <div class="media-body valign-middle">
                                                                    <a href="profile.php" class=" fw-semibold text-dark">
                                                                    <?php
                                                        $uid = $_SESSION['obcsuid'];

                                                        $sql = "SELECT tblstudent.* from  tblstudent  where tblstudent.ID=:uid";
                                                        $query = $dbh->prepare($sql);
                                                        $query->bindParam(':uid', $uid, PDO::PARAM_STR);
                                                        $query->execute();
                                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                        $cnt = 1;
                                                        if ($query->rowCount() > 0) {
                                                            foreach ($results as $row) {               ?> <?php }
                                                                                                    } ?>
                                                                    <?php echo htmlentities($row->Name); ?>&nbsp<?php echo htmlentities($row->LastName); ?>
                                                                    </a><br>
                                                                    <a href="" class="text-muted mb-0"> Student</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-xl-9">
                                                <div id='calendar2'></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!--app-content close-->

        </div>

        <!-- Sidebar-right -->
        

        <!-- Country-selector modal-->
        <div class="modal fade" id="country-selector">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content country-select-modal">
                    <div class="modal-header">
                        <h6 class="modal-title">Language</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <ul class="row p-3">
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block active">
                                    <span class="country-selector"><img alt="" src="../assets/images/flags/us_flag.jpg"
                                            class="me-3 language"></span>English(en)
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="../assets/images/flags/russia_flag.jpg"
                                        class="me-3 language"></span>Русский(ru)
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="../assets/images/flags/kz_flag.jpg"
                                        class="me-3 language"></span>Қазақша(kk)
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="../assets/images/flags/turkey.jpg"
                                        class="me-3 language"></span>Türkçe (tr)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Country-selector modal-->

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)">Online Course Platform</a>. Designed with <span
                            class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Gulzhainash </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="../assets/js/jquery.sparkline.min.js"></script>

    <!-- Sticky js -->
    <script src="../assets/js/sticky.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="../assets/js/circle-progress.min.js"></script>

    <!-- PIETY CHART JS-->
    <script src="../assets/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="../assets/plugins/peitychart/peitychart.init.js"></script>

    <!-- SIDEBAR JS -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll-1.js"></script>

     <!-- FULL CALENDAR JS -->
    <script src='../assets/plugins/fullcalendar/moment.min.js'></script>
    <script src='../assets/plugins/fullcalendar/fullcalendar.min.js'></script>
    <script src="../assets/js/fullcalendar.js"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="../assets/plugins/chart/Chart.bundle.js"></script>
    <script src="../assets/plugins/chart/rounded-barchart.js"></script>
    <script src="../assets/plugins/chart/utils.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>

    <!-- INTERNAL Data tables js-->
    <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="../assets/js/apexcharts.js"></script>
    <script src="../assets/plugins/apexchart/irregular-data-series.js"></script>

    <!-- INTERNAL Flot JS -->
    <script src="../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.fillbetween.js"></script>
    <script src="../assets/plugins/flot/chart.flot.sampledata.js"></script>
    <script src="../assets/plugins/flot/dashboard.sampledata.js"></script>

    <!-- INTERNAL Vector js -->
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

	<!-- TypeHead js -->
	<script src="../assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="../assets/js/typehead.js"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="../assets/js/index1.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>


</body>

</html>