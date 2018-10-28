<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="An application designed to provide convenience in finding washrooms">
    <meta name="author" content="Feng Xiao Yue">

    <title>ToiletBook</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">
    <link href="css/new-age.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">ToiletBook</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#page-top">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#register">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   
    <header class="betahead">
      <div class="container h-100">
          <div class="row h-100">
          <div class="col-lg-12 my-auto">
              <div class="header-content mx-auto">
              <h1 class="mb-5">
                  The Beta Program
              </h1>
              <p>
                ToiletBook can potentially help millions and improve overall convenience and sanitation. Currently we're just a very small team of developers.
                Parts of the project are still in rough progress – from development, to seed data, and even financial sustainability.
              </p>
              <p>
                This beta program is designed to enrich contributors in valuable work experience as well as allow them to be part of the social good this project aims to be part of.
              </p>
              <a href="#register" class="btn btn-outline btn-xl js-scroll-trigger">Sign Up</a>
              </div>
          </div>
          </div>
      </div>
    </header>

    <section class="form" id="register">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-6 offset-lg-3 col-12 my-auto">
            <div class="mx-auto">
              <h1>Registration</h1>
              <form id="beta-register">
                <div class="row">
                    <div class="form-group col-lg-6">
                    <label for="">Name</label>
                    <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="">Email</label>
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                  <label for="">Position</label>
                  <select class="form-control">
                    <option selected>Choose one</option>
                    <option value="">iOS Developer</option>
                    <option value="">Android Developer</option>
                    <option value="">Data Encoder</option>
                    <option value="">Graphic Designer</option>
                    <option value="">Business Dev Associate</option>
                  </select>
                  </div>
                  <div class="form-group col-lg-6">
                  <label for="">Resume</label>
                  <input type="file" class="form-control" name="" id="">
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-lg-12">
                  <label for="">In a short summary, explain why you want to contribute</label>
                  <textarea class="form-control" name="" id="" rows="4"></textarea>
                </div>
                </div>
                <div class="row">
                  
                  <div class="form-group col-lg-6 button">
                    <button class="btn btn-xl btn-outline-secondary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>&copy; ToiletBook 2018. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/new-age.min.js"></script>

  </body>

</html>