<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $page = "Auth";
  include 'head.php';
  session_start();
  ?>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-7 order-1"><img class="bg-img-cover bg-center" src="assets/images/login/1.jpg" alt="looginpage"></div>
      <div class="col-xl-5 p-0">
        <div class="login-card">
          <div>
            <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="assets/images/logo/login.png" alt="looginpage"><img class="img-fluid for-dark" src="assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
            <div class="login-main">
              <form class="theme-form" id="form_login">
                <h4>Login</h4>
                <p>Masukan Email & Password Anda</p>
                <div class="form-group">
                  <label class="col-form-label">Email</label>
                  <input class="form-control" type="email" required="" placeholder="Test@gmail.com" name="email">
                </div>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <div class="form-input position-relative">
                    <input class="form-control" type="password" name="password" required="" placeholder="*********" name="password">
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="text-end mt-3">
                    <button class="btn btn-primary btn-block w-100" type="button" id="login">Login</button>
                  </div>
                </div>
                <script>
                </script>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <script src="assets/js/config.js"></script>
    <script src="assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="assets/js/tooltip-init.js"></script>
    <script src="assets/js/animation/wow/wow.min.js"></script>
    <script src="assets/js/landing_sticky.js"></script>
    <script src="assets/js/landing.js"></script>
    <script src="assets/js/script.js"></script>
  </div>
  <script>
    $(document).ready(function() {
      $('#login').click(function(event) {
        let data = $('#form_login').serialize();
        $.ajax({
          method: "POST",
          url: "auth.php",
          data: data,
          dataType: 'json',
          success: function(response) {
            if (response.success) {
              Swal.fire({
                title: "Success",
                text: response.message,
                icon: "success",
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ok"
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = "admin.php";
                }
              });
            } else {
              Swal.fire({
                title: "Opss",
                text: response.message,
                icon: "error"
              });
            }
          }
        });
      });
    });
  </script>
</body>

</html>