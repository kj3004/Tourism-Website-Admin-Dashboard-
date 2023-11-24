<?php
require_once('./Classes/ContactUsController.php');
require_once('./Classes/EmailUpdateManager.php');
include('includes/config.php');

session_start();
error_reporting(0);

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
    exit();
}

$contactus = new ContactUsController($dbh);
$enquiries = $contactus->getEnquiries();
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Guide_Me | Admin Manage Contact_Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> 
        addEventListener("load", function() { 
            setTimeout(hideURLbar, 0); 
        }, false); 
        function hideURLbar() { 
            window.scrollTo(0,1); 
        } 
    </script>
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/morris.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <script src="js/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/table-style.css" />
    <link rel="stylesheet" type="text/css" href="css/basictable.css" />
    <script type="text/javascript" src="js/jquery.basictable.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').basictable();
            // ... (rest of your script)
        });
    </script>
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
        .succWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
    </style>
</head> 
<body>
    <div class="page-container">
        <div class="left-content">
            <div class="mother-grid-inner">
                <?php include('includes/header.php');?>
                <div class="clearfix"> </div>	
            </div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Manage Inquiries</li>
            </ol>
            <div class="agile-grids">	
                <?php if(isset($error) && $error != ''): ?>
                    <div class="errorWrap"><strong>ERROR</strong>: <?php echo htmlentities($error); ?> </div>
                <?php elseif(isset($msg) && $msg != ''): ?>
                    <div class="succWrap"><strong>SUCCESS</strong>: <?php echo htmlentities($msg); ?> </div>
                <?php endif; ?>
                <div class="agile-tables">
                    <div class="w3l-table-info">
                        <h2>Manage Inquiries</h2>
                        <table id="table">
                            <thead>
                                <tr>
                                    <th>Enquiry id</th>
                                    <th>Name</th>
                                    <th>Mobile No./ Email</th>
                                    <th>Subject</th>
                                    <th>Description</th>
                                    <th>Posting date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($enquiries as $result): ?>
                                    <tr>
                                        <td width="120"><?php echo htmlentities($result->enq_id );?></td>
                                        <td width="50"><?php echo htmlentities($result->name);?></td>
                                        <td width="50"><?php echo htmlentities($result->mobile_num);?> /<br /><?php echo $result->email;?></td>
                                        <td width="200"><?php echo htmlentities($result->subject);?></td>
                                        <td width="400"><?php echo htmlentities($result->description);?></td>
                                        <td width="50"><?php echo htmlentities($result->posting_date);?></td>
                                        <?php if($result->Status==1): ?>
                                            <td>Read</td>
                                        <?php else: ?>
                                            <td><a href="email-reply.php?eid=<?php echo htmlentities($result->enq_id);?>" onclick="return confirm('Do you really want to reply?')">Reply Now !</a></td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="inner-block">
                <!-- Additional inner block content if needed -->
            </div>
            <?php include('includes/footer.php');?>
        </div>
    </div>
    <?php include('includes/sidebarmenu.php');?>
    <div class="clearfix"></div>		
    <script>
        var toggle = true;
        $(".sidebar-icon").click(function() {                
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({"position":"absolute"});
            } else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                    $("#menu span").css({"position":"relative"});
                }, 400);
            }
            toggle = !toggle;
        });
    </script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
