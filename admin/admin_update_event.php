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

<?php include 'admin_update_event_back.php';?>

<?php include 'shared_bar';?>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container"  style="width:860px;margin:0 auto; align-self: center">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post" style="align-self: center">
            <table style="width:80%" align="center" cellpadding="20px" border="10" >
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" style="width: 290px"class="form-control"/></td>
                    <td>TCIPG Industry Workshop 2014</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="text" name="date" style="width: 290px"class="form-control"/></td>
                    <td>2014-11-11</td>
                </tr>
                <tr>
                    <td>Start Time</td>
                    <td><input type="text" name="starttime" class="form-control"/></td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <td>End Time</td>
                    <td><input type="text" name="endtime" class="form-control"/></td>
                    <td>19:00</td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td><input type="text" name="location" class="form-control"/></td>
                    <td>iHotel and Conference Center, Champaign, IL</td>
                </tr>
                <tr>
                    <td>Sponsor</td>
                    <td><input type="text" name="sponsor" class="form-control"/></td>
                    <td>Computer Science Department</td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input type="text" name="contact" class="form-control"/></td>
                    <td>Piazza SVN</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" class="form-control"/></td>
                    <td>happy@illinois.edu</td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><input type="text" name="type" class="form-control"/></td>
                    <td>1/2/5/6/7<a href="http://flagwall.com">details</a></td>
                </tr>
                <tr>
                    <td>Registration</td>
                    <td><input type="text" name="registration" class="form-control"/></td>
                    <td>http://regist.illinois.edu/10101</td>
                </tr>
                <tr>
                    <td>Free-Food</td>
                    <td><input type="text" name="freefood" class="form-control"/></td>
                    <td>"1"(1 is yes, 0 is no)</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea rows="10" height="100" cols="100" type="text" name="description" class="form-control"/></textarea></td>
                    <td>The Trustworthy Cyber Infrastructure for the Power Grid (TCIPG) Annual Industry Worskhop will be held November 12-13, 2014 at the University of Illinois at Urbana-Champaign,with a welcome reception on the evening of November 11.For more information, see the TCIPG Industry Workshop website at http://tcipg.org/2014-tcipg-industry-workshop</td>
                </tr>
                <tr>
                    <td>Source</td>
                    <td><input type="text" name="source" class="form-control"/></td>
                    <td>http://illinois.edu/calendar/detail/504?eventId=31392553</td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td style="align-content: center">
                        <input type="submit" name="submit" value="Add Event" class="btn btn-default"/>
                    </td>
                </tr>

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