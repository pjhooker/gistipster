<html>
<head>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="https://demos.creative-tim.com/material-dashboard/assets/css/material-dashboard.min.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="https://demos.creative-tim.com/material-dashboard/assets/demo/demo.css" rel="stylesheet" />
</head>
<body>

<?php

  //https://www.php.net/manual/en/function.mysqli-connect.php
  $conn= mysqli_connect(
    "127.0.0.1",//host
    "root",//user
    "",
    "esercizio01"
  );

  if (!$conn) {
      echo "Error: Unable to connect to MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }

  //echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
  //echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

  //https://www.w3schools.com/php/php_mysql_select.asp
  $sql = "SELECT * FROM fatture";
  $result = $conn->query($sql);


  ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <table class="table table-hover">
              <thead class="text-warning">
                <tr>
                  <th>numero</th>
                  <th>ditta</th>
                  <th>residenza</th>
                  <th>domicilio</th>
                  <th>piva</th>
                  <th>importo</th>
                </tr>
              </thead>
              <tbody>

                <?php
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {

                    echo "
                      <tr>
                        <td>" . $row["numero"]. "</td>
                        <td>" . $row["ditta"]. "</td>
                        <td>" . $row["residenza"]. "</td>
                        <td>" . $row["domicilio"]. "</td>
                        <td>" . $row["piva"]. "</td>
                        <td>" . $row["importo"]. "</td>    
                      </tr>
                    ";

                  }
                } else {
                  echo "0 results";
                }
                ?>
              </tbody>
            </table>
            <div class="text-center">
              <a class="btn" href="page02.php">Insert form</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>   
  <?php

  mysqli_close($conn);

  
?>
<!--   Core JS Files   -->
<script src="https://demos.creative-tim.com/material-dashboard/assets/js/core/jquery.min.js"></script>
<script src="https://demos.creative-tim.com/material-dashboard/assets/js/core/popper.min.js"></script>
<script src="https://demos.creative-tim.com/material-dashboard/assets/js/core/bootstrap-material-design.min.js"></script>
<script src="https://demos.creative-tim.com/material-dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="https://demos.creative-tim.com/material-dashboard/assets/js/material-dashboard.min.js?v=2.1.2" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="https://demos.creative-tim.com/material-dashboard/assets/demo/demo.js"></script>
</body>
</html>