<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    <title>پنل کاربری رادیکال بی</title>
    
    <!-- Custom CSS -->
    <link href="<?php echo RB_PLUGIN_ASSETS_STYLE . 'styles.css' ?>" rel="stylesheet">


</head>

<body class="red-skin rtl">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<!--<div id="preloader"><div class="preloader"><span></span><span></span></div></div>-->


<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    
    
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    
    
    <!-- ============================ Dashboard: Dashboard Start ================================== -->
    <section class="gray pt-5">
        <div class="container-fluid">
            
            <div class="row">
                
                <div class="col-lg-3 col-md-3">
                    <div class="dashboard-navbar">
                        <?php $current_user = wp_get_current_user();
                       /* var_dump($current_user);*/
                        ?>
                        <div class="d-user-avater">
                            <?php echo get_avatar($current_user->user_email,120) ?>
                            <h4><?php echo $current_user->display_name ?></h4>
                            <h6>تاریخ عضویت : <?php echo $current_user->user_registered?></h6>
                          
                        </div>
                        
                        <div class="d-navigation">
                            <ul id="side-menu">
                                <li><a href="dashboard.html"><i class="ti-user"></i>داشبورد</a></li>
                                <li><a href="my-profile.html"><i class="ti-heart"></i>اکانت من</a></li>
                                <li><a href="my-order.html"><i class="ti-shopping-cart"></i>سفارشات من</a></li>
                                <li class="active"><a href="settings.html"><i class="ti-settings"></i>تنظیمات</a></li>
                                <li><a href="reviews.html"><i class="ti-comment-alt"></i>پشتیبانی</a></li>
                                <li><a href="#"><i class="ti-power-off"></i>خروج</a></li>
                            </ul>
                        </div>
                    
                    </div>
                
                
                </div>
                
                <div class="col-lg-9 col-md-9 col-sm-12">
                    
                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">تنظیمات</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- /Row -->
                    
                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                
                           <!--  layouts-->
                            <?php include RB_PLUGIN_DIR_VIEWS . $view; ?>
                     
                        </div>
                    </div>
                    <!-- /Row -->
                
                </div>
            
            </div>
            <!-- Row -->
        
        </div>
    </section>
    <!-- ============================ Dashboard: My Order Start End ================================== -->
    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
</body>
<script src="<?php echo WEP_PLUGIN_ASSETS_JS.'bootstrap.min.js' ?>"></script>
</html>

