<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Xin chào, <span class="text-black fw-bold"><?php
            
              echo  "admin"
             ?></span></h1>
            <h3 class="welcome-sub-text">Chúc ngày mới </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.6435-9/80569696_2579129398984180_5987193047803232256_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=e3f864&_nc_ohc=QXy24SSFYJgAX94WrQ9&_nc_ht=scontent.fsgn2-2.fna&oh=79acd6b511f7246b8756b14f2e196b86&oe=61B0A473" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-sm rounded-circle" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.6435-9/80569696_2579129398984180_5987193047803232256_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=e3f864&_nc_ohc=QXy24SSFYJgAX94WrQ9&_nc_ht=scontent.fsgn2-2.fna&oh=79acd6b511f7246b8756b14f2e196b86&oe=61B0A473" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Say Dau</p>
                <p class="fw-light text-muted mb-0">axsi3011@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Thông tin cá nhân <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Cài đặt</a>
              
              <a href="index.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Thoát</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>