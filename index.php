<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The menu</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
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
            <a class="nav-link p-2 p-lg-3 active" aria-current="page" href="#">Home</a>
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
        <a class="btn btn-danger rounded-pill main-btn" href="login.php">Login</a>
      </div>
    </div>
  </nav>
  <div class="landing d-flex justify-content-center align-items-center">
    <div class="text-center text-light">
      <i class="mainLogo fa-solid fa-code-compare"></i>
      <h1>Web Develpment & Mobile Apps</h1>
      <p class="fs-6 text-white-50 mb-4">
        you miss all the code you don't write
      </p>
      <a class="btn btn-danger rounded-pill main-btn" href="#">Enter our world
      </a>
    </div>
  </div>
  <div class="secondPage text-center">
    <div class="container">
      <div class="main-title">
        <i class="secondLogo fa-solid fa-code-branch mb-3 mt-5"></i>
        <h2>we're trying to be good at :</h2>
        <p class="par text-black-50 text-uppercase">
          yea we're trying and we're almost there
        <p class="par1"></p>
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="features mt-5">
            <div class="icon-holder position-relative">
              <i class="fa-solid fa-1 bottom-0 number position-absolute"></i>
              <i class="fa-brands fa-html5 fa-4x bottom-0 icon position-absolute "></i>
            </div>
          </div>
          <h3 class="mb-4 mt-3 text-uppercase">website devolepment</h3>
          <p class="text-black-50 lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio
            eveniet hic mollitia nam,
            illum consequatur officia iusto quibusdam?</p>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="features mt-5">
            <div class="icon-holder position-relative">
              <i class="fa-solid fa-2 bottom-0 number position-absolute"></i>
              <i class="fa-brands fa-app-store fa-4x bottom-0 icon position-absolute "></i>
            </div>
          </div>
          <h3 class="mb-4 mt-3 text-uppercase">mobile apps Develpment</h3>
          <p class="text-black-50 lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio
            eveniet hic mollitia nam,
            illum consequatur officia iusto quibusdam?</p>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="features mt-5">
            <div class="icon-holder position-relative">
              <i class="fa-solid fa-3 bottom-0 number position-absolute"></i>
              <i class="fa-solid fa-pencil fa-4x bottom-0 icon position-absolute "></i>

            </div>
          </div>
          <h3 class="mb-4 mt-3 text-uppercase">mobile apps & website design</h3>
          <p class="text-black-50 lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio
            eveniet hic mollitia nam,
            illum consequatur officia iusto quibusdam?</p>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="our-work text-center pt-5 pb-5 ">
    <div class="container">
      <div class="main-title">
        <i class="secondLogo fa-solid fa-code-branch mb-3 mt-5"></i>
        <h2>currently we're working on</h2>
        <p class="par text-black-50 text-uppercase">
          working on ourselfs and on our skills
        <p class="par1"></p>
        </p>
      </div>
      <ul class="list-unstyled d-flex justify-content-center mt-5 mb-5">
        <li class="active rounded-pill">all</li>
        <li>design</li>
        <li>code</li>
        <li>photo</li>
        <li>app</li>
      </ul>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="box mb-3 bg-white" data-work="application">
            <img src="imgs/pic4.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="box mb-3 bg-white" data-work="application">
            <img src="imgs/pic4.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="box mb-3 bg-white" data-work="application">
            <img src="imgs/pic4.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="box mb-3 bg-white" data-work="application">
            <img src="imgs/pic4.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="box mb-3 bg-white" data-work="application">
            <img src="imgs/pic4.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="box mb-3 bg-white" data-work="application">
            <img src="imgs/pic4.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-5">
        <a class="btn btn-danger rounded-pill main-btn text-uppercase" href="#">want to work with us ?</a>
      </div>
    </div>
  </div>
  <div class="container mt-4">
    <div class="main-title text-center">
      <i class="secondLogo fa-solid fa-code-branch mb-3 mt-5"></i>
      <h2> we also have an android app</h2>
      <p class="par text-black-50 text-uppercase">
        we also have an android app for all our fans!
      <p class="par1"></p>
      </p>
    </div>
    <p class="decription text-black-50 mt-5 text-center m-auto">Lorem, ipsum dolor sit amet consectetur adipisicing
      elit. Quaerat expedita perferendis sunt architecto quas repellat suscipit rem similique adipisci, inventore
      recusandae eligendi dignissimos maiores natus eaque reprehenderit facere necessitatibus earum.</p>
    <div class="row">
      <div class="col-lg-4 mb-4 text-center text-md-start">
        <div class="text mt-5">
          <h3>web_devs_design</h3>
          <p class="text-black-50 fs-6">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum quis debitis quia eaque aliquid estiae.
            similique cum nemo assumenda sapiente Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab</p>
          <p class="text-black-50 fs-6">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum quis debitis quia eaque aliquid estiae.
            similique cum nemo assumenda sapiente Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab
            natus deserunt tempore id
          </p>
          <a class="btn btn-danger rounded-pill main-btn" href="#">get the app now !</a>
        </div>
      </div>
      <div class="col-lg-8 phonePic d-flex align-items-center  ">
        <img class="img-fluid" src="imgs/phone.png" alt="">
      </div>
    </div>
    <div class="our-team">

    </div>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>