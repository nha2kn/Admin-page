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
                  <h4 class="card-title">Danh sách danh mục</h4>
                  <a href="ThemDanhMuc.php" class="btn btn-sm btn-inverse-success btn-fw">
                    <div class="d-flex align-items-center">
                      <i class="mdi mdi-cube mx-2 fs-5"></i> Thêm mới
                    </div>
                  </a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            id
                          </th>
                          <th>
                            Tên Danh mục
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
                          <td>
                                ct001
                          </td>
                          <td>
                        
                                Sneaker
                            
                          </td>
                          <td>
                            November 9, 2021
                          </td>
                          <td class="text-center ">
                            <a href="EditDanhMuc.php" class="btn btn-sm btn-rounded btn-inverse-primary mx-1"> 
                                   <i class="mdi mdi-pencil"></i>
                            </a> 

                            <a href="ChiTietDanhMuc.php" class="btn btn-sm btn-rounded btn-inverse-success  mx-1"> 
                                   <i class="mdi mdi-book-open"></i>
</a>

                            <button class="btn btn-sm btn-rounded btn-inverse-danger  mx-1"> 
                                   <i class="mdi mdi-delete"></i>
                            </button>
                       
                          </td>
                        </tr>

                        <tr>
                          <td>
                                ct002
                          </td>
                          <td>
                        
                                Sang trọng
                            
                          </td>
                          <td>
                            November 9, 2021
                          </td>
                          <td class="text-center ">
                            <a href="EditDanhMuc.php" class="btn btn-sm btn-rounded btn-inverse-primary mx-1"> 
                                   <i class="mdi mdi-pencil"></i>
                            </a> 

                            <a href="ChiTietDanhMuc.php" class="btn btn-sm btn-rounded btn-inverse-success  mx-1"> 
                                   <i class="mdi mdi-book-open"></i>
</a>

                            <button class="btn btn-sm btn-rounded btn-inverse-danger  mx-1"> 
                                   <i class="mdi mdi-delete"></i>
                            </button>
                       
                          </td>
                        </tr>

                        <tr>
                          <td>
                                ct003
                          </td>
                          <td>
                        
                                Boots
                            
                          </td>
                          <td>
                            November 9, 2021
                          </td>
                          <td class="text-center ">
                            <a href="EditDanhMuc.php" class="btn btn-sm btn-rounded btn-inverse-primary mx-1"> 
                                   <i class="mdi mdi-pencil"></i>
                            </a> 

                            <a href="ChiTietDanhMuc.php" class="btn btn-sm btn-rounded btn-inverse-success  mx-1"> 
                                   <i class="mdi mdi-book-open"></i>
</a>

                            <button class="btn btn-sm btn-rounded btn-inverse-danger  mx-1"> 
                                   <i class="mdi mdi-delete"></i>
                            </button>
                       
                          </td>
                        </tr>

                        <tr>
                          <td>
                                ct004
                          </td>
                          <td>
                        
                                Chạy bộ
                            
                          </td>
                          <td>
                            November 9, 2021
                          </td>
                          <td class="text-center ">
                            <a href="EditDanhMuc.php" class="btn btn-sm btn-rounded btn-inverse-primary mx-1"> 
                                   <i class="mdi mdi-pencil"></i>
                            </a> 

                            <a href="ChiTietDanhMuc.php" class="btn btn-sm btn-rounded btn-inverse-success  mx-1"> 
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

