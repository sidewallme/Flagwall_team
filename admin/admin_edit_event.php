<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>FlagWall - Illinois Event Recommendation system</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php include 'shared_bar.php';?>




<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container"  style="width:90%;margin:0 auto; align-self: center">
        <form style="align-self: center" name="search" action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input  style="width: 300px; display: inline" width="40px" type="text" name="s_name" class="form-control" placeholder="Event KeyWord">
            <button class="btn btn-primary" style="display: inline" type="submit" name="search" value="search">Search</button>
        </form>
        <p></p>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post" style="align-self: center">
            <table id="myTable" class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Time</th>
                    <th>Location</th>
                    <th>View</th>
                </tr>
                </thead>
                <tbody>
                <!--GENERATORS!!!!!!-->
                <?php

                    include 'admin_edit_event_back.php';

                ?>

                </tbody>
            </table>


        </form>
    </div>
</div>


<div class="container">
    <!-- Example row of columns -->

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>