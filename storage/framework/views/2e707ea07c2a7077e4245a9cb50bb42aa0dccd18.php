<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="<?php echo url('public/admin/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo url('public/admin/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo url('public/admin/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo url('public/admin/vendors/iCheck/skins/flat/green.css'); ?>" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo url('public/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'); ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo url('public/admin/vendors/jqvmap/dist/jqvmap.min.css'); ?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo url('public/admin/vendors/bootstrap-daterangepicker/daterangepicker.css'); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo url('public/admin/build/css/custom.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo url('public/admin/jquery-ui/jquery-ui.css'); ?>" rel="stylesheet">
    <script src="<?php echo url('public/admin/js/ckeditor/ckeditor.js'); ?>"></script>
     
    <script src="<?php echo url('public/admin/tinymce/tinymce.min.js'); ?>"></script>

    <script src="<?php echo url('admin/tinymce/plugins/advlist/plugin.min.js'); ?>"></script>

  
    <script>
      var baseURL ="<?php echo url('/'); ?>";

    </script>
     <script src="<?php echo url('public/admin/js/func_ckfinder.js'); ?>"></script>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i>
              <span>
                 <?php if(Auth::check()): ?>
                      <?php echo Auth::user()->Full_name; ?>

                 <?php endif; ?>
              </span></a>
            </div>
            <div class="clearfix"></div>
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo action('ThanhVienController@test'); ?>"><i class="fa fa-home"></i> Home </a></li>
                   <li><a><i class="fa fa-user" aria-hidden="true"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">List User</a></li>
                      <li><a href="#">Add User</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book" aria-hidden="true"></i> Category <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo e(action('CategoryController@index')); ?>">List Category</a></li>
                      <li><a href="<?php echo e(action('CategoryController@create')); ?>">Add Category</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-shirtsinbulk" aria-hidden="true"></i> Product <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">List Product</a></li>
                      <li><a href="#">Add Product</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-paint-brush" aria-hidden="true"></i> Color <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo e(action('ColorController@index')); ?>">List Color</a></li>
                      <li><a href="<?php echo e(action('ColorController@create')); ?>">Add Color</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-truck"></i> Size <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">List Delivers</a></li>
                      <li><a href="chartjs2.html">Add Delivers</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-truck"></i> Factories<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">List Factories</a></li>
                      <li><a href="chartjs2.html">Add Factories</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-envelope-o"></i> Subcribes<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">List subcries</a></li>
                      <li><a href="chartjs2.html">Add subcries</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-comments"></i> Comments <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">List Comments</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-star"></i> Ranks <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">List Ranks</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-thumbs-up"></i> Likes<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">List Likes</a></li>
                    </ul>
                  </li>
                  
                    <li><a><i class="fa fa-heart"></i> Wishlists <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">List  Wishlists</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-check-square-o" aria-hidden="true"></i> Order <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">List Order</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Order-detail <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">List Order</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-credit-card-alt"></i> Payment <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">List Payment</a></li>
                      <li><a href="fixed_footer.html">Add Payment</a></li>
                    </ul>
                  </li>
                  
                   <li><a><i class="fa fa-truck"></i> Delivers <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">List Delivers</a></li>
                      <li><a href="chartjs2.html">Add Delivers</a></li>
                    </ul>
                  </li>
                  
                   <li><a><i class="fa fa-phone" aria-hidden="true"></i> Contact <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html"> View Contact</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>            
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo url('public/admin/images/img.jpg'); ?>" alt="">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> </a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo url('authentication/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="">
       <div class="page-title">
             
          <!-- /top tiles -->
        <div class="col-lg-12">
          <?php if(Session::has('flash_message')): ?>
             <div class="alert alert-<?php echo Session::get('flash_level'); ?>">
               <?php echo Session::get('flash_message'); ?> 
             </div>
          <?php endif; ?>
        </div>
        <?php echo $__env->yieldContent('content'); ?>
        </div>
        </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           DailyShop by<a href="">Nguyen Trung Dung</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a>
    <div class="modal fade" id="modal-media-image">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Thư viện ảnh</h4>
          </div>
          <div class="modal-body">
            <iframe src="http://localhost/project/filemanager/dialog.php?field_id=image" style="border:none; width:100%; height: 500px" ></iframe>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
    </div>
  
    <div class="modal fade" id="modal-id">
      <div class="modal-dialog modal-lg" style="height:100%">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            
          </div>
          <div class="modal-body modal-lg">
          
          </div>
          <div class="modal-footer">
        
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-id1">
      <div class="modal-dialog modal-lg" style="height:60%">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          
          </div>
          <div class="modal-body1">
          
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="edit">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           
          </div>
          <div class="editcolor">
            
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="xem-color">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            
          </div>
          <div class="xem-color">
            
          </div>
          <div class="modal-footer">
           
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo url('public/admin/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo url('public/admin/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo url('public/admin/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo url('public/admin/vendors/nprogress/nprogress.js'); ?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo url('public/admin/vendors/Chart.js/dist/Chart.min.js'); ?>"></script>
    <!-- gauge.js -->
    <script src="<?php echo url('public/admin/vendors/gauge.js/dist/gauge.min.js'); ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo url('public/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js'); ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo url('public/admin/vendors/iCheck/icheck.min.js'); ?>"></script>
    <!-- Skycons -->
    <script src="<?php echo url('public/admin/vendors/skycons/skycons.js'); ?>"></script>
    <!-- Flot -->
    <script src="<?php echo url('public/admin/vendors/Flot/jquery.flot.js'); ?>"></script>
    <script src="<?php echo url('public/admin/vendors/Flot/jquery.flot.pie.js'); ?>"></script>
    <script src="<?php echo url('public/admin/vendors/Flot/jquery.flot.time.js'); ?>"></script>
    <script src="<?php echo url('public/admin/vendors/Flot/jquery.flot.stack.js'); ?>"></script>
    <script src="<?php echo url('public/admin/vendors/Flot/jquery.flot.resize.js'); ?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo url('public/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js'); ?>"></script>
    <script src="<?php echo url('public/admin/vendors/flot-spline/js/jquery.flot.spline.min.js'); ?>"></script>
    <script src="<?php echo url('public/admin/vendors/flot.curvedlines/curvedLines.js'); ?>"></script>
    <!-- DateJS -->
    <script src="<?php echo url('public/admin/vendors/DateJS/build/date.js'); ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo url('public/admin/vendors/jqvmap/dist/jquery.vmap.js'); ?>"></script>
    <script src="<?php echo url('public/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js'); ?>"></script>
    <script src="<?php echo url('public/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js'); ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo url('public/admin/vendors/moment/min/moment.min.js'); ?>"></script>
    <script src="<?php echo url('public/admin/vendors/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>

    <!-- Custom Theme Scripts -->
     <script src="<?php echo url('public/admin/jquery-ui/jquery-ui.js'); ?>"></script>
    <script src="<?php echo url('public/admin/js/main.js'); ?>"></script>
    <script src="<?php echo url('public/admin/js/logo.js'); ?>"></script>
    <script src="<?php echo url('public/admin/build/js/custom.min.js'); ?>"></script>
    <script src="<?php echo url('public/admin/js/edit.js'); ?>"></script>
    <script src="<?php echo url('public/admin/js/list.js'); ?>"></script>
    <script src="<?php echo url('public/admin/js/flash.js'); ?>"></script>
    <script src="<?php echo url('public/admin/js/color.js'); ?>"></script>
    <script src="<?php echo url('public/admin/js/editcolor.js'); ?>"></script>
 </body>
</html>
