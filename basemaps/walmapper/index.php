<!DOCTYPE html>
<html lang="it-IT" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
	<head itemscope itemtype="http://schema.org/WebSite">

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<link rel="icon" href="http://cityplanner.it/supply/icon_web/set2/noun_576505_cc_mod.png" sizes="32x32" />

		<?php
			include_once("inc/meta.php");
		?>

		<!-- CSS INCLUDE -->
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />
		<link rel="stylesheet" href="http://www.cityplanner.it/source/boooya/build/css/styles.css">
		<!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">-->
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="css/map.css" />
		<!-- css FAW -->
		<script src="https://use.fontawesome.com/d485a286bb.js"></script>
		<!-- EOF CSS INCLUDE -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<?php
			include_once("inc/snippet.php");
		?>


	</head>
	<body style="padding-top: 0px;">

    <div id="map">

      <div class="navbar navbar-default navbar-fixed-side navbar-fixed-side-left" style="width:10px;" role="navigation">
        <div class="navbar-collapse">
          <div style="position:absolute;z-index:1000;top:10px;">
            <ul class="nav navbar-nav" id="mainul">

            </ul>
          </div>
        </div>
      </div>

			<div class="container" style="position:absolute;left:0px;z-index:1000;bottom:10px;width:500px;" id="container-credit">
				<div class="row">
					<div class="col-md-12">

						<div class="block" style="">
							<!-- HEADING -->
							<div class="app-heading app-heading-small" style="background-color:rgba(255,255,255,0.7);padding:10px;height:65px;">
								<div class="title">
									<div class="contact contact-rounded contact-bordered contact-lg">
                    <img src="https://lh5.googleusercontent.com/-L9Rtsx6GqSE/V4wCAUUJgNI/AAAAAAAADW4/hw91egA4wEUbolzb6cevzRCdHzee8xvRQCL0B/s853-no/logo_cityplanner_2017_notext_1000.png" style="width:50px;border-radius: 50%;float:left;">
                    <div class="contact-container" style="margin-right:5px;">
                      <b><span id="map-tilename"></span></b> <span id="map-position"></span></br>
                      <span id="map-credit"></span>
											</br>
                    </div>
                  </div>
								</div>
							</div>
							<!-- END HEADING -->
						</div>
					</div>

				</div>
			</div>
		</div>

			<div class="container" style="position:absolute;right:0px;z-index:1000;top:10px;right:10px;width:300px;background-color:#fff;" id="container-layer">
        <div class="row">
          <div class="col-md-12 hidden-xs hidden-sm">

						<div class="block" style="">
		          <!-- HEADING -->
		          <div class="app-heading app-heading-small">
	              <div class="title">
	                <h2>Control panel</h2>
	              </div>
		          </div>
		          <!-- END HEADING -->

							<div class="row">
								<div class="col-md-2">
									<label class="switch switch-sm switch-cube">
										<input type="checkbox" name="switch_credit" id="switch_credit" checked>
									</label>
								</div>
								<div class="col-md-10" style="margin-top: 10px;">
									Crediti bottom-dx
								</div>
							</div>

							<div class="row">
								<div class="col-md-2">
									<label class="switch switch-sm switch-cube">
										<input type="checkbox" name="switch_taked" id="switch_taked" checked>
									</label>
								</div>
								<div class="col-md-10" style="margin-top: 10px;">
									Layer taked
								</div>
							</div>

							<div class="row">
								<div class="col-md-2">
									<label class="switch switch-sm switch-cube">
										<input type="checkbox" name="switch_strava" id="switch_strava">
									</label>
								</div>
								<div class="col-md-10" style="margin-top: 10px;">
									Switch Strava
								</div>
							</div>

							<div class="row">
								<div class="col-md-2">
									<label class="switch switch-sm switch-cube">
										<input type="checkbox" name="switch_dem" id="switch_dem">
									</label>
								</div>
								<div class="col-md-10" style="margin-top: 10px;">
									Add DEM
								</div>
							</div>

							<div class="row">
								<div class="col-md-2">
									<label class="switch switch-sm switch-cube">
										<input type="checkbox" name="switch_admin" id="switch_admin">
									</label>
								</div>
								<div class="col-md-10" style="margin-top: 10px;">
									Add Admin
								</div>
							</div>

							<div class="row">
								<div class="col-md-2">
									<label class="switch switch-sm switch-cube">
										<input type="checkbox" name="switch_label" id="switch_label">
									</label>
								</div>
								<div class="col-md-10" style="margin-top: 10px;">
									Add Label
								</div>
							</div>

							<div class="row">
								<div class="col-md-12" style="margin-top: 10px;margin-bottom:10px;">
									<button type="button" class="btn btn-default btn-xs btn-block" onclick="alert_malfunction()">Report bug <span id="tile_malfunction"></span></button>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12" style="margin-bottom:10px;">
									<button type="button" class="btn btn-primary btn-block" onClick="end_procedure()">Start (take screenshoot)</button>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12" style="margin-bottom:10px;text-align: center;">
									<button type="button" class="btn btn-default btn-icon" id="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></button>
									<button type="button" class="btn btn-default btn-icon" id="google"><i class="fa fa-google" aria-hidden="true"></i></button>
									<button type="button" class="btn btn-default btn-icon" id="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></button>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12" style="margin-bottom:10px;text-align: center;" id="best_location">
								</div>
							</div>

			      </div>
		      </div>

				</div>
			</div>
		</div>

  </div><!-- MAP -->
  <script>
  <?php
    if(!empty($_GET['lat'])){
  ?>
      var center_lat = <?php echo $_GET['lat']; ?>;
  <?php
    }

    if(!empty($_GET['lng'])){
  ?>
      var center_lng = <?php echo $_GET['lng']; ?>;
  <?php
    }
    else{
  ?>
    var center_lat = 45.461948;
    var center_lng = 9.19377;
  <?php
    }
  ?>
  </script>
	<?php
		include_once("inc/modal.php");
		include_once("inc/footer-libraries.php");
		include_once("inc/footer-javascript-map.php");
	?>

	</body>
</html>
