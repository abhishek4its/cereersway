<?php
    ob_start();
    session_start();
    include("database.php");
    include ("Files/Top2.php");

    // if session is not set this will redirect to login page
  if( !isset($_SESSION['user']) ) {
    header("Location: index.php");
    exit;
  }
  // select loggedin users detail
  $res=mysqli_query($con, "SELECT * FROM candidates WHERE Sno=".$_SESSION['user']);
  $userRow=mysqli_fetch_array($res);
  $unm    =$userRow['CandidateName'];
  $eml    =$userRow['EmailId'];
  $testid   =$userRow['TpcID'];
  $branch   =$userRow['Branch'];

     $res2=mysqli_query($con, "SELECT TestCode FROM answerkeytwenty WHERE id=".$_SESSION['testkey']);
  $userRow2=mysqli_fetch_array($res2);
  $testcode   =$userRow2['TestCode'];
?>
<html class=" js no-touch" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Gehu Assessment</title>
	<link rel="shortcut icon" href="img/logo.jpg" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            Welcome <font size=6><?php echo $unm; ?></font>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="logout.php?logout" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $eml; ?>   &nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 
	 

	<div id="wrapper">

	<div class="container">
    
    	<div class="page-header">
    	<br><br>
    	<h3> Please select your test</h3>
    	</div>
        <div class="row">
        <div class="col-lg-12">
        </h1>
<!--        <script src="test.js"></script>-->
       <a href="Test/TwentyQns/index.php">Start</a>
	<a href="home.php?logout">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-log-out"></span>&nbsp;Change Test</a>
	
		
<?php ob_end_flush(); ?>