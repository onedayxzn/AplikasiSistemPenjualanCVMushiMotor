<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <!-- offline -->
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- my css -->
    <link href="<?= BASEURL; ?>/css/style1.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/css/css.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <!-- font Aesome JS (online) -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header style="height: 70px;">
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
            <div class="left_area">
                <h3>MUSHI <span> MOTOR</span></h3>

            </div>


        </label>

    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
        <div class="nav_bar">
            <img src="<?= BASEURL; ?>/img/18.jpg" class="mobile_profile_image" alt="">
            <i class="fa fa-bars nav_btn"></i>
        </div>
        <div class="mobile_nav_items">
            <a href="#"><i class="fas fa-desktop"></i><span class="ml-1">Dashboard</span></a>
            <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="ml-1"> Profile</span></a>
            <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i><span class="ml-1">registrasi karyawan</span></a>
            <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span class="ml-1">Daftar Karyawan</span></a>
            <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span class="ml-1">Daftar kendaraan</span></a>
            <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span class="ml-1">About</span></a>
            <a href="#"><i class="bi bi-box-arrow-right"></i><span class="ml-1">Log out</span></a>

        </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
        <div class="profile_info">
            <p>Admin</p>
            <img src="<?= BASEURL; ?>/img/profile.jpg" class="profile_image" alt="">

            <p><?= $_SESSION['username']; ?></p>
        </div>
        <a href="<?= BASEURL; ?>admin"><i class="fas fa-desktop"></i><span class="ml-1">Dashboard</span></a>
        <hr>
        <a href="<?= BASEURL; ?>admin/profile"><i class="fa fa-user" aria-hidden="true"></i><span class="ml-1"> Profile</span></a>
        <a href="<?= BASEURL; ?>admin/daftarKaryawan"><i class="fa fa-users" aria-hidden="true"></i><span class="ml-1">Daftar karyawan</span></a>
        <a href="<?= BASEURL; ?>admin/daftarKendaraan"><i class="fa fa-users" aria-hidden="true"></i><span class="ml-1">Daftar kendaraan</span></a>
        <a href="<?= BASEURL; ?>admin/about"><i class="fa fa-question-circle" aria-hidden="true"></i><span class="ml-1">About</span></a>
        <a href="<?= BASEURL; ?>/login/logout" onclick="return confirm('Apakah anda yakin akan keluar dari sistem?')"><i class="bi bi-box-arrow-right"></i><span class="ml-1">Log out</span></a>
        <br><br><br>
        <div class="container my-auto">
            <small class="text-center my-auto text-white copyright text fs-6">Copyright © Sukma Ramadhan Asri <span style="margin-left: 5rem;">2021</span> </small>
        </div>
        <br>
    </div>
    <!--sidebar end-->






</head>


<body>