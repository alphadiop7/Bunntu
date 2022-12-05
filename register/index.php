<?php
    include './register.php';
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
    <title>Register</title>
</head>

<body>
  <main>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-sm-6">
          <img src="../image/register.svg" class="img-fluid" alt="ullustration register">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="card">
            <div class="d-flex align-items-center mb-1 pb-1">
              <i class="bi bi-boxes fs-2 me-3"></i>
              <span class="h1 fw-bold mb-0">Bunntu</span>
            </div>
            <h5 class="fw-normal mb-2 pb-3">Create an account</h5>
            <form method="POST">
              <?php
              if (isset($successmsg)) {
                echo '<div id="successMsg" class="form-text text-success" style="position: absolute; margin-top: -20px;">' .$successmsg. '</div>';
              }
              ?>
              <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" id="Username" value="<?php if (isset($errormsg) || isset($alertemail) || isset($alertpassword)) { echo $_POST['username']; } ?>">
                <?php
                    if (isset($alertusername)) {
                      echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute; margin-top: -2px;">' .$alertusername. '</div>';
                    }
                ?>
              </div>
              <div class="mb-3">
                <label for="Email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Email address" id="Email" value="<?php if (isset($errormsg) || isset($alertusername) || isset($alertpassword)) { echo $_POST['email']; } ?>">
                <?php
                    if (isset($alertemail)) {
                      echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute; margin-top: -2px;">' .$alertemail. '</div>';
                    } elseif (isset($errormsg)) {
                      echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute; margin-top: -2px;">' .$errormsg. '</div>';
                    }
                ?>
              </div>
              <div class="mb-4">
                <label for="Password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" id="Password" value="<?php if (isset($errormsg) || isset($alertusername) || isset($alertemail)) { echo $_POST['password']; } ?>">
                <?php
                    if (isset($alertpassword)) {
                      echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute; margin-top: -2px;">' .$alertpassword. '</div>';
                    }
                ?>
              </div>
              <button type="submit" name="submit" class="btn mb-1  form-control">REGISTER</button>
              <p class="mb-0 pb-lg-2">Have an account ? <a class="register" href="../login/">login here</a></p>
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