<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?= $title ?></title>
  <link rel="stylesheet" type="text/css" href="public/css/bulma.css">
  <link rel="stylesheet" type="text/css" href="public/css/index.css">
  <link rel="stylesheet" type="text/css" href="public/css/fontawesome/css/all.min.css">
<!--
  ____ _             _           _                  
 / ___| | __ ___   _(_)_ __     | |_   _ _ __   ___ 
| |   | |/ _` \ \ / / | '_ \ _  | | | | | '_ \ / _ \
| |___| | (_| |\ V /| | | | | |_| | |_| | | | |  __/
 \____|_|\__,_| \_/ |_|_| |_|\___/ \__,_|_| |_|\___|CV17-1

  ______     ____        __   _       _                
 / ___\ \   / /\ \      / /__| |__   / \   _ __  _ __  
| |    \ \ / /  \ \ /\ / / _ \ '_ \ / _ \ | '_ \| '_ \ 
| |___  \ V /    \ V  V /  __/ |_) / ___ \| |_) | |_) |
 \____|  \_/      \_/\_/ \___|_.__/_/   \_\ .__/| .__/ 
                                          |_|   |_| v1.2019
-->
</head>
<body class="has-navbar-fixed-top">
  <div class="navbar is-dark is-fixed-top level">
    <div class="level-left">
      <div class="level-item">
        <div class="navbar-brand">
          <a href="/" class="navbar-item">
            <i class="fa fa-home"></i>
          </a>
          <a href="/about" class="navbar-item">
            About
            &nbsp;
            <i class="fa fa-address-card"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="level-right">
      <div class="level-item">
        <div class="navbar-brand">
          <?php if ( !isset($_SESSION['user']) ): ?>
            <a href="/login" class="navbar-item">
              Login
              &nbsp;
              <i class="fa fa-sign-in-alt"></i></a>
          <?php else: ?>
            <a class="navbar-item">
              <?= $_SESSION['user']->username ?>
              &nbsp;
              <i class="fa fa-user"></i>
            </a>
            <a href="/logout" class="navbar-item">
              Logout
              &nbsp;
              <i class="fa fa-sign-out-alt"></i>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>