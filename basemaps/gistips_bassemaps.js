//BASE MAPS by carto.com >> https://carto.com/location-data-services/basemaps/
  var tile_carto_dark_name = 'CARTO dark';
  var tile_carto_dark = 'http://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}.png';
  var tile_carto_dark_attr = '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> '
    +'&copy; <a href="http://cartodb.com/attributions">CartoDB</a>';
  var tile_carto_light_name = 'CARTO light';
  var tile_carto_light = 'http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png';
  var tile_carto_light_attr = '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> '
    +'&copy; <a href="http://cartodb.com/attributions">CartoDB</a>';

//BASE MAPS by opentopomap.org >> https://opentopomap.org/about
  var tile_opentopomap_name = 'Open Topo Map';
  var tile_opentopomap = 'http://{s}.tile.opentopomap.org/{z}/{x}/{y}.png';
  var tile_opentopomap_attr = 'Map data: &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, '
    +'<a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> '
    +'(<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)';

  var tile_hot_name = 'OSM HOT';
  var tile_hot = 'http://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png';
  var tile_hot_attr = 'attribution: &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, '
    +'Tiles courtesy of <a href="http://hot.openstreetmap.org/" target="_blank">Humanitarian OpenStreetMap Team</a>';

//BASE MAPS by MapBox
  var tile_woodcut_name = 'Mapbox Woodcut';
  var tile_woodcut = 'http://a.tiles.mapbox.com/v4/mapbox.b0v97egc/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpbG10dnA3NzY3OTZ0dmtwejN2ZnUycjYifQ.1W5oTOnWXQ9R1w8u3Oo1yA';
  var tile_woodcut_attr = 'Map tiles by <a href="https://www.mapbox.com/">MapBox</a>, '
    +'<a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> <br> '
    +'Map data: &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, '
    +'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>';
  var tile_spacestation_name = 'Mapbox Space station';
  var tile_spacestation = 'http://a.tiles.mapbox.com/v4/mapbox.4iecw76a/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpbG10dnA3NzY3OTZ0dmtwejN2ZnUycjYifQ.1W5oTOnWXQ9R1w8u3Oo1yA';
  var tile_spacestation_attr = 'attribution: Map tiles by <a href="https://www.mapbox.com/">MapBox</a>, '
    +'<a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> <br>'
    +'Map data: &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors,'
    +'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>';
  var tile_wheatpaste_name = 'New Wheat Paste';
  var tile_wheatpaste = 'http://a.tiles.mapbox.com/v3/villeda.c4c63d13/{z}/{x}/{y}.png';
  var tile_wheatpaste_attr = 'Map tiles by <a href="https://www.mapbox.com/">MapBox</a>, '
    +'<a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data: &copy; '
    +'<a href="http://openstreetmap.org">OpenStreetMap</a> contributors,'
    +'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>';

//DIGITAL GLOBE
  var tile_digitalglobe_name = 'Digital Globe aerial';
  var api_key_digitalglobe = 'pk.eyJ1IjoiZGlnaXRhbGdsb2JlIiwiYSI6ImNpbjJhaWF6dzBiZmt2b2x1cmtyMWo3OG0ifQ.kPzOKXlTUKnES9t38siT4g';
  var tile_digitalglobe = 'http://api.tiles.mapbox.com/v4/digitalglobe.nal0g75k/{z}/{x}/{y}.png?access_token=' + api_key_digitalglobe;
  var tile_digitalglobe_attr = '(c) <a href="http://microsites.digitalglobe.com/interactive/basemap_vivid/">DigitalGlobe</a> , (c) OpenStreetMap, (c) Mapbox';

//runkeeper
  var tile_runkeeper_name = 'MapBox Runkeeper';
  var tile_runkeeper = 'http://a.tiles.mapbox.com/v4/runkeeper.4nc7syvi/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoidHJpc3RlbiIsImEiOiJiUzBYOEJzIn0.VyXs9qNWgTfABLzSI3YcrQ';
  var tile_runkeeper_attr = '<a href="https://www.mapbox.com/about/maps/" target="_blank">© Mapbox © OpenStreetMap</a>';

//RL
//var tile_rl_dtm5x5_wms = 1;
 var tile_rl_dtm5x5_name = 'DTM 5X5';
 var tile_rl_dtm5x5 = 'http://www.cartografia.servizirl.it/arcgis/services/wms/DTM5_RL_wms/MapServer/WMSServer';
 var tile_rl_dtm5x5_attr = ['wms','<a href="https://goo.gl/KTTuuW" target="_blank">Geoportale della Lombardia - CC-BY-NC-SA 3.0 Italia</a>','image/jpeg',45.548586,9.299469,8];

 var tile_rl_1954_name = 'GAI 1954';
 var tile_rl_1954 = 'http://www.cartografia.servizirl.it/arcgis2/services/BaseMap/Lombardia_GAI_UTM32N/MapServer/WMSServer';
 var tile_rl_1954_attr = ['wms','<a href="https://goo.gl/Mfcmmd" target="_blank">Geoportale della Lombardia - CC-BY-NC-SA 3.0 Italia</a>','image/jpeg',45.465361, 9.183910,17];

