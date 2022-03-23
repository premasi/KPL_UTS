<?php 
include "./function/db.php";
include "./function/function.php";

$submit = isset($_POST['submit']); //ketika tombol sudah di submit

createAdmin($submit);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../foto/download.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Blinking</title>
</head>
<body>
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign Up</h3>

            <form action="register.php" method="post">
                <div class="form-outline mb-4">
                <input type="text" name="username" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX-2">Username</label>
                </div>

                <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX-2">Password</label>
                </div>

                <input class="btn btn-primary btn-lg btn-block" name="submit" type="submit" value="Submit"></input>

            </form>
            <hr class="my-4">Already have account? <a href="login.php">Sign In</a> now</h3>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
</body>
</html>