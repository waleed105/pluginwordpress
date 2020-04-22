<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Batoota | Your travel buddy !</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    /> -->
    <link rel="stylesheet"type="text/css"href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />

   <?php wp_head(); ?> 

    <!-- header -->
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg custom--nav--top">
          <a class="navbar-brand" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" class="easy-logo" alt="" />
          </a>
          <div class="dropdown res-drop-show">
            <div id="res--show">
              <div id="img--toggle">
                <span> &nbsp;</span>
              </div>
            </div>
            <div
              class="dropdown-menu custom--drop-res"
              aria-labelledby="dropupMenuButton"
            >
              <ul class="navbar-nav custom--nav">
                <li class="nav-item mr-4 active text--nav">
                  <a class="nav-link nav--text nav-text--active" href="/">Home </a>
                </li>
                <li class="nav-item mr-4 text--nav">
                  <a class="nav-link nav--text nav--bottom" href="/">About</a>
                </li>
                <li class="nav-item mr-4 text--nav">
                  <a class="nav-link nav--text nav--bottom" href="/">Contact</a>
                </li>
                <li class="nav-item mr-4 text--nav">
                  <a class="nav-link nav--text nav--bottom" href="/">Blog</a>
                </li>
                <li class="nav-item mr-4 text--nav">
                  <a class="nav-link nav--text nav--bottom" href="/">Careers</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="collapse navbar-collapse nav-center">
            <ul class="navbar-nav custom--nav">
              <li class="nav-item mr-4 active text--nav">
                <a class="nav-link nav--text nav-text--active" href="/">Home </a>
              </li>
              <li class="nav-item mr-4 text--nav">
                <a class="nav-link nav--text nav--bottom" href="/">About</a>
              </li>
              <li class="nav-item mr-4 text--nav">
                <a class="nav-link nav--text nav--bottom" href="/">Contact</a>
              </li>
              <li class="nav-item mr-4 text--nav">
                <a class="nav-link nav--text nav--bottom" href="/">Blog</a>
              </li>
              <li class="nav-item mr-4 text--nav">
                <a class="nav-link nav--text nav--bottom" href="/">Careers</a>
              </li>
            </ul>
            <div class="form-inline nav-item custom--side">
              <a href="#" class="request--button">Request Invite</a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- header end -->
  
  </head>
  <body>
