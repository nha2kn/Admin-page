
  <?php include "../layout/navbar.php"; ?>
  <?php include "../layout/sidebar.php"; ?>
  <?php include '../data/data.php'; ?>  
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-lg-8 grid-margin stretch-card ml-32">
            <div class="card">
              <div class="card-body">
                <div class="header-table">
                  <h4 class="card-title">Quản lý danh mục</h4>
                  <button class="btn-add" onclick="window.location.href='../categories/category-add.php'">Thêm danh mục</button>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Danh mục</th>
                        <th>Số lượng</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($dataCategory as $items) {
                        echo "<tr>";
                        foreach ($items as $key => $value) {
                          echo "<td>$value</td>";
                        }
                        echo '
                                <td>
                                  <a href="./category-edit.php" class="edit-icon">
                                      <i class="mdi mdi-tooltip-edit"></i>
                                  </a>
                                </td>
                                <td>
                                  <a href="#" class="edit-icon">
                                      <i class="mdi mdi-delete-forever"></i>
                                  </a>
                                </td>
                              ';
                        echo "</tr>";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.php -->
      <!-- <?php include "../layout/footer.php"; ?> -->
      