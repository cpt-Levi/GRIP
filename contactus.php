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
                        <li class = "nav-item"><a class = "nav-link" href = "./index.php"><span class="fa fa-home fa-lg"></span> Home </a></li>
                        <li class = "nav-item"><a class = "nav-link" href = "./customers.php"><span class = "fa fa-users "></span> Customers </a></li>
                        <li class = "nav-item active"><a class = "nav-link" href = "#"><span class = "fa fa-info-circle fa-lg"></span> Contact Us </a></li>
                        <li class = "nav-item"><a class = "nav-link" href = "./transactions.php"><span class = "fa fa-money fa-lg"></span> Transactions </a></li>
                    </ul>
                </div>
                <!--------------------------------------------------->
                
                <!--------------------------------------------------->                
            </div>
        </nav>
        <!--------------------------------------------------->



        <!--------------------------------------------------->
        <footer class = "footer">
            <div class = "container-fluid">
                <div class = "row">
                    <!--------------------------------------------------->
                    <div class = "col-4 offset-1 col-sm-2">
                        <h5>Links</h5>
                        <ul class = "list-unstyled">
                            <li><a href = "./index.html">Home</a></li>
                            <li><a href = "#">Customers</a></li>
                            <li><a href = "#">Contact us</a></li>
                            <li><a href = "#">Transactions</a></li>
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

    </body>
</html>