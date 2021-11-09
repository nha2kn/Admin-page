<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller"> 
     
    <?php 
      include "partials/nav.php"
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!--  -->
    
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        
      </div>
      <!-- partial -->
     
      <?php
        include "partials/sidebar.php"
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Danh sách người dùng</h4>
                  <a href="ThemNguoiDung.php" class="btn btn-sm btn-inverse-success btn-fw">
                    <div class="d-flex align-items-center">
                      <i class="mdi mdi-account-plus mx-2 fs-5"></i> Thêm mới
                    </div>
                  </a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Hình ảnh
                          </th>
                          <th>
                            Tên
                          </th>
                          <th>
                            User
                          </th>
                          <th>
                            Ngày tạo
                          </th>

                          <th class="text-center">
                            Chức năng
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="https://scontent.fsgn2-6.fna.fbcdn.net/v/t1.6435-9/150375901_2874896136090720_3749314522767284653_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=QUVJYIbQnzAAX-GAbXc&_nc_ht=scontent.fsgn2-6.fna&oh=a2b986a1b0ede78954e31ed85625b23e&oe=61AEB81E" />
                          </td>
                          <td>
                        
                                Hà Trí Khang
                            
                          </td>
                          <td>
                            hatrikhang
                          </td>
                          <td>
                            November 9, 2021
                          </td>
                          <td class="text-center ">
                            <a href="EditNguoiDung.php" class="btn btn-sm btn-rounded btn-inverse-primary mx-1"> 
                                   <i class="mdi mdi-pencil"></i>
                            </a> 

                            <a href="ChiTietNguoiDung.php" class="btn btn-sm btn-rounded btn-inverse-success  mx-1"> 
                                   <i class="mdi mdi-book-open"></i>
                            </a>

                            <button class="btn btn-sm btn-rounded btn-inverse-danger  mx-1"> 
                                   <i class="mdi mdi-delete"></i>
                            </button>
                       
                          </td>
                        </tr>

                        <tr>
                          <td class="py-1">
                            <img src="https://scontent.fsgn2-5.fna.fbcdn.net/v/t1.6435-9/122451347_1631240420600695_9157105645134600641_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=O0Lzlod1_RIAX8q66cZ&_nc_ht=scontent.fsgn2-5.fna&oh=0d361bcb58550020254ef401d1789667&oe=61AD8983" />
                          </td>
                          <td>
                        
                               Trần Thiện Thành Nhân
                            
                          </td>
                          <td>
                            nhantran
                          </td>
                          <td>
                            November 9, 2021
                          </td>
                          <td class="text-center ">
                            <a href="EditNguoiDung.php" class="btn btn-sm btn-rounded btn-inverse-primary mx-1"> 
                                   <i class="mdi mdi-pencil"></i>
                            </a> 

                            <a href="ChiTietNguoiDung.php" class="btn btn-sm btn-rounded btn-inverse-success  mx-1"> 
                                   <i class="mdi mdi-book-open"></i>
                            </a>

                            <button class="btn btn-sm btn-rounded btn-inverse-danger  mx-1"> 
                                   <i class="mdi mdi-delete"></i>
                            </button>
                       
                          </td>
                        </tr>

                        <tr>
                          <td class="py-1">
                            <img src="https://scontent.fsgn2-3.fna.fbcdn.net/v/t1.6435-1/p240x240/212555392_2734869996804077_8244314470673427581_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=7206a8&_nc_ohc=ppbqFyWUdKoAX8ffdDh&tn=YBCqwSu83s-jpQT4&_nc_ht=scontent.fsgn2-3.fna&oh=1df644abc3ba688a1f87be8ef1a0b59c&oe=61B0D7B5" />
                          </td>
                          <td>
                        
                                Nguyễn Anh Võ
                            
                          </td>
                          <td>
                            nganhvo
                          </td>
                          <td>
                            November 9, 2021
                          </td>
                          <td class="text-center ">
                            <a href="EditNguoiDung.php" class="btn btn-sm btn-rounded btn-inverse-primary mx-1"> 
                                   <i class="mdi mdi-pencil"></i>
                            </a> 

                            <a href="ChiTietNguoiDung.php" class="btn btn-sm btn-rounded btn-inverse-success  mx-1"> 
                                   <i class="mdi mdi-book-open"></i>
                            </a>

                            <button class="btn btn-sm btn-rounded btn-inverse-danger  mx-1"> 
                                   <i class="mdi mdi-delete"></i>
                            </button>
                       
                          </td>
                        </tr>

                        <tr>
                          <td class="py-1">
                            <img src="https://scontent.fsgn2-4.fna.fbcdn.net/v/t1.18169-9/11921666_118940168456736_1452070894666340829_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=TRRy16yIu7UAX9Ku2bU&_nc_ht=scontent.fsgn2-4.fna&oh=1f2c1557b07d7249841400d009f228fa&oe=61B0CE67" />
                          </td>
                          <td>
                        
                                Đặng Văn Hiếu
                            
                          </td>
                          <td>
                            hieudang
                          </td>
                          <td>
                            November 9, 2021
                          </td>
                          <td class="text-center ">
                            <a href="EditNguoiDung.php" class="btn btn-sm btn-rounded btn-inverse-primary mx-1"> 
                                   <i class="mdi mdi-pencil"></i>
                            </a> 

                            <a href="ChiTietNguoiDung.php" class="btn btn-sm btn-rounded btn-inverse-success  mx-1"> 
                                   <i class="mdi mdi-book-open"></i>
                            </a>

                            <button class="btn btn-sm btn-rounded btn-inverse-danger  mx-1"> 
                                   <i class="mdi mdi-delete"></i>
                            </button>
                       
                          </td>
                        </tr>

                        <tr>
                          <td class="py-1">
                            <img src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.6435-9/80569696_2579129398984180_5987193047803232256_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=e3f864&_nc_ohc=QXy24SSFYJgAX94WrQ9&_nc_ht=scontent.fsgn2-2.fna&oh=79acd6b511f7246b8756b14f2e196b86&oe=61B0A473" />
                          </td>
                          <td>
                        
                               Say Dậu
                            
                          </td>
                          <td>
                            admin
                          </td>
                          <td>
                            November 9, 2021
                          </td>
                          <td class="text-center ">
                            <a href="EditNguoiDung.php" class="btn btn-sm btn-rounded btn-inverse-primary mx-1"> 
                                   <i class="mdi mdi-pencil"></i>
                            </a> 

                            <a href="ChiTietNguoiDung.php" class="btn btn-sm btn-rounded btn-inverse-success  mx-1"> 
                                   <i class="mdi mdi-book-open"></i>
                            </a>

                            <button class="btn btn-sm btn-rounded btn-inverse-danger  mx-1"> 
                                   <i class="mdi mdi-delete"></i>
                            </button>
                       
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
         
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  
</body>
  <!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</html>

