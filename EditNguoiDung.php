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
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sửa người dùng</h4>
                  <form class="forms-sample" action="taonguoidung.php" method="POST">
                    <div class="form-group">
                      <label for="inputUser">Tài khoản</label>
                      <input type="text" name="user" class="form-control" value="admin" id="inputUser" placeholder="Username">
                    </div>
                   
                    <div class="form-group">
                      <label for="inputPWD">Mật khẩu</label>
                      <input type="password" name="pwd" class="form-control" value="1234" id="inputPWD" placeholder="Password">
                    </div>

                    
                    <div class="form-group">
                      <label for="inputName">Họ Tên</label>
                      <input type="text" name="name" class="form-control" value="Say Dậu" id="inputName" placeholder="Họ Tên">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Địa chỉ</label>
                      <input type="text" name="address" class="form-control" value="1200 Việt Nam" id="inputAddress" placeholder="Nhập Địa chỉ">
                    </div>
                    <div class="form-group">
                      <label for="inputPhone">Số điện thoại</label>
                      <input type="text" name="phone" class="form-control" value="09090909" id="inputPhone" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="form-group">
                      <label >Hình đại diện</label>
                      <input type="file" name="file" id="avatar_user" class="form-control w-25" >
                      <label class="my-3" for="avatar_user">conmeo.jpg</label>
                   
                      <div class="">
                        
                          <img class="img-preview" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.6435-9/80569696_2579129398984180_5987193047803232256_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=e3f864&_nc_ohc=QXy24SSFYJgAX94WrQ9&_nc_ht=scontent.fsgn2-2.fna&oh=79acd6b511f7246b8756b14f2e196b86&oe=61B0A473" alt="">
                      </div>

                      
                    </div>
                    
                    <a href="DanhSachNguoiDung.php" class="btn btn-secondary me-2 text-dark">Hủy</a>
                    <button type="button" class="btn btn-success me-2 text-light">Lưu thay đổi</button>
                   
                  </form>
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

