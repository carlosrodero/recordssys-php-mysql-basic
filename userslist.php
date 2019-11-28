<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'header.php';?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'sidebar.php';?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'topnav.php';?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Users List</h1>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Privilege</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Privilege</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    include 'php/db.inc.php';

                    $sql = "SELECT * FROM tbl_accounts ORDER BY id DESC";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {
                      echo '
                        <tr>
                          <td>'.$row['id'].'</td>
                          <td>'.$row['username'].'</td>
                          <td>'.$row['password'].'</td>
                          <td>'.$row['privilege'].'</td>
                          <td>
                            <a class="btn btn-info btn-block" href="edituser.php?id='.$row['id'].'">Edit</a>
                            <a class="btn btn-danger btn-block" href="php/deleteuser.php?id='.$row['id'].'">Delete</a>
                          </td>
                        </tr>
                      ';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include 'copyright.php';?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Modals --> 
  <?php include 'modals.php';?>

  <?php include 'footer.php';?>

</body>

</html>
