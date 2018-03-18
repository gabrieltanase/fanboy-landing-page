<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Oswald:400,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

        <link rel="stylesheet" href="./css/main.css">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <title>Fanboy App</title>
    </head>
    <body>  
        <?php require 'connection.php'; ?>
            <?php echo "<h1>Hello, PHP-7!</h1>"; ?>

        <!-- Header  -->
        <header class="navbar navbar-expand-lg navbar-light bg-white">
            <a  class="navbar-brand" href="#">
                <img class="img-fluid" src="./img/nav_logo.png" alt="Fanboy Logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarTogglerDemo01"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <nav class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link">Playstation 3</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Xbox</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">PC</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Nintendo</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Kontakt</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main role="main">
            <!-- Banner -->
            <section class="banner jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Tilmeld dig vores nyhedsbrev i dag.</h1>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#subscribeModal">Tilmeld</button>
                </div>
            </section>

            <!-- Products -->
            <div class="py-5 bg-white">
                <div class="container products">
                    <div class="row">
                        <div class="col-xl-3 col-lg-12">
                            <div class="card mb-4">
                                <img class="card-img-top" src="https://i.ytimg.com/vi/N6CWue7voA0/maxresdefault.jpg" alt="Ilidan Stormrage">

                                <div class="card-body">
                                    <h6 class="text-muted">Playstation 4</h6>
                                    <h4 class="card-text">Dark Souls 3</h4>
                                    <span class="price">255,-</span>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-primary">Tilføj til kurv</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12">
                            <div class="card mb-4">
                                <img class="card-img-top" src="https://i.ytimg.com/vi/N6CWue7voA0/maxresdefault.jpg" alt="Ilidan Stormrage">

                                <div class="card-body">
                                    <h6 class="text-muted">Playstation 4</h6>
                                    <h4 class="card-text">Dark Souls 3</h4>
                                    <span class="price">255,-</span>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-primary">Tilføj til kurv</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12">
                            <div class="card mb-4">
                                <img class="card-img-top" src="https://i.ytimg.com/vi/N6CWue7voA0/maxresdefault.jpg" alt="Ilidan Stormrage">

                                <div class="card-body">
                                    <h6 class="text-muted">Playstation 4</h6>
                                    <h4 class="card-text">Dark Souls 3</h4>
                                    <span class="price">255,-</span>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-primary">Tilføj til kurv</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12">
                            <div class="card mb-4">
                                <img class="card-img-top" src="https://i.ytimg.com/vi/N6CWue7voA0/maxresdefault.jpg" alt="Ilidan Stormrage">

                                <div class="card-body">
                                    <h6 class="text-muted">Playstation 4</h6>
                                    <h4 class="card-text">Dark Souls 3</h4>
                                    <span class="price">255,-</span>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-primary">Tilføj til kurv</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- END Products -->

            <div><?php echo($test);?></div>

            <!-- PROMO -->
            <section class="promo jumbotron">
                <div class="container sales">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 d-flex justify-content-lg-center justify-content-md-center">
                            <div class="img-container">
                                <div class="circle">
                                    <span><small>SPAR</small><br><strong>50%</strong></span>
                                </div>
                                <img class="img-fluid" src="./img/dell.jpg" alt="pc">
                            </div>
                        </div>
                        <div class="description col-xl-6 col-lg-12">
                            <h3>Video Games Playing With Imagination</h3>
                            <p class="lead">The ﬁrst is a non technical method which requires the use of adware removal software. Download free adware and spyware removal software and use advanced tools to help prevent getting infected. Spyware scan review is a free service for anyone interested in downloading spyware/adware removal software. </p>
                            <p class="lead">Our adware remover is the most trusted adware removal software in the world. Additionally, adware operations are increasingly asking that their software no longer be uninstalled by adware/spyware removal companies.  Download and run an adware or spyware removal program. </p>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <!-- Modal -->
        <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body d-flex justify-content-center flex-wrap">
                        <h3 class="modal-title" id="subscribeModalLabel">Tilmeld dig vores nyhedsbrev i dag.</h3>
                        <form action="" class="d-inline-flex flex-row">
                            <input type="email" placeholder="Indtast e-mail" requred>
                            <button action="submit" onclick="">Tilmeld</button>
                        </form>
                </div>
            </div>
      </div>


        <!-- SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    </body>
</html>
