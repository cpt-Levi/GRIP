<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
        <link rel="stylesheet" href="style.css">

        <title>TSF Bank</title>
    </head>
    <body>

        <!--Navigation Bar-->
        <nav class = "navbar navbar-dark navbar-expand-sm fixed-top">
            <div class = "container-fluid">
                <!--------------------------------------------------->
                <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#Navbar">  <!--Collapsable Navigation Bar-->
                    <span class = "navbar-toggler-icon"></span>
                </button>
                <!--------------------------------------------------->
                <a class = "navbar-brand mr-auto" href = "index.php">
                    <img src = "logo2.png" height = "100" width = "110">
                </a>
                <!--------------------------------------------------->
                <div class = "collapse navbar-collapse" id = "Navbar">
                    <ul class = "navbar-nav mr-auto">
                        <li class = "nav-item active"><a class = "nav-link" href = "#"><span class="fa fa-home fa-lg"></span> Home </a></li>
                        <li class = "nav-item"><a class = "nav-link" href = "./customers.php"><span class = "fa fa-users "></span> Customers </a></li>
                        <li class = "nav-item"><a class = "nav-link" href = "./contactus.php"><span class = "fa fa-info-circle fa-lg"></span> Contact Us </a></li>
                        <li class = "nav-item"><a class = "nav-link" href = "./transactions.php"><span class = "fa fa-money fa-lg"></span> Transactions </a></li>
                    </ul>
                </div>
                <!--------------------------------------------------->
                
                <!--------------------------------------------------->                
            </div>
        </nav>
        <!--------------------------------------------------->
        <header class = "jumbotron">
            <div class = "container">
                <div class = "row row-header">
                    <div class = "col-12">
                        <h1>The Sparks Foundation Bank</h1>
                    </div>
                </div>
                <!--------------------------------------------------->
                <div class = "row row-header">
                    
                    <div class = "col-12 col-sm-4">
                        <h3> Who Are We ?</h3>
                        <p>TSF Bank is one of India’s leading private banks and was among the first to receive approval from the Reserve Bank of India (RBI) to set up a private sector bank in 2001.</p>
                        <p>Today, TSF Bank has a banking network of 5,023 branches and 11,517 ATM's in 2,103 cities/towns.</p>
                    </div>
                
                    <div class = "col-12 col-sm-4">
                        <h3> What We Do ?</h3>
                        <p>TSF Bank caters to a wide range of banking services covering commercial and investment banking on the wholesale side and transactional / branch banking on the retail side. <br>The bank has three key business segments:</p>
                        <p><strong>Wholesale Banking</strong></p>
                        <p><strong>Treasury</strong></p>
                        <p><Strong>Retail Banking</Strong></p>
                    </div>
                    
                    <div class = "col-12 col-sm-4">
                        <h3>Our Vision</h3>
                        <p>TSF Bank began operations in 2005 with a simple mission: to be a "World-class Bank". We realised that only a single-minded focus on product quality and service excellence would help us get there. Today, we are proud to say that we are well on our way towards that goal.</p>
                        <p>It is extremely gratifying that our efforts towards providing customer convenience have been appreciated both nationally and internationally.</p>
                    </div>

                </div>
                <!--------------------------------------------------->
            </div>
        </header>
        
        <!--------------------------------------------------->
        <div class = "container">
            <div class = "row row-content">
                <div class = "col-12">
                    <h1>Our Principles</h1>
                </div>
            </div>  

                <!--------------------------------------------------->
                <div class = "row row-content">
                    <div class = "col-6 col-sm-2">
                        <i class = "fa fa-trophy fa-5x"></i>
                        <p id = "principles">Excellence</p>
                    </div>
                    <div class = "col-6 col-sm-2">
                        <i class = "fa fa-handshake-o fa-5x"></i>
                        <p id = "principles">Trust</p>
                    </div>   
                    <div class = "col-6 col-sm-2">
                        <i class = "fa fa-users fa-5x"></i>
                        <p id = "principles">Customer Satisfaction</p>
                    </div>   
                    <div class = "col-6 col-sm-2">
                        <i class = "fa fa-search fa-5x"></i>
                        <p id = "principles">Customer Focus</p>
                    </div>   
                    <div class = "col-6 col-sm-2">
                        <i class = "fa fa-lock fa-5x"></i>
                        <p id = "principles">Security</p>
                    </div>   
                    <div class = "col-6 col-sm-2">
                        <i class = "fa fa-clock-o fa-5x"></i>
                        <p id = "principles">Readiness</p>
                    </div>                     
                </div>
                <!--------------------------------------------------->
        </div>
        <!--------------------------------------------------->

        <footer class = "footer">
            <div class = "container-fluid">
                <div class = "row">
                    <!--------------------------------------------------->
                    <div class = "col-4 offset-1 col-sm-2">
                        <h5>Links</h5>
                        <ul class = "list-unstyled">
                            <li><a href = "#">Home</a></li>
                            <li><a href = "./customers.php">Customers</a></li>
                            <li><a href = "./contactus.php">Contact us</a></li>
                            <li><a href = "./transactions.php">Transactions</a></li>
                        </ul>
                    </div>
                    <!--------------------------------------------------->
                    <div class = "col-4 col-sm-4">
                        <h5>Our Address</h5>
                        <address>
                          C821, GSK Road <br>
                          Santacruz, Mumbai-091<br>
                          INDIA<br>
                          <i class = "fa fa-phone fa-lg"></i> : +020 8569 3410<br>
                          <i class = "fa fa-fax fa-lg"></i> : +020 4575 2032<br>
                          <i class = "fa fa-envelope fa-lg"></i> : <a href="mailto:swapchhatre5@gmail.com">contact@tsfbank.in</a>
                       </address>
                    </div>
                    <!--------------------------------------------------->
                    <div class = "col-4 col-sm-4 text-center">
                        <h5>Developer : Swapnil Chhatre</h5>
                            <a id = "link-items" href = "https://github.com/cpt-Levi"><i class = "fa fa-github fa-5x"></i></a>
                            <a id = "link-items" href = "https://www.linkedin.com/in/swapnil-chhatre-221159162/"><i class = "fa fa-linkedin fa-5x"></i></a>
                            <a id = "link-items" href = "https://www.instagram.com/swapnil._.chhatre/"><i class = "fa fa-instagram fa-5x"></i></a>
                            <a id = "link-items" href = "https://www.facebook.com/swapnil.chhatre"><i class = "fa fa-facebook-square fa-5x"></i></a>
                    </div>


                </div>
            </div>
        </footer>

        <!--------------------------------------------------->
        <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
        <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function(){
                $('#transactionButton').click(function(){
                    $('#transactionModal').modal('toggle')
                })
            })
        </script>


<!-- The core Firebase JS SDK is always required and must be listed first
<script src="/__/firebase/8.6.7/firebase-app.js"></script> -->

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<!-- <script src="/__/firebase/8.6.7/firebase-analytics.js"></script> -->

<!-- Initialize Firebase -->
<!-- <script src="/__/firebase/init.js"></script> -->


    </body>
</html>