//BASE MAPS by carto.com >> https://carto.com/location-data-services/basemaps/
  var tile_carto_dark_name = 'CARTO dark';
  var tile_carto_dark = 'http://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}.png';
  var tile_carto_dark_attr = ['provider','World','osm,carto','&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> '
    +'&copy; <a href="http://cartodb.com/attributions">CartoDB</a>'];

  var tile_carto_light_name = 'CARTO light';
  var tile_carto_light = 'http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png';
  var tile_carto_light_attr = ['provider','World','osm,carto','&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> '
    +'&copy; <a href="http://cartodb.com/attributions">CartoDB</a>'];

//BASE MAPS by opentopomap.org >> https://opentopomap.org/about
  var tile_opentopomap_name = 'Open Topo Map';
  var tile_opentopomap = 'http://{s}.tile.opentopomap.org/{z}/{x}/{y}.png';
  var tile_opentopomap_attr = ['provider','World','osm,SRTM','Map data: &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, '
    +'<a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> '
    +'(<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'];

  var tile_hot_name = 'OSM HOT';
  var tile_hot = 'http://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png';
  var tile_hot_attr = ['provider','World','osm,hot,FR','&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, '
    +'Tiles courtesy of <a href="http://hot.openstreetmap.org/" target="_blank">Humanitarian OpenStreetMap Team</a>'];

//BASE MAPS by MapBox
  var tile_woodcut_name = 'Mapbox Woodcut';
  var tile_woodcut = 'http://a.tiles.mapbox.com/v4/mapbox.b0v97egc/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpbG10dnA3NzY3OTZ0dmtwejN2ZnUycjYifQ.1W5oTOnWXQ9R1w8u3Oo1yA';
  var tile_woodcut_attr = ['provider','World','osm,MapBox','Map tiles by <a href="https://www.mapbox.com/">MapBox</a>, '
    +'<a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> <br> '
    +'Map data: &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, '
    +'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'];

  var tile_spacestation_name = 'Mapbox Space station';
  var tile_spacestation = 'http://a.tiles.mapbox.com/v4/mapbox.4iecw76a/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpbG10dnA3NzY3OTZ0dmtwejN2ZnUycjYifQ.1W5oTOnWXQ9R1w8u3Oo1yA';
  var tile_spacestation_attr = ['provider','World','osm,MapBox','Map tiles by <a href="https://www.mapbox.com/">MapBox</a>, '
    +'<a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> <br>'
    +'Map data: &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors,'
    +'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'];

  var tile_wheatpaste_name = 'New Wheat Paste';
  var tile_wheatpaste = 'http://a.tiles.mapbox.com/v3/villeda.c4c63d13/{z}/{x}/{y}.png';
  var tile_wheatpaste_attr = ['provider','World','osm,MapBox','Map tiles by <a href="https://www.mapbox.com/">MapBox</a>, '
    +'<a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data: &copy; '
    +'<a href="http://openstreetmap.org">OpenStreetMap</a> contributors,'
    +'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'];

//DIGITAL GLOBE
  var tile_digitalglobe_name = 'Digital Globe aerial';
  var api_key_digitalglobe = 'pk.eyJ1IjoiZGlnaXRhbGdsb2JlIiwiYSI6ImNpbjJhaWF6dzBiZmt2b2x1cmtyMWo3OG0ifQ.kPzOKXlTUKnES9t38siT4g';
  var tile_digitalglobe = 'http://api.tiles.mapbox.com/v4/digitalglobe.nal0g75k/{z}/{x}/{y}.png?access_token=' + api_key_digitalglobe;
  var tile_digitalglobe_attr = ['provider','World','osm,MapBox,aerial','(c) <a href="http://microsites.digitalglobe.com/interactive/basemap_vivid/">DigitalGlobe</a>'
    +', (c) OpenStreetMap, (c) Mapbox'];

//runkeeper
  var tile_runkeeper_name = 'MapBox Runkeeper';
  var tile_runkeeper = 'http://a.tiles.mapbox.com/v4/runkeeper.4nc7syvi/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoidHJpc3RlbiIsImEiOiJiUzBYOEJzIn0.VyXs9qNWgTfABLzSI3YcrQ';
  var tile_runkeeper_attr = ['provider','World','osm,MapBox,Runkeeper','<a href="https://www.mapbox.com/about/maps/" target="_blank">© Mapbox © OpenStreetMap</a>'];

//RL
 var tile_rl_dtm5x5_name = 'DTM 5X5';
 var tile_rl_dtm5x5 = 'http://www.cartografia.servizirl.it/arcgis/services/wms/DTM5_RL_wms/MapServer/WMSServer';
 var tile_rl_dtm5x5_attr = ['wms','Lombardia','DTM','<a href="https://goo.gl/KTTuuW" target="_blank">'
  +'Geoportale della Lombardia - CC-BY-NC-SA 3.0 Italia</a>','DTM 5X5','image/jpeg',45.548586,9.299469,8];

 var tile_rl_1954_name = 'Volo GAI 1954';
 var tile_rl_1954 = 'http://www.cartografia.servizirl.it/arcgis2/services/BaseMap/Lombardia_GAI_UTM32N/MapServer/WMSServer';
 var tile_rl_1954_attr = ['wms','Lombardia','aerial','<a href="https://goo.gl/Mfcmmd" target="_blank">'
  +'Geoportale della Lombardia - CC-BY-NC-SA 3.0 Italia</a>','0','image/jpeg',45.465361, 9.183910,17];

 var tile_simpson_name = 'Simpson\'s City';
 var tile_simpson = 'http://cityplanner.it/webapp/springfieldmap/{z}/{x}/{y}.png';
 var tile_simpson_attr = ['tms','Simpson','PixelArt',                
  + 'Imagery © <a href="http://www.smaxity.net/images/SpringfieldMap.jpg">smaxity.net/</a>'
  + '<br>Map data <a href="http://simpsons.playgis.com/">simpsons.playgis</a>'
  + '<br>More info at: <a href="http://www.cityplanner.it/simpsons-city-map/">CityPlanner Simpsons City Map</a>','','image/jpeg',45.465361, 9.183910,15];

  var tile_openrailway_name = 'OpenRailwayMap';
  var tile_openrailway = 'http://{s}.tiles.openrailwaymap.org/standard/{z}/{x}/{y}.png';
  var tile_openrailway_attr = ['provider','World','osm,railway','<a href="http://www.openstreetmap.org/copyright">© OpenStreetMap contributors</a>, Style: <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA 2.0</a> <a href="http://www.openrailwaymap.org/">OpenRailwayMap</a> and OpenStreetMap'];


  var tile_guildwars2_name = 'Guild Wars 2';
  var tile_guildwars2 = 'https://tiles.guildwars2.com/1/1/{z}/{x}/{y}.jpg';
  var tile_guildwars2_attr = ['provider','0,0','games','<a href="https://wiki.guildwars2.com/wiki/API:Tile_service">wiki.guildwars2</a>'];


  var tile_waze_name = 'Waze';
  var tile_waze = 'https://worldtiles3.waze.com/tiles/{z}/{x}/{y}.png';
  var tile_waze_attr = ['provider','0,0','trafic','<a href="https://wiki.guildwars2.com/wiki/API:Tile_service">wiki.guildwars2</a>'];

  var tile_hydda_roads_name = 'hydda_roads';
  var tile_hydda_roads = 'http://{s}.tile.openstreetmap.se/hydda/roads_and_labels/{z}/{x}/{y}.png';
  var tile_hydda_roads_attr = ['provider','World','roads','<a href="https://wiki.guildwars2.com/wiki/API:Tile_service">wiki.guildwars2</a>'];

  var tile_osm_nolabels_name = 'OSM no labels';
  var tile_osm_nolabels = 'https://tiles.wmflabs.org/osm-no-labels/{z}/{x}/{y}.png';
  var tile_osm_nolabels_attr = ['provider','World','osm,nolabel','© 2016 <a href="http://bbbike.org/">BBBike<span class="long_footer">.org</span></a> &amp; <a href="https://www.geofabrik.de/">Geofabrik<span class="long_footer"> GmbH</span></a>- <span class="long_footer">map data</span> (©) <a href="https://www.openstreetmap.org/" title="OpenStreetMap License">OpenStreetMap.org</a> <span class="long_footer">contributors</span>'];

 var tile_ita_geo_100k_name = 'Geologia 100k'; //arta geologica d'Italia alla scala 1:500.000. La legenda è stata ricostruita a partire dalla versione cartacea. Risoluzione 1:500.000.
 var tile_ita_geo_100k = 'http://geoservices.isprambiente.it/arcgis/services/Geologia/geologia_italia_100k/ImageServer/WMSServer?';
 var tile_ita_geo_100k_attr = ['wms','Italia','geologia','<a href="http://wms.pcn.minambiente.it/ogc?map=/ms_ogc/WMS_v1.3/Vettoriali/Carta_geologica.map&service=wms&request=getCapabilities&version=1.3.0" target="_blank">'
  +'Ministero dell\'Ambiente e della Tutela del Territorio e del Mare - Geoportale Nazionale</a>','geologia_italia_100k','image/jpeg',45.465361, 9.183910,13];

  var tile_aster_gdem_srtm_name = 'ASTER-GDEM-SRTM';
  //var tile_aster_gdem_srtm = 'http://korona.geog.uni-heidelberg.de/tiles/asterh/x={x}&y={y}&z={z}';
  var tile_aster_gdem_srtm = 'http://129.206.66.245:8004/tms_hs.ashx?x={x}&y={y}&z={z}';
  var tile_aster_gdem_srtm_attr = ['provider','World','dtm,rilievo,hillshade,srtm',''
    +'<a href="http://korona.geog.uni-heidelberg.de/contact.html">Department of Geography Heidelberg University, Germany</a>'
    +''];

  var tile_korona_adminb_name = 'ASTER-GDEM-SRTM';
  //var tile_aster_gdem_srtm = 'http://korona.geog.uni-heidelberg.de/tiles/adminb/x={x}&y={y}&z={z}';
  var tile_korona_adminb = 'http://129.206.66.245:8007/tms_b.ashx?x={x}&y={y}&z={z}';
  var tile_korona_adminb_attr = ['provider','World','label,admin boundaries',''
    +'<a href="http://korona.geog.uni-heidelberg.de/contact.html">Department of Geography Heidelberg University, Germany</a>'
    +''];


