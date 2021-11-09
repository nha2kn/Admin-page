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
                  <h4 class="card-title">Chi tiết sản phẩm</h4>
                  <a href="DanhSachSanPham.php" class="btn btn-sm btn-inverse-primary btn-fw mb-3">
                    <div class="d-flex align-items-center">
                      <i class="mdi mdi-book-open-variant mx-2 fs-5"></i> Danh sách sản phẩm
                    </div>
                  </a>
                  <div class="table-responsive">
                    <table class="table table-warning">
                      <thead>
                        <tr>
                          <th colspan="2">
                            Thông tin chi tiết 
                          </th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td> 
                                Hình ảnh
                             </td>
                          <td class="py-1">
                            <img src="http://hystore.vn/wp-content/uploads/2019/11/BDEC2A51-A04B-40EB-84CD-82D4C7C52E98.jpeg" />
                          </td>
                        </tr>
                        <tr>
                            <td> 
                               Tên sản phẩm 
                             </td>
                          <td >
                                Yeezy 700
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Trạng thái
                             </td>
                          <td >
                            <label class="badge badge-success">Active</label>
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Giá
                             </td>
                          <td >
                            50.000 VND
                          </td>
                        </tr>
                        <tr>
                            <td> 
                               Thương hiệu
                             </td>
                          <td >
                             Adilinh
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Tồn kho
                             </td>
                          <td >
                             30
                          </td>
                        </tr>
                        <tr>
                            <td> 
                                Mô tả
                             </td>
                          <td >
                            Mẫu giày Adidas Yeezy Boost 700 là mẫu thứ 5 được Kanye West tạo ra cho thương hiệu của mình.</br>
                             Đó là vào năm 2015, câu chuyện bắt đầu, rapper / nhà sản xuất hợp tác với Adidas để tạo ra 
                             thương hiệu của mình và phát hành các mẫu giày thể thao của riêng mình.
                          </td>
                        </tr>
                        <tr>
                            <td> 
                               Ngày tạo
                             </td>
                          <td >
                             November 9,2021
                          </td>
                        </tr>
                         
                      </tbody>
                    </table>
                    <div class="d-flex flex-row-reverse">
                        <a href="EditSanPham.php" class="btn btn-sm btn-inverse-success btn-fw mt-3 mx-3">
                        <div class="d-flex align-items-center">
                        <i class="mdi mdi-pencil mx-2"></i> Sửa sản phẩm
                        </div>
                        </a>
                        <button  class="btn btn-sm btn-inverse-danger btn-fw mt-3">
                        <div class="d-flex align-items-center">
                        <i class="mdi mdi-delete mx-2 fs-5"></i> Xóa sản phẩm
                        </div>
                    </button>
                    </div>
                   
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

