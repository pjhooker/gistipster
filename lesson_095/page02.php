<?php
//https://www.w3schools.com/php/php_forms.asp
?>
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
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="row">
              <div class="col-md-12">
                <form action="welcome_get.php" method="get">
                  Ditta: <input type="text" name="ditta"><br>
                  Residenza (Via): <input type="text" name="residenza"><br>
                  Domicilio (Città): <input type="text" name="domicilio"><br>
                  Partita Iva: <input type="text" name="piva"><br>
                  Importo: <input type="number" name="importo"><br>  
                  <input class="btn" type="submit">
                </form>
                <a  class="btn" href="index.php">Home</a>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>   
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
