<!DOCTYPE html>
<html>
    <head>
        <title>
            Page Title
        </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
    </head>
    <body style="padding-top: 60px">
        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">CMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/product">Products
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/add">ADD New Products</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>



        @yield('content')

        <p> all copy right to Ali Labib</p>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
