<?php include('server.php'); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>HealthCare Chatbot</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/login.css" rel="stylesheet">
</head>
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column smooth-scroll">
    <header class="masthead mb-auto">
      <div class="inner container-fluid">
        <nav class="navbar navbar-expand-lg navbar-default navbar-dark">

        

          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto">
          
              <li class="nav-item">
                <a class="nav-link" href="index.php#">Home</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="index.php#contact">About us</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="register.php#login">Register</a>
              </li>
            </ul>
          </div>
        </nav>

      </div>
    </header>
<body class="text-center">
  <form class="form-signin" action="login.php" method="post">
    <img class="mb-4" src="images/robot.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <!-- Display Validation errors over here -->
    <?php include('errors.php'); ?>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email1" value="<?php echo $email; ?>">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pwd1" value="<?php echo $password; ?>">
    <div class="checkbox mb-3">
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
    <br><p class="text-center">Don't have an account? <a href="register.php">Register</a> </p>
    <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->
  </form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="scripts/login.js"></script>
</body>

</html>
