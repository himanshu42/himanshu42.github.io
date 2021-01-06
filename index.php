<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS\style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<!---------------------------------------NAVBAR----------------------------------------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DEMO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!---------------------------------------Carousel----------------------------------------------------------------------------------->

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\Carousel1.jpg" alt="Los Angeles">
      <div class="carousel-caption">
          <h3>POSTER 1</h3>
          <p>shgfudshgsdfhgjlksdfghshgsfdhgskl<br>ghsdlkhglsdhgshgolsdjgsdg</p>
</div>
    </div>
    <div class="carousel-item">
      <img src="images\Carousel2.jpg" alt="Chicago">
      <div class="carousel-caption">
          <h3>POSTER 2</h3>
          <p>shgfudshgsdfhgjlksdfghshgsfdhgskl<br>ghsdlkhglsdhgshgolsdjgsdg</p>
</div>
    </div>
    <div class="carousel-item">
      <img src="images\Carousel3.PNG" alt="New York">
      <div class="carousel-caption">
          <h3>POSTER 3</h3>
          <p>shgfudshgsdfhgjlksdfghshgsfdhgskl<br>ghsdlkhglsdhgshgolsdjgsdg</p>
</div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<!---------------------------------------------------------Welcome-------------------------------------------------------------------->
<section class="my-5">
    <div>
        <h1 class="text-center">Welcome</h1>
        <p class="text-center my-5">This is my demo website</p>
</div>


<!----------------------------------------------------------Progress bar-------------------------------------------------------->
<div class="w-50 ml-3"> 
<div>
    <h3 class="py-3 ">HTML</h3>
</div>

<div class="progress">
  <div class="progress-bar" style="width:80%"></div>
</div>
<div>
    <h3 class="py-3">CSS</h3>
</div>

<div class="progress">
  <div class="progress-bar" style="width:60%"></div>
</div>
<div>
    <h3 class="py-3">BOOTSTRAP</h3>
</div>

<div class="progress">
  <div class="progress-bar" style="width:50%"></div>
</div> 
</div>
</section>
<!----------------------------------------------------------------------------------------------------------------------------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>