// GEOM 3
  centro = new L.featureGroup();
  var file_geojson3 = "data/pg_centro.geojson";
  var def_poly = new Array();

  var doStylePoly_centro = function(feature, layer){
    layer.setStyle({
      color: '#004CFF',
      weight: 1,
      opacity: 1,
      fillOpacity: 0.4,
      clickable:false
    });
  };

  def_poly["temp"] = eval(doStylePoly_centro);

  $.getJSON(file_geojson3, function(data) {
    var geojson3 = L.geoJson(data, {
      onEachFeature: def_poly["temp"]
    });
    centro.addLayer(geojson3);
    mymap.addLayer(centro);
    //mymap.fitBounds(lineemetro.getBounds());
  });

// GEOM 3 -end
