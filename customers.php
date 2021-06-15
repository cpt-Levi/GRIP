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
        <?php
            include 'config.php';
            $sql = "SELECT * FROM customer_data";
            $result = mysqli_query($connection, $sql);        
        ?>

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
                        <li class = "nav-item  active"><a class = "nav-link" href = "#"><span class = "fa fa-users "></span> Customers </a></li>
                        <li class = "nav-item"><a class = "nav-link" href = "./contactus.php"><span class = "fa fa-info-circle fa-lg"></span> Contact Us </a></li>
                        <li class = "nav-item"><a class = "nav-link" href = "./transactions.php"><span class = "fa fa-money fa-lg"></span> Transactions </a></li>
                    </ul>
                </div>
                <!--------------------------------------------------->
                <a role = "button" class = "btn btn-danger btn-lg" id = "transactionButton"><strong> Make a Transaction </strong></a>
                <!--------------------------------------------------->                
            </div>
        </nav>
        <!--------------------------------------------------->
        
        <div id = "transactionModal" class = "modal fade" role = "dialog">
            <div class = "modal-dialog modal-lg" role = "content">
                <div class = "modal-content">

                    <div class = "modal-header">
                        <h4 class = "modal-title">Make a transaction</h4>
                        <button type = "button" class = "close" data-dismiss = "modal">
                            &times;
                        </button>
                    </div>

                    <div class = "modal-body">
                        <form method = "post">
                            
                            <div class = "form-group row">
                                <label class = "col-sm-2 col-form-label">Sender</label>
                                <div class = "col-sm-6 offset-1">
                                    <select class = "custom-select" name = "SENDER" >

                                    <?php while($rows = mysqli_fetch_assoc($result)){ ?>
                                        <option value = "<?php echo $rows['Customer_Name'];?>">
                                           
                                        <?php echo $rows['Customer_Name']; ?>
                                        (Balance: <?php echo $rows['Balance']; ?> )

                                        </option>
                                    <?php } $result -> data_seek(0) ?>

                                    </select>
                                </div>
                            </div>

                            <div class = "form-group row">
                                <label class = "col-sm-2 col-form-label">Recepient</label>
                                <div class = "col-sm-6 offset-1">
                                    <select class = "custom-select" name = "RECEPIENT">

                                    <?php while($rows = mysqli_fetch_assoc($result)){ ?>
                                        <option value = "<?php echo $rows['Customer_Name'];?>">
                                           
                                           <?php echo $rows['Customer_Name']; ?>
                                           (Balance: <?php echo $rows['Balance']; ?> )
   
                                        </option>
                                    <?php } $result -> data_seek(0) ?>

                                    </select>
                                </div>
                            </div>

                            <div class = "form-group row">
                                <label class = "col-sm-2 col-form-label">Amount in <span class="fa fa-inr fa-lg"></span></label>
                                    <div class = "col-sm-6 offset-1">
                                        <input type = "number" name = "AMOUNT">
                                    </div>   
                            </div>

                                <div class = "offset-1 col-md-5">

                                    <button type = "submit" name = "submit" class = "btn btn-success">
                                        Confirm
                                    </button>
                                    <button type = "reset" class = "btn btn-danger" data-dismiss="modal">
                                        Cancel
                                    </button>

                                </div>   
                        </form>
                    </div>
                </div>
            </div>
        </div>

            <!--------------------------------------------------->
        
        <?php

        include 'config.php';
        
        if(isset($_POST['submit']))
        {
            $FROM = $_POST['SENDER'];
            $TO = $_POST['RECEPIENT'];
            $AMT = $_POST['AMOUNT'];

            $sql = "SELECT * FROM customer_data WHERE Customer_Name = '$FROM' ";
            $queryOne = mysqli_query($connection, $sql);
            $sqlONE = mysqli_fetch_assoc($queryOne);

            $sql = "SELECT * FROM customer_data WHERE Customer_Name = '$TO' ";
            $queryTwo = mysqli_query($connection, $sql);
            $sqlTWO = mysqli_fetch_assoc($queryTwo);

            if (($AMT) < 0)
            {
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Warning !!","Oops! Negative values cannot be transferred","warning")';
                echo '}, 600);</script>';
            }
         
            else if($AMT > $sqlONE['Balance']) 
            {
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Error !!","Bad Luck! Insufficient Balance","error")';
                echo '}, 600);</script>';
            }
             
            else if($AMT == 0)
            {
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Warning !!","Oops! Zero value cannot be transferred","warning")';
                echo '}, 600);</script>';
            }
        
            else 
            {           
                $newbalance = $sqlONE['Balance'] - $AMT;
                $sql = "UPDATE customer_data set Balance = $newbalance where Customer_Name = '$FROM' ";
                mysqli_query($connection, $sql);
            
                $newbalance = $sqlTWO['Balance'] + $AMT;
                $sql = "UPDATE customer_data set Balance = $newbalance where Customer_Name = '$TO' ";
                mysqli_query($connection, $sql);
                
                $sender = $sqlONE['Customer_Name'];
                $receiver = $sqlTWO['Customer_Name'];

                date_default_timezone_set('Asia/Kolkata');
                $timestamp = date('Y-m-d h:i:s');

                $sql = "INSERT INTO transactHistory(`Sender`, `Recepient`, `Amount`, `Date-Time`) VALUES ('$sender','$receiver','$AMT', '$timestamp')";
                $query = mysqli_query($connection, $sql);

                if($query)
                {
                    echo '<script type="text/javascript">';
                    echo 'setTimeout(function () 
                        { swal("Transaction Successful !!",
                            "Your have successfully sent money",
                            "success").then(function() 
                            {window.location = "transactions.php";});';
                    echo '}, 600);</script>';
                }
            
                $newbalance = 0;
                $AMT = 0;
            }
        }

        ?>

            <!--------------------------------------------------->

        <div class = "container" id = "table">
            <h2 class = "text-center"><b>CUSTOMERS OF TSF BANK</b></h2>
            <div class = "row">
                <div class = "col">
                    <div class = "table-responsive">
                        <table class = "table table-striped">
                            <thead class = "thead-dark">
                                <tr>
                                    <th class = "text-center">Customer Name</th>
                                    <th class = "text-center">Customer Email ID</th>
                                    <th class = "text-center">Customer Phone No.</th>
                                    <th class = "text-center">Balance</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                
                                while($rows = mysqli_fetch_assoc($result)){

                                ?>

                                <tr>
                                    <td class = "text-center"><?php echo $rows['Customer_Name'] ?></td>
                                    <td class = "text-center"><?php echo $rows['Customer_Email'] ?></td>
                                    <td class = "text-center"><?php echo $rows['Customer_Phone'] ?></td>
                                    <td class = "text-center"><?php echo $rows['Balance'] ?></td>
                                </tr>

                                <?php
                                
                                }

                                ?>
                                
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>


            <!--------------------------------------------------->

        <footer class = "footer">
            <div class = "container-fluid">
                <div class = "row">
                    <!--------------------------------------------------->
                    <div class = "col-4 offset-1 col-sm-2">
                        <h5>Links</h5>
                        <ul class = "list-unstyled">
                            <li><a href = "./index.php">Home</a></li>
                            <li><a href = "#">Customers</a></li>
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

        <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
        <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="node_modules/sweetalert/dist/sweetalert.min.js"></script>

        <script>
            $(document).ready(function(){
                $('#transactionButton').click(function(){
                    $('#transactionModal').modal('toggle')
                })
            })
        </script>

    </body>
</html>