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
      <link rel="icon" href="<?= site_url('assets/pluto/')?>images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto/')?>css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto/')?>style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto/')?>css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto/')?>css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto/')?>css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto/')?>css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto/')?>css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto/')?>js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
         <div class="container" style="height: 500px; margin-top: 2rem;">
            <div class="center verticle_center full_height">
                <div class="card">
                     <div class="center">
                        <img  src="<?=site_url('assets/pluto/')?>images/layout_img/bg-log.jpg" class="w-100" style="height: 200px;"  alt="" />
                     </div>
                  <div class="login_form">
                     <form action="<?= site_url('Auth/login')?>" method="POST">
                        <fieldset>
                        <div id="hilang">
	                            <?= $this->session->flashdata('alert');	 ?>
                            </div> 
                           <div class="field">
                              <label class="label_field">Username</label>
                              <input type="text" class="bg-white" name="username" placeholder="enter your username" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" class="bg-white" name="password" placeholder="Password" />
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt bg-primary">Sign In</button>
                           </div>
                          
                        </fieldset>
                     </form>
                     </div>
               </div>
               </div>
            </div>
</div>
      <!-- jQuery -->
      <script src="<?= site_url('assets/pluto/')?>js/jquery.min.js"></script>
      <script src="<?= site_url('assets/pluto/')?>js/popper.min.js"></script>
      <script src="<?= site_url('assets/pluto/')?>js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="<?= site_url('assets/pluto/')?>js/animate.js"></script>
      <!-- select country -->
      <script src="<?= site_url('assets/pluto/')?>js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="<?= site_url('assets/pluto/')?>js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?= site_url('assets/pluto/')?>js/custom.js"></script>
   </body>
</html>