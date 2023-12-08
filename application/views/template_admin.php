<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="<?= site_url('assets/pluto')?>/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto')?>/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto')?>/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto')?>/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto')?>/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto')?>/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto')?>/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto')?>/css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="<?= base_url(); ?>"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="<?= site_url('assets/pluto')?>/images/layout_img/bachiiii.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>Dynapvtry</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                  <?php $menu = $this->uri->segment(2); ?>
                     <li class="<?php if($menu=='home'){ echo "active"; } ?>">  
                        <a href="<?= base_url('admin/home') ?>"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     </li>
                     <li class="<?php if($menu=='caraousel'){ echo "active"; } ?>">
                        <a href="<?= base_url('admin/caraousel') ?>"><i class="fa fa-asterisk orange_color"></i> <span>Caraousel</span></a>
                    </li>
                     <li class="<?php if($menu=='kategori'){ echo "active"; } ?>">
                        <a href="<?= base_url('admin/kategori') ?>"><i class="fa fa-calendar purple_color"></i> <span>Kategori</span></a>
                     </li>
                     <li class="<?php if($menu=='konten'){ echo "active"; } ?>">
                        <a href="<?= base_url('admin/konten') ?>"><i class="fa fa-photo purple_color2"></i> <span>Konten</span></a>
                    </li>
                     <li class="<?php if($menu=='user'){ echo "active"; } ?>">
                        <?php if($this->session->userdata('level')=='Admin'){ ?>
                        <a href="<?= base_url('admin/user') ?>"><i class="fa fa-user blue2_color"></i> <span>User</span></a>
                     </li>
                     <li class="<?php if($menu=='konfigurasi'){ echo "active"; } ?>">
                        <a href="<?= base_url('admin/konfigurasi') ?>"><i class="fa fa-briefcase blue1_color"></i> <span>Konfigurasi</span></a>
                    </li>
                    <?php } ?>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>                       
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul class="user_profile_dd">
                              <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><span class="col-lg-12"><?= $this->session->userdata('nama') ?></span></a>                       
                                    <div class="dropdown-menu">
                                    <small><i class="online_animation"></i><?= $this->session->userdata('level') ?></p></small>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="<?= site_url('auth/logout') ?>"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h1 class="text-dark"><b><?= $judul_halaman ?></b></h1>
                           </div>
                        </div>
                     </div>

                     <div class="row column2 graph margin_bottom_30">
                        <div class="col-md12 col-lg-12">
                           <div class="heading1 margin_0">
                              <?= $contents; ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- footer -->
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="<?= site_url('assets/pluto')?>/js/jquery.min.js"></script>
      <script src="<?= site_url('assets/pluto')?>/js/popper.min.js"></script>
      <script src="<?= site_url('assets/pluto')?>/js/bootstrap.min.js"></script>
      
      <!-- wow animation -->
      <script src="<?= site_url('assets/pluto')?>/js/animate.js"></script>
      <!-- select country -->
      <script src="<?= site_url('assets/pluto')?>/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="<?= site_url('assets/pluto')?>/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="<?= site_url('assets/pluto')?>/js/Chart.min.js"></script>
      <script src="<?= site_url('assets/pluto')?>/js/Chart.bundle.min.js"></script>
      <script src="<?= site_url('assets/pluto')?>/js/utils.js"></script>
      <script src="<?= site_url('assets/pluto')?>/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="<?= site_url('assets/pluto')?>/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?= site_url('assets/pluto')?>/js/custom.js"></script>
      <script src="<?= site_url('assets/pluto')?>/js/chart_custom_style1.js"></script>

      <script>
         $('#hilang').delay('slow').slidedown('slow').delay(4000).slideUp(600);     
      </script>
   </body>
</html>