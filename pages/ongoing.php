<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CrowdZeus</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Welcome </a>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Analytics<span class="fa arrow"></span></a>
                           
    
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> On going Projects</a>
                        </li>
                        <li>
                            <a href="tweets.html"><i class="fa fa-edit fa-fw"></i> Social Media</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> My Profile</span></a>
                        </li>
                        <li>
                            <a href="payinfo.html"><i class="fa fa-sitemap fa-fw"></i> Payment Info</span></a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Logout<span class="fa arrow"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper" style="padding-top: 10px;" id="body">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" id="ProName">Project Name</h1>
                </div>
                <!-- /.col-lg-12 -->
             </div>
              <div class="row">
                <div class="col-lg-12">
                    <h4 id="desc">Description</h4>
                </div>
                <!-- /.col-lg-12 -->
             </div>
             <div class="row">
                <div class="col-lg-12">
                    <h2 id="check">Checkpoints</h2>
                </div>
                <!-- /.col-lg-12 -->
             </div>
             <div class="row">
                <div class="col-lg-12">
                    <h4 id="cdesc">Description</h4>
                </div>
                <!-- /.col-lg-12 -->
             </div>
              <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Your Project Rating</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Area Chart Example
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>


            <div class="row">
            <form action="charge.php?p=<?PHP echo $_GET['p']?>" method="POST">
              <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_Yn92oCfZDdHYyzwTgSWaggN4"
                data-amount="2000"
                data-name="Demo Site"
                data-description="2 widgets ($2000.00)"
                data-label="Pay with Card or Bitcoin"
                data-locale="auto"
                data-currency="usd"
                data-bitcoin="true">
              </script>
              <div class="row" style="padding-top: 30px;">
                <div class="col-lg-4"></div>

                    <div class="col-lg-3">
                <button type="submit" class="btn btn-default"><a href="eventsFinal.html">Participate</a></button>
                </div>
            </div>
            </form>
            
            </div>




        </div>
        <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
         <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>
        <script type="text/javascript" src="fullpro.js"></script>
</div>
 </body>
 </html>