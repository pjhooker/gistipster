# BASEMAPS
See in action: http://www.cityplanner.it/webapp/wallmapper/index.php

Add:
<script src="https://rawgit.com/pjhooker/gistipster/master/basemaps/gistips_bassemaps.js"></script>
<script src="https://rawgit.com/pjhooker/gistipster/master/basemaps/gistips_bassemaps_list.js"></script>

Return list in #container:
  $( document ).ready(function() {
      console.log( "ready!" );
      $.each( data, function( key, val ) {
        var tile_name = eval(val.Tile + "_name");
        $('#container').append('tile_id: ' + val.Tile + ' | tile Name: ' + tile_name);
      });
  });
  
 Ispired by:
  http://mc.bbbike.org/mc/
  http://bestofosm.org/
  https://leaflet-extras.github.io/leaflet-providers/preview/
  
And you!
