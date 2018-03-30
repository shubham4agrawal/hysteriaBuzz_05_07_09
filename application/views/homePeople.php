<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap-3.3.7/dist/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>assets/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    
     <!-- online CDN links  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>HysteriaBuzz</title>

    <!-- NAV BAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><img src="images/logo.png" width="40" height="35"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Competitions
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Performing Arts</a>
                    <a class="dropdown-item" href="#">Literary Arts</a>
                    <a class="dropdown-item" href="#">Fine Arts</a>
                    <a class="dropdown-item" href="#">LAN Gaming</a>
                    <a class="dropdown-item" href="#">Athletics</a>
                    <a class="dropdown-item" href="#">Photography</a>
                    <!-- <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" href="#">Mega and Fun Events</a>

                  </div>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Schedule</a>
                </li> -->

                <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>main/registrationPeople">Registration</a>
               </li>  

                <li class="nav-item">
                        <a class="nav-link" href="#">Photos</a>
                </li>

                <li class="nav-item">
                        <a class="nav-link" href="#">Videos</a>
                      </li>

                <li class="nav-item">
                         <a class="nav-link" href="#">Student Council</a>
                </li>   

                <li class="nav-item">
                         <a class="nav-link" href="#">Sponsors</a>
                </li>    
                
                <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
               </li>  

              </ul>
              
            </div>
          </nav>


</head>
<body>
       

              <!-- Slider Code -->
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                            <div class="jumbotron">
                                    <h1 class="display-4">Hello, world!</h1>
                                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                    <hr class="my-4">
                                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                                    <p class="lead">
                                      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                                    </p>
                                  </div>
                      </div>
                      <div class="carousel-item">
                            <div class="jumbotron">
                                    <h1 class="display-4">Hello, world!</h1>
                                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                    <hr class="my-4">
                                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                                    <p class="lead">
                                      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                                    </p>
                                  </div>
                      </div>
                      <div class="carousel-item">
                            <div class="jumbotron">
                                    <h1 class="display-4">Hello, world!</h1>
                                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                    <hr class="my-4">
                                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                                    <p class="lead">
                                      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                                    </p>
                                  </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
</body>
</html>