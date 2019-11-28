<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="php/register.php">
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="username" id="exampleInputEmail" placeholder="Email Address" required="required|email">
                </div>
                <div class="form-group">
                  <select name="privilege" class="from-control form-control-user" style="width: 100%; padding: 1rem; border: 1px solid #d1d3e2; color: #6e707e;">
                    <option>User</option>
                    <option>Admin</option>
                  </select>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required="required">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="confirmpassword" name="confirmpassword" placeholder="Repeat Password" required="required">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <!-- <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div> -->
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php include 'footer.php';?>

  <script>
  let password = document.querySelector('#password');
  let confirm_password = document.querySelector('#confirmpassword');

  function validatePassword() {
    if(password.value != confirm_password.value) {
      confirm_password.setCustomValidity("Password dont't match");
    }else {
      confirm_password.setCustomValidity('');
    }
  }

  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;
  </script>

</body>

</html>
