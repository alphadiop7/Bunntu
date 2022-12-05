<?php
    
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: ../index.php");
    }

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
    <title>Welcome</title>
</head>

<body>
  <main>
    <div class="container">
    <?php echo "<h1>Bienvenue " . $_SESSION['username'] . "</h1>"; ?>
        <a href="../logout/">Logout</a>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>