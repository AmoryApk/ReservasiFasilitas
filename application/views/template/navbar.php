<?php defined('BASEPATH') or exit('No direct script access allowed !'); ?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= base_url() ?>index.php/Data/Index">Reservasi</a></li>
        <li><a href="<?= base_url() ?>index.php/Data/Student">Fasilitas</a></li>
        <li><a href="<?= base_url() ?>index.php/Data/User">User</a></li>
        <li><a href="<?= base_url() ?>index.php">Sign Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>