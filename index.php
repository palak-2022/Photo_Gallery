<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" >
</head>
<body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Nature</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Travel</a>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="bd-example">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/ar1.jpg" class="d-block w-100" alt="Architecture">
      <div class="carousel-caption d-none d-md-block">
        <h3>Architecture</h3>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/nature.jpg" alt="Nature">
      <div class="carousel-caption d-none d-md-block">
        <h3>Nature</h3>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/travel.jpg" alt="Travel">
      <div class="carousel-caption d-none d-md-block">
        <h3>Travel</h3>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<section  class="my-4">
    <div class="py-4">
      <h2 class="text-center">Nature</h2>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
  <img src="images/nature1.jpg" class="img-fluid pb-3">
</div>

<div class="col-lg-4 col-md-4 col-12">
  <img src="images/nature2.jpg" class="img-fluid pb-3"> 
</div>

<div class="col-lg-4 col-md-4 col-12">
  <img src="images/nature3.jpg" class="img-fluid pb-3">
</div>

<div class="col-lg-4 col-md-4 col-12">
  <img src="images/nature4.jpg" class="img-fluid pb-3">
</div>

<div class="col-lg-4 col-md-4 col-12">
  <img src="images/nature5.jpg" class="img-fluid pb-3">
</div>

<div class="col-lg-4 col-md-4 col-12">
  <img src="images/nature6.jpg" class="img-fluid pb-3">
</div>
</div>
</div>
</section>

<section  class="my-4">
  
    <div class="py-4">
      <h2 class="text-center">Architecture</h2>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
  <img src="images/ar3.jpg" class="img-fluid pb-3">
</div>

<div class="col-lg-4 col-md-4 col-12">
  <img src="images/ar4.jpg" class="img-fluid pb-3">
</div>

<div class="col-lg-4 col-md-4 col-12">
  <img src="images/ar5.jpg" class="img-fluid pb-3">
</div>

<div class="col-lg-4 col-md-4 col-12">
  <img src="images/ar6.jpg" class="img-fluid pb-3">
</div>

<div class="col-lg-4 col-md-4 col-12">
  <img src="images/ar7.jpg" class="img-fluid pb-3">
</div>

<div class="col-lg-4 col-md-4 col-12">
  <img src="images/ar8.jpg" class="img-fluid pb-3">
</div>
</div>
</div>
</section>

<section  class="my-4">
  
    <div class="py-4">
      <h2 class="text-center">Travel</h2>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
  <img src="images/tra.jpg" class="img-fluid pb-3">
</div>

<div class="col-lg-4 col-md-4 col-12">
  <img src="images/tra2.jpg" class="img-fluid pb-3">
</div>

<div class="col-lg-4 col-md-4 col-12">
  <img src="images/tra3.jpg" class="img-fluid pb-3">
</div>

<div class="col-lg-4 col-md-4 col-12">
  <img src="images/tra4.jpg" class="img-fluid pb-3">
</div>

<div class="col-lg-4 col-md-4 col-12">
  <img src="images/tra5.jpg" class="img-fluid pb-3">
</div>

<div class="col-lg-2 col-md-4 col-12">
  <img src="images/tra6.jpg" class="img-fluid1 pb-3">
</div>
</div>
</div>
</section>

<section  class="my-4">
  
    <div class="py-4">
      <h2 class="text-center">Contact Us</h2>
</div>
<div class="w-50 m-auto">
  <form action="about.php" method="post">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" name="name" class="form-control">
      </div>

       <div class="form-group">
      <label>Email:</label>
      <input type="email" name="email" class="form-control">
      </div>

       <div class="form-group">
      <label>Number:</label>
      <input type="text" name="number" class="form-control">
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
</section>

<section  class="my-4">
    <div class="py-4">
      <h2 class="text-center">About</h2>
</div>
<div class="container">
  <p class="text-center"><b>I am a passionate photographer interested in working in Architecture, Nature and Travel Photography.
  I am a full time freelancer with an experience of 5 year.</b></p>
</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

