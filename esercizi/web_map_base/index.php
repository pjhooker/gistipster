<?php
/**
 * The template for ...
 *
 * @package WEB MAP by CityPlanner.it
 * @subpackage BASE
 * @since Web Map base 0.1
 */

 require_once('config.php');

?><!DOCTYPE html>
<html lang="it-IT" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
  <head>
    <?php require_once('inc/head.php'); ?>
    <?php require_once('inc/head_option.php'); ?>
  </head>
  <body>

  	<div id="mapid"></div>

    <div class="row" style="bottom: 0px;position: absolute;width:100%;">
      <div class="col-md-offset-4 col-md-4">
        <div class="bs-component">
          <div class="alert alert-dismissible alert-danger" id="container-red">
            <h2><?php echo $title; ?></h2>
          </div>
          <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
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
        </ul>
      </div>
    </div>

    <button style="width:40px;padding:0;background-color:rgba(255,255,255,0.5);bottom:0px;right:15px;position: absolute;" type="button" class="btn btn-default" onClick="show_attribution()" id="btn-snack"><i class="material-icons">info_outline</i></button>


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
      <script src="js/tile/cartodb_darkmatter.js"></script>
      <script src="js/geometrie/pl_lineemetro_script.js"></script>
      <script src="js/geometrie/pt_foto_script.js"></script>
      <script src="js/geometrie/pg_centro_script.js"></script>
      <script src="js/app_end.js"></script>

  </body>
</html>
