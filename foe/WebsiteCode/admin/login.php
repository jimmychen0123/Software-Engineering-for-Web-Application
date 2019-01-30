<?php
require '../app/src/loginValidation.php';
?>
<!--specify to web browser that html version 5 used-->
<!DOCTYPE html>
<!-- contents language set to English -->
<html lang="en">
<head>
  <!-- standard UTF-8 character encoding specified-->
  <meta charset="UTF-8" />
  <!--Mobile display-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--page title. Can bee seen on the browser tab-->
  <title>Login</title>
  <!--links to bootstrap reboot (reset.css) css files-->
  <link rel="stylesheet" href="../css/bootstrap-reboot.css" />
  <!--link to bootstrap css -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <!--link to local css file-->
  <link rel="stylesheet" href="../css/style.css" />
  <!--google font-->
  <!--note the pipe in the url cause the html validator to flag href-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Jquery scripts-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!--Bootstrap Script-->
  <script src="../scripts/bootstrap.min.js"></script>
  <!--script used in header-->
  <script src="../scripts/header.js"></script>
  <!--popper scripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
</head>

<body>
<!--Bootstrap 4 also requires a containing element to wrap site contents.-->
<!--The .container class provides a responsive fixed width container-->
<div class="container">
  <main>
<!-- login header -->
      <header class="row">
          <div class="col-12 col-md-3 d-flex justify-content-center">
              <img class="" src="../images/Friends_of_the_Earth_(logo).png" alt="logo">
          </div>
          <div class="col-12 col-md-9 d-flex align-items-center justify-content-center">
              <h2 class="text-center">A Sustainable Ireland In A Just World</h2>
          </div>
      </header>
<!-- heading in login page     -->
      <h1 class="text-center">Please sign in</h1>
<!--login form section -->
      <section class="row d-flex justify-content-center mt-3">
          <div class="col-md-4">
              <!--Information sent from a form with the POST method is invisible to others -->
              <!--the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page.
              This way, the user will get error messages on the same page as the form.-->
              <!--The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;.
              This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.-->
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form" >
                  <!--username field error message -->
                  <span class="error"><?php echo $usernameErr;?></span>
<!--username form-->
                  <div class="form-group">
                      <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                  </div>
                  <!--password field error message -->
                  <span class="error"><?php echo $passwordErr;?></span>
<!--password form-->
                  <div class="form-group">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                  </div>
<!--submit button-->
                  <button class="btn btn-lg btn-block signIn" type="submit">Sign in</button>
              </form>
              <!-- login error message             -->
              <span class="error"><?php echo $loginErr;?></span>
              <span class="error"><?php echo $login;?></span>
          </div>
      </section>
  </main>
</div>
</body>
</html>
