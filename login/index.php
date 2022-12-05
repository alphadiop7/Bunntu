<?php
    require './login.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../image/boxes.svg" type="image/x-icon">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap-icons/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>

<body>
  <main>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-sm-6">
          <img src="../image/login.svg" class="img-fluid" alt="ullustration login">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="card">
            <div class="d-flex align-items-center mb-3 pb-1">
              <i class="bi bi-boxes fs-2 me-3"></i>
              <span class="h1 fw-bold mb-0">Bunntu</span>
            </div>
            <h5 class="fw-normal mb-3 pb-3">Sign into your account</h5>
            <form method="POST">
              <?php
              if (isset($errormsg)) {
                echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute; margin-top: -20px;">' .$errormsg. '</div>';
              }
              ?>
              <div class="mb-3">
                <label for="Email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Email address" id="Email" value="<?php if (isset($alertpassword) || isset($errormsg)) { echo $_POST['email'];} ?>">
                <?php
                    if (isset($alertemail)) {
                      echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute; margin-top: -3px;">' .$alertemail. '</div>';
                    }
                ?>
              </div>
              <div class="mb-4">
                <label for="Password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" id="Password">
                <?php
                    if (isset($alertpassword)) {
                      echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute; margin-top: -3px">' .$alertpassword. '</div>';
                    }
                ?>
              </div>
              <button type="submit" name="submit" class="btn  form-control">LOGIN</button>
              <a class="small text-muted" href="#!">Forgot password ?</a>
              <p class="mb-2 pb-lg-2">Don't have an account? <a class="register" href="../register/">Register here</a></p>
              <a href="#!" class="small text-muted">Terms of use &</a> <a href="#!" class="small text-muted">Privacy policy</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>