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
   
    $error = false;
    if( isset($_POST['btn-login']) ) {  
        // prevent sql injections/ clear user invalid inputs
        $emailemail = trim($_POST['emailemail']);
        $emailemail = strip_tags($emailemail);
        $emailemail = htmlspecialchars($emailemail);
        // prevent sql injections / clear user invalid inputs
        if(empty($emailemail)){
            $error = true;
            $emailemailError = "Please enter Test Id.";
        }
        // if there's no error, continue to login
        if (!$error) {
            $res=mysqli_query($con, "SELECT * FROM answerkeytwenty WHERE TestCode='$emailemail'");
            $row=mysqli_fetch_array($res);
            $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
            if( $count == 1 ) {
                $_SESSION['testkey'] = $row['id'];
                header("Location: secondhome.php");
            } else {
                $errMSG = "Incorrect Credentials, Try again...";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="css/style.css" type="text/css" />
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
    <center>
 
<!--================ Start Registration Area =================-->
      <br><br>
                <div class="col-lg-4 offset-lg-1">
            <div class="register_form">
              <h3>Test Login</h3>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                <div class="row">
                  <div class="col-lg-12 form_group">
                    <?php
            if ( isset($errMSG) ) {
                ?>
                <div class="form-group">
                <div class="alert alert-danger">
                <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
                </div>
                <?php
            }
            ?>
                <input name="emailemail" placeholder="Test Id"  maxlength="40" type="text"/>
                <span class="text-danger"><?php echo $emailemailError; ?></span>
                  </div>
                  <div class="col-lg-12 text-center">
                    <button class="primary-btn" name="btn-login">Search Test</button>
                  </div>
                 
                </div>
              </form>
            </div>
</div>
</td></tr>
</table>
</center>
</body>
</html>
<?php ob_end_flush(); ?>