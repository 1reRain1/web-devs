<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/signupstyle.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="logo fa-solid fa-laptop-code"></i>
        <span>Web_Devs</span>
      </a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="main">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 active" aria-current="page" href="#">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3" href="#">Teacher's space</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3" href="#">Plugins</a>
          </li>
        </ul>
        <div class="search">
          <i class="fa-solid fa-magnifying-glass ps-3 pe-3"></i>
        </div>
        <a class="btn btn-danger rounded-pill main-btn" href="#">Login</a>
      </div>
    </div>
  </nav>
  <section class="webdevssignupForm">
    <div class="logoInForm text-center">
      <a class="navbar-brand" href="#">
        <i class="logo fa-solid fa-laptop-code text-center"></i>
        <span>Web_Devs</span>
      </a>
    </div>
    <div class="container">
      <div class="signUpForm row">
        <div class="form-field col-lg-12">
          <input required type="text" id="username" name="" class="input-text" />
          <label for="username" class="label">Username</label>
        </div>
        <div class="form-field col-lg-12">
          <input required type="password" id="name" name="" class="input-text" />
          <label for="password" class="label">Password</label>
        </div>
      </div>
      <div class="form-field col-lg-12 text-center mt-4">
        <input required type="submit" id="name" name="submit" value="Login!"
          class="submit-btn btn btn-danger rounded-pill fs-6 text-uppercase" />
        <div class="loginow mt-2">
          <a class="text-center link-dark text-decoration-none" href="signup.php">
            you don't have an account ? Sign Up now</a>
        </div>
      </div>
    </div>
  </section>
  <!-- <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script> -->
</body>

</html>