<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $page_title ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php include 'includes.php';?>
</head>

<body>
    <?php
    __load_assets__($__assets__, 'css');
    ?>
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg p-0 navigation ">
            <div class="container-fluid p-0">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav min-vw-100 d-flex justify-content-around align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('home') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Explore</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item logomango" id="logomango">
                            <img src="<?= base_url() . "assets/images/logo/rmt-logo-nobg.png" ?>" width="100" height="100" alt="Mango Logo" class="spin-on-hover">
                            <!-- <a class="navbar-brand" href="#" style="font-weight:bold;">RMT Apartment</a> -->
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQs</a>
                        </li>
                        <li class="nav-item logreg">
                            <?php if ($this->session->has_userdata('user_id')) : ?>
                                <a href="<?= base_url('logout') ?>"  class="login-logout">Logout</a>
                            <?php else : ?>
                                <a href="<?= base_url('login') ?>" class="login-logout">Login</a>
                            <?php endif; ?>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>