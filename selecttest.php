<?php
    ob_start();
    session_start();
    include("database.php");
    include ("Files/Top2.php");
   
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
                $_SESSION['user'] = $row['Sno'];
                header("Location: home.php");
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
    <title>Careers Way</title>
    <!-- main css ../-->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <center>
    <table border="1">
        </tr>
        <tr><td>
<!--================ Start Registration Area =================-->
      
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

</td></tr>
</table>
</center>
</body>
</html>