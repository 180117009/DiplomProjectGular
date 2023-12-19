<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (isset($_POST['login'])) {
  $user = $_POST['user'];
  $password = md5($_POST['password']);
  $sql = "SELECT ID FROM tblstudent WHERE User=:user and Password=:password";
  $query = $dbh->prepare($sql);
  $query->bindParam(':user', $user, PDO::PARAM_STR);
  $query->bindParam(':password', $password, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  if ($query->rowCount() > 0) {
    foreach ($results as $result) {
      $_SESSION['obcsuid'] = $result->ID;
    }
    $_SESSION['login'] = $_POST['login'];
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  } else {
    echo "<script>alert('Неверные данные');</script>";
  }
}
?>

<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Online Course Platform</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/dark-style.css" rel="stylesheet" />
    <link href="assets/css/transparent-style.css" rel="stylesheet">
    <link href="assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <div class="col col-login mx-auto">
                    <div class="text-center">
                        <a href="index.html"><img src="assets/images/brand/" class="header-brand-img" alt=""></a>
                    </div>
                </div>
                <!-- CONTAINER OPEN -->
                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form"  method="post">
                            <div class="text-center mb-4">
                                <img src="assets/images/users/21.jpg" alt="lockscreen image" class="avatar avatar-xxl brround mb-2">
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
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold"><?php echo htmlentities($row->Name); ?>&nbsp<?php echo htmlentities($row->LastName); ?></h5>
                            </div>
                            <input class="input100 border-start-0 ms-0 form-control" type="hidden" name='user' placeholder="login" value="<?php echo htmlentities($row->User); ?>">
                            <div class="wrap-input100 validate-input input-group" id="Password-toggle" data-bs-validate="Password is required">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 ms-0 form-control" type="password" name='password' placeholder="Password">
                            </div>
                            <div class="container-login100-form-btn pt-0">
                                    <button type="submit" class="login100-form-btn btn-primary" name="login">Unlock</button>
                            </div>
                            <div class="text-center pt-2">
                                <span class="txt1">
										I Forgot
									</span>
                                <a class="" href="forgot-password.php">
										Give me Hint
									</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End GLOABAL LOADER -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="assets/js/show-password.min.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>