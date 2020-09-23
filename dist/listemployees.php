<?php
   
require_once('./model/database.php');

class Employees {
    private $id;
    private $first_name;
    private $last_name;

    public function __construct($id, $first_name, $last_name) {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function getID() {
        return $this->id;
    }

    public function setID($value) {
        $this->id = $value;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function setFirstName($value) {
        $this->first_name = $value;
    }
    
    public function getLastName() {
        return $this->last_name;
    }

    public function setLastName($value) {
        $this->last_name = $value;
    }
}

class EmployeeDB {
        public static function getEmployees() {
        $db = Database::getDB();

        $query = 'SELECT * FROM minions ORDER BY last_name';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $employees = array();
        foreach ($statement as $row) {
            $employee = new Employees($row['employeeID'], 
                                     $row['first_name'], 
                                     $row['last_name']);
            $employees[] = $employee;
        }
        return $employees;
    }

}

$employees = EmployeeDB::getEmployees();
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Employee List</title>
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
            <h1 class="display-3 mb-2 wow fadeInDown" data-wow-delay="0.3s">EMPLOYEE LISTING</h1>
            <ul class="list-group">
                <?php foreach ($employees as $employee) : ?>
                <li>
                    <?php echo $employee->getLastName() . " " .$employee->getFirstName(); ?>
                </li>
                <?php endforeach; ?>
            </ul>
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