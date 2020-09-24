<?php
    
//Sept 18 2020: Added calls to database functions
//Sept 22 2020: Added static call to get DB()

    $visitor_name = filter_input(INPUT_POST, 'visitor_name');
    $visitor_email = filter_input(INPUT_POST, 'email');
    $visitor_sub = filter_input(INPUT_POST, 'subject');
    $visitor_msg = filter_input(INPUT_POST, 'message');
    /* echo "Fields: " . $visitor_name . $visitor_email . $visitor_msg;  */
    
    // Validate inputs
    if ($visitor_name == null || $visitor_email == null || $visitor_sub == null ||
        $visitor_msg == null) {
        $error = "Invalid input data. Check all fields and try again.";
        /* include('error.php'); */
        echo "Form Data Error: " . $error; 
        exit();
        } else {
            $dsn = 'mysql:host=localhost;dbname=portfolio';
            $username = 'root';
            $password = 'Pa$$w0rd';

            try {
                $db = new PDO($dsn, $username, $password);

            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                /* include('database_error.php'); */
                echo "DB Error: " . $error_message; 
                exit();
            }
            require_once ('./model/database.php');
            require_once ('./model/visitor.php');

            // Add the visitor to the database  
//           
            addVisitor($visitor_name, $visitor_email, $visitor_sub, $visitor_msg);

}

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
            <h1 class="display-3 mb-2 wow fadeInDown" data-wow-delay="0.3s">THANK YOU FOR CONTACTING ME!</h1>
            <h5 class="text-uppercase mb-3 mt-1 font-weight-bold wow fadeIn" data-wow-delay="0.4s">CLICK THE BUTTON BELOW TO RETURN TO THE HOME PAGE</h5>
             <a class="btn btn-indigo btn-lg wow fadeIn smooth-scroll" data-wow-delay="0.4s" href="index.html">Home</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
</main>
</body>

</html>