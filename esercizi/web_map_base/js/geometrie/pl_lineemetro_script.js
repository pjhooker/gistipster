// GEOM 1
  lineemetro = new L.featureGroup();
  var file_geojson1 = "data/pl_subway_osm.geojson";
  var def_line = new Array();
  var doStyleLinee_lineemetro = function(feature, layer){
    layer.setStyle({
      color: '#fff000',
      weight: 7,
      opacity: 0.3,
      fillOpacity: 1.0,
      clickable:false
    });
  };

  def_line["temp"] = eval(doStyleLinee_lineemetro);
  $.getJSON(file_geojson1, function(data) {
    var geojson = L.geoJson(data, {
      onEachFeature: def_line["temp"]
    });
    lineemetro.addLayer(geojson);
    mymap.addLayer(lineemetro);
    //mymap.fitBounds(lineemetro.getBounds());
  });

// GEOM 1 -end
