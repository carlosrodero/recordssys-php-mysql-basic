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
          <h1 class="h3 mb-2 text-gray-800">Users</h1>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
            </div>
            <div class="card-body">
              <?php
              include 'php/db.inc.php';
              $sql = "SELECT * FROM tbl_accounts WHERE id = ".$_GET["id"];
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              ?>
              <form action="php/updateuser.php" method="post" style="max-width: 600px;">
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <div class="form-group">
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username"value="<?php echo $row['username']?>" >
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $row['password']?>">
                </div>
                <div class="form-group">
                  <select class="form-control" id="privilege" name="privilege">
                    <option><?php echo $row['privilege']?></option>
                    <option>User</option>
                    <option>Admin</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update User</button>
              </form>
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
