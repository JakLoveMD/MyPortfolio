<?php
//Sept 18 2020: added some functions for employees and visitors

require_once('./model/database.php');
require_once('./model/employee.php');
require_once('./model/visitor.php');
// Get category ID
if (!isset($employeeID)) {
    $employeeID = filter_input(INPUT_GET, 'employeeID', 
            FILTER_VALIDATE_INT);
    if ($employeeID == NULL || $employeeID == FALSE) {
        $employeeID = 1;
    }
}

// Get all employees
$employees = getEmployees();
// Get employees for visitors
$visitors = getVisitorbyEmp($employeeID);
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Database</title>
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
            <h1 class="display-3 mb-2 wow fadeInDown" data-wow-delay="0.3s">DATABASE</h1>
            <h5 class="text-uppercase mb-3 mt-1 font-weight-bold wow fadeIn" data-wow-delay="0.4s">CLICK THE BUTTON BELOW TO RETURN TO THE HOME PAGE</h5>
             <a class="btn btn-indigo btn-lg wow fadeIn smooth-scroll" data-wow-delay="0.4s" href="index.html">Home</a>
          </div>
                     </div>
        </div>
          </div>
          </div>
    <div class="container flex-center text-center">
            <div class="container" flex-center text-center>
                
        <h5 class="text-uppercase mb-3 mt-1 font-weight-bold wow fadeIn">Employees</h5>
        <nav>
        <ul class="list-group">
            <?php foreach ($employees as $employee) : ?>
            <li class="list-group-item"><a href=".?employeeID=<?php echo $employee['employeeID']; ?>">
                    <?php echo $employee['first_name']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
            </div>
        </div>
 
<!-- Table with panel -->
<div class="card card-cascade narrower">

  <!--Card image-->
  <div
    class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

   

    <a href="" class="white-text mx-3">Visitors</a>

    

  </div>
  <!--/Card image-->

  <div class="px-4">

    <div class="table-wrapper">
      <!--Table-->
      <table class="table table-hover mb-0">

        <!--Table head-->
        <thead>
          <tr>
            <th class="th-lg">
              <a>Name
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Email
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Subject
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Message
                <i class="fas fa-sort ml-1"></i>
              </a>
            
          </tr>
        </thead>

            <?php foreach ($visitors as $visitor) : ?>
            <tr>
                <td><?php echo $visitor['visitor_name']; ?></td>
                <td><?php echo $visitor['visitor_email']; ?></td>
                <td><?php echo $visitor['visitor_sub']; ?></td>
                <td><?php echo $visitor['visitor_msg']; ?></td>
                <td><form action="delete_visitor.php" method="post">
                    <input type="hidden" name="visitor_id"
                           value="<?php echo $visitor['visitor_id']; ?>">
                    <input type="hidden" name="employeeID"
                           value="<?php echo $visitor['employeeID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
      </div>
    </div>
</main>
</body>

</html>
