<?php
require('./payment-process.php');
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Guide_Me | Admin Payment Manage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="css/morris.css" type="text/css"/>
        <!-- Graph CSS -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- jQuery -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- //jQuery -->
        <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- lined-icons -->
        <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
        <!-- //lined-icons -->
        <!-- tables -->
        <link rel="stylesheet" type="text/css" href="css/table-style.css" />
        <link rel="stylesheet" type="text/css" href="css/basictable.css" />
        <script type="text/javascript" src="js/jquery.basictable.min.js"></script>        
        <script type="text/javascript">

        </script>
        <!-- //tables -->
    </head>
    <body>
        <div class="page-container">
            <!--/content-inner-->
            <div class="left-content">
                <div class="mother-grid-inner">
                    <!--header start here-->
                    <?php include('includes/header.php'); ?>
                    <div class="clearfix"> </div>    
                </div>
                <!--heder end here-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Payments</li>
                </ol> 
                <!--four-grids here-->
                <div class="four-grids">
                    <div class="col-md-3 four-grid">
                        <div class="four-agileits">
                            <div class="icon">
                                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                            </div>
                            <div class="four-text">
                                <h3>Total Payments</h3>
                                <h4><?php echo calculateTotalPayments($paymentData); ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <form id="monthForm" method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
                    <div class="monthselect" style="text-align: right;">
                        <label for="focusedinput">Months:</label>
                        <select name="selectedMonth" class="form-select right-align">
                            <?php
                            $months = [
                                1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
                                5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
                                9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
                            ];

                            foreach ($months as $monthNum => $monthName) {
                                $selected = ($selectedMonth == $monthNum) ? 'selected' : '';
                                echo "<option value=\"$monthNum\" $selected>$monthName</option>";
                            }
                            ?>

                        </select>
                        <input type="submit" value="Submit">
                    </div>
                </form>
                <div class="inner-block">
                    <div class="agile-tables">
                        <div class="w3l-table-info">
                            <h2>Transaction Details</h2>
                            <table id="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Transaction ID</th>
                                        <th>Sender</th>
                                        <th>Receiver </th>
                                        <th>Type</th>
                                        <th>Payment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($paymentData)) {
                                        $cnt = 1;
                                        foreach ($paymentData as $result) {
                                            ?>
                                            <tr>
                                                <td><?php echo htmlentities($cnt); ?></td>
                                                <td><?php echo htmlentities($result['transaction_id']); ?></td>
                                                <td><?php echo htmlentities($result['sender']); ?></td>
                                                <td>
                                                    <?php echo htmlentities($result['payment_to']); ?>
                                                </td>
                                                <td><?php echo htmlentities($result['reciever_type']); ?></td>


                                                <td><?php echo htmlentities($result['price']); ?></td>
                                            </tr>
                                            <?php
                                            $cnt++;
                                        }
                                    } else {
                                        echo '<tr><td colspan="6">No data available</td></tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--inner block end here-->
                <!--copy rights start here-->
<?php include('includes/footer.php'); ?>
            </div>
        </div>

        <!--/sidebar-menu-->
<?php include('includes/sidebarmenu.php'); ?>
        <div class="clearfix"></div>		
    </div>
    <script>
        var toggle = true;

        $(".sidebar-icon").click(function () {
            if (toggle)
            {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({"position": "absolute"});
            } else
            {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function () {
                    $("#menu span").css({"position": "relative"});
                }, 400);
            }

            toggle = !toggle;
        });
    </script>
    <!--js -->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>

