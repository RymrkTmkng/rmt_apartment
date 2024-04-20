<?php
$logged_in = false;
if($this->session->has_userdata('user_id')){
  $role = $this->session->userdata('role_id');
  $logged_in = true;
}
?>
<nav class="navbar navbar-expand-lg p-0 navigation mb-3">
  <div class="container-fluid px-3">
    <div class="collapse navbar-collapse px-5" id="navbarNavDropdown">
      <ul class="navbar-nav w-100 d-flex <?= ($logged_in) ? 'justify-content-between' : ' justify-content-around ' ?> align-items-center ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= ($logged_in) ? base_url('dashboard') : base_url('home')  ?>"><?= (isset($role) ? 'RMT Apartment' : 'Home') ?></a>
        </li>
        <?php if (!$logged_in) : ?>
          <li class="nav-item">
            <a href="" class="nav-link">Explore</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">Services</a>
          </li>
          <li class="nav-item logomango" id="logomango">
            <img src="<?= base_url() . "assets/images/logo/rmt-logo-nobg.png" ?>" width="70" height="70" alt="Mango Logo" class="spin-on-hover">
            <!-- <a class="navbar-brand" href="#" style="font-weight:bold;">RMT Apartment</a> -->
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FAQs</a>
          </li>
        <?php else : ?>
          <li class="nav-item compname">
            <h1 class="nav-link text-warning" style="font-size:3rem !important"><?=$page_title?></h1>
          </li>
        <?php endif; ?>

        <li class="nav-item dropdown logreg">
          <?php if ($logged_in) : ?>
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle"> </i><?= $this->session->userdata('username') ?>
            </a>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li>
                <hr class="dropdown-divider bg-light">
              </li>
              <li><a class="dropdown-item" href="<?= base_url('logout') ?>" class="login-logout">Logout</a></li>
            </ul>
          <?php else : ?>
            <a href="<?= base_url('login') ?>" class="login-logout">Login</a>
          <?php endif; ?>

        </li>
      </ul>
    </div>
  </div>
</nav>