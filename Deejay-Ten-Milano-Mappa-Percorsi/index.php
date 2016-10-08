<?php
/**
 * The template for ...
 *
 * @package WEB MAP by CityPlanner.it
 * @subpackage BASE
 * @since Web Map base 0.1
 */

 require_once('config.php');

 if($_GET['style']){
   $mapstyle=$_GET['style'];
 }
 else{
   $mapstyle="default";
 }

?><!DOCTYPE html>
<html lang="it-IT" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
  <head>
    <link rel="icon" type="image/svg+xml" href="http://cityplanner.it/webapp/legnanonightrun/img/noun_187974_cc.svg">
      <link rel="icon" type="image/png" href="http://cityplanner.it/webapp/legnanonightrun/img/noun_187974_cc.png">
    <?php require_once('inc/head.php'); ?>
    <?php require_once('inc/head_option.php'); ?>
    <script>console.log("Style: <?php echo $mapstyle;?>");</script>
  </head>
  <body>

  	<div id="mapid"></div>

    <div class="row" style="bottom: 0px;position: absolute;width:100%;">
      <div class="col-md-offset-4 col-md-4">
        <div class="panel panel-default hidden-xs hidden-sm" style="text-align:center;" id="container-red">
          <div class="panel-body">
            <h3><img style="float:left;width:40px;" src="http://cityplanner.it/webapp/legnanonightrun/img/noun_187974_cc.svg" /><?php echo $title; ?></h3>
          </div>
        </div>
      </div>
    </div>

    <div style="bottom:0px;left:15px;position: absolute;">
      <div class="list-group" style="padding:0px;">
        <div class="list-group-item" style="padding:0px;">
          <div class="row-picture" style="padding:0px;">
            <a href="http://gistonic-milano.duckdns.org/" target="_blank"><img class="circle" src="https://lh5.googleusercontent.com/-L9Rtsx6GqSE/V4wCAUUJgNI/AAAAAAAADW4/hw91egA4wEUbolzb6cevzRCdHzee8xvRQCL0B/s853-no/logo_cityplanner_2017_notext_1000.png" alt="icon" style="padding:0px;" data-pin-nopin="true"></a>
          </div>
        </div>
      </div>
    </div>

    <div style="top:15px;right:15px;position: absolute;">
      <div style="width:80px;text-align:center;">
        <div style="background-color: #ff5722;width:100%;color:white;height:24px;"><span style="font-weight: 700;">MILANO</span></div><br>
        <div style="background-color: #ff5722;width:100%;color:white;height:24px;"><span style="font-weight: 700;">10 km</span></div><br>
        <div style="background-color: #ff5722;width:100%;color:white;height:74px;">
          <span style="font-weight: 700;font-size:22px;"><span id="countdown">?</span></span><br>
          <a href="http://www.ilmeteo.it/meteo/Milano" target="_blank"><img src="img/noun_68584_cc.png" style="width:50px;"></a>
        </div>
        <div style="background-color: #ff5722;width:100%;color:white;height:25px;padding:5px;">
          <a href="https://www.strava.com/athletes/11238295" target="_blank">
            <div
              style="background-image: url(https://d3nn82uaxijpm6.cloudfront.net/assets/svg/strava-logo-5428c45001c30a8796a8eca5951a15e8.svg);
                background-repeat: no-repeat;
                background-size: 100%;
                background-position: 0px -15px;
                width: 100%;
                height: 16px;">
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- Fixed navbar LEFT -->
    <div class="navbar navbar-default navbar-fixed-side navbar-fixed-side-left" style="width:10px;" role="navigation">
      <div class="navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <button type="button" style="font-size: 25px;" class="btn btn-primary btn-sm mdi-content-add-circle-outline button-control" onclick="onClick_zoomIn()"></button>
          </li>
          <li class="active">
            <button type="button" style="font-size: 25px;" class="btn btn-primary btn-sm mdi-action-home button-control" onclick="onClick_home()"></button>
          </li>
          <li class="active">
            <button type="button" style="font-size: 25px;" class="btn btn-primary btn-sm mdi-content-remove-circle-outline button-control" onclick="onClick_zoomOut()"></button>
          </li>
          <li class="active">
            <a href="data/pl_djten2016.gpx" target="_blank" style="font-size: 13px;color:black;" class="btn btn-primary btn-sm button-control">GPX</a>
          </li>
          <li class="active">
            <a href="data/pl_djten2016.kml" target="_blank" style="font-size: 13px;color:black;" class="btn btn-primary btn-sm button-control">KML</a>
          </li>
        </ul>
      </div>
    </div>

    <div style="bottom:0px;right:15px;position: absolute;">
      <div class="togglebutton cz-color-3355443">
        <label class="cz-color-12434877" style="padding:3px;background-color:rgba(255,255,255,0.7);">
          <span class="label label-default">MAP theme</span> &nbsp;&nbsp;<input type="checkbox" onclick="onClick_switchmap(event)" checked="" class="cz-color-12434877 lswitchmap inactive1" id="mapswitcher"><span class="toggle cz-color-12434877 cz-color-8951296"></span>
        </label>
        <button style="width:45px;height:30px;padding:0;background-color:rgba(255,255,255,0.7);" type="button" class="btn btn-default" onClick="show_attribution()" id="btn-snack"><i class="material-icons">info_outline</i></button>
      </div>
    </div>

    <div id="source-modal" class="modal fade" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Source Code</h4>
          </div>
          <div class="modal-body" style="padding:15px;">
          </div>
        </div>
      </div>
    </div>

    <?php require_once('inc/body_end.php'); ?>
    <?php require_once('inc/body_end_option.php'); ?>

    <!-- custom js progetto -->

      <script>

        // variabili mappa
        var center_lat = <?php echo $center_lat; ?>;
        var center_lng = <?php echo $center_lng; ?>;
        var zoom_level = <?php echo $zoom_level; ?>;

      </script>

      <script src="js/app.js"></script>

      <script src="js/geometrie/milano_run_script.js"></script>
      <script src="js/geometrie/pt_foto_script.js"></script>
      <script src="js/geometrie/pt_service_script.js"></script>
      <!--<script src="js/geometrie/pg_centro_script.js"></script>-->
      <script src="js/app_end.js"></script>

      <script>

          CountDownTimer('10/09/2016 10:1 PM', 'countdown');

          function CountDownTimer(dt, id)
          {
              var end = new Date(dt);

              var _second = 1000;
              var _minute = _second * 60;
              var _hour = _minute * 60;
              var _day = _hour * 24;
              var timer;

              function showRemaining() {
                  var now = new Date();
                  var distance = end - now;
                  if (distance < 0) {

                      clearInterval(timer);
                      document.getElementById(id).innerHTML = 'EXPIRED!';

                      return;
                  }
                  var days = Math.floor(distance / _day);
                  var hours = Math.floor((distance % _day) / _hour);
                  var minutes = Math.floor((distance % _hour) / _minute);
                  var seconds = Math.floor((distance % _minute) / _second);

                  console.log(days);

                  document.getElementById(id).innerHTML = '-' + days;
                  //document.getElementById(id).innerHTML += hours + 'hrs ';
                  //document.getElementById(id).innerHTML += minutes + 'mins ';
                  //document.getElementById(id).innerHTML += seconds + 'secs';
              }

              timer = setInterval(showRemaining, 1000);
          }

      </script>

  </body>
</html>
