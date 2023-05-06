<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title></title>
</head>
<style>
    img{
        object-fit: contain;
        height: 50px;
    }

    a{
        text-decoration: none;
        color: black;
    }
    a:hover{
        color: crimson;
    }
    ::-webkit-scrollbar{
        display: none;
    }
</style>
<body>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="website.html">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav><br><br><br><br>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-150">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/640px-HTML5_logo_and_wordmark.svg.png" class="card-img-top" alt="picture" style="width: 100%;">
            <div class="card-body">
              <h5 class="card-title"><a href="https://www.w3schools.com/html/">HTML</a></h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/1452px-CSS3_logo_and_wordmark.svg.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://www.w3schools.com/css/">CSS</a></h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://w7.pngwing.com/pngs/640/199/png-transparent-javascript-logo-html-javascript-logo-angle-text-rectangle-thumbnail.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://www.w3schools.com/js/DEFAULT.asp">JAVA SCRIPT</a></h5>
            </div>
          </div>
        </div>
      </div><br>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://www.w3schools.com/php/">PHP</a></h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9OAgVwCiOtXLWcx3KSzZKVu_8SZVK0Vj8UlyNBfSh&s" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/">BOOTSTRAP</a></h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlXKw96aAckZmHh6V7MSpTTHjdtPzMMPgjriSu_M-h4ZUHc30k3K2ZHqsfipPyCQz5w3Y&usqp=CAU" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="https://www.w3schools.com/jquery/default.asp">JQUERY</a></h5>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
