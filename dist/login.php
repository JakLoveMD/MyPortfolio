<?php
    
//Sept 18 2020: Added calls to database functions

//    $visitor_name = filter_input(INPUT_POST, 'visitor_name');
//    $visitor_email = filter_input(INPUT_POST, 'email');
//    $visitor_sub = filter_input(INPUT_POST, 'subject');
//    $visitor_msg = filter_input(INPUT_POST, 'message');
//    /* echo "Fields: " . $visitor_name . $visitor_email . $visitor_msg;  */
//    
//    // Validate inputs
//    if ($visitor_name == null || $visitor_email == null || $visitor_sub == null ||
//        $visitor_msg == null) {
//        $error = "Invalid input data. Check all fields and try again.";
//        /* include('error.php'); */
//        echo "Form Data Error: " . $error; 
//        exit();
//        } else {
//            $dsn = 'mysql:host=localhost;dbname=portfolio';
//            $username = 'root';
//            $password = 'Pa$$w0rd';
//
//            try {
//                $db = new PDO($dsn, $username, $password);
//
//            } catch (PDOException $e) {
//                $error_message = $e->getMessage();
//                /* include('database_error.php'); */
//                echo "DB Error: " . $error_message; 
//                exit();
//            }
//            require_once ('./model/database.php');
//            require_once ('./model/visitor.php');
//
//            // Add the visitor to the database  
////           
//            addVisitor($visitor_name, $visitor_email, $visitor_sub, $visitor_msg);

//}

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Thank You!</title>
<!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
  <link href="css/mdb-pro.min.css" rel="stylesheet">
<!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <link href="css/graph.css">
  <link rel="stylesheet" href="css/scroll.css">
</head>
<body class="black-skin">
	
<!--Main layout -->
<main>


  <div class="view jarallax" style="height: 100vh;">
    <img class="jarallax-img" src="https://mdbootstrap.com/img/Photos/Others/img%20%2844%29.jpg" alt="">
    <div class="mask rgba-blue-slight">
      <div class="container flex-center text-center">
        <div class="row mt-5">
          <div class="col-md-12 wow fadeIn mb-3">
            <h1 class="display-3 mb-2 wow fadeInDown" data-wow-delay="0.3s">ADMIN LOGIN</h1>
           <!-- Material form login -->
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Sign in</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" action="admin.php">

      <!-- Email -->
      <div class="md-form">
          <input type="email" id="materialLoginFormEmail" class="form-control" required>
        <label for="materialLoginFormEmail">E-mail</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" id="materialLoginFormPassword" class="form-control" required>
        <label for="materialLoginFormPassword">Password</label>
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
          </div>
        </div>
        <div>
          <!-- Forgot password -->
          <a href="">Forgot password?</a>
        </div>
      </div>

      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

      <!-- Register -->
      <p>Not a member?
        <a href="">Register</a>
      </p>

      <!-- Social login -->
      <p>or sign in with:</p>
      <a type="button" class="btn-floating btn-fb btn-sm">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a type="button" class="btn-floating btn-tw btn-sm">
        <i class="fab fa-twitter"></i>
      </a>
      <a type="button" class="btn-floating btn-li btn-sm">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a type="button" class="btn-floating btn-git btn-sm">
        <i class="fab fa-github"></i>
      </a>

    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
          </div>
        </div>
      </div>
    </div>
  </div>

<!--  <div class="container">-->
</main>
</body>

</html>