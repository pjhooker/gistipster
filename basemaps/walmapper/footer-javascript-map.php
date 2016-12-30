<script>

  $( document ).ready(function() {
      console.log( "ready!" );
      $(".leaflet-control-container").hide();


      //$('#myModal').modal('toggle');
      $('#modal-start').modal('show');
      //$('#myModal').modal('hide');
      $('#modal-end').modal('hide');

      $('#switch_credit').click(function() {
        if($('#switch_credit').is(':checked') == true){
          //console.log("true");
          $("#container-credit").show();
        }
        else{
          //console.log("false");
          $("#container-credit").hide();
        }
      });

      $('#switch_taked').click(function() {
        if($('#switch_taked').is(':checked') == true){
          mymap.addLayer(position_of_take);
        }
        else{
          mymap.removeLayer(position_of_take);
        }
      });

      $('#switch_strava').click(function() {
        if($('#switch_strava').is(':checked') == true){
          mymap.addLayer(basemap_strava);
        }
        else{
          mymap.removeLayer(basemap_strava);
        }
      });

      $('#switch_dem').click(function() {
        if($('#switch_dem').is(':checked') == true){
          mymap.addLayer(basemap_aster_dem);
        }
        else{
          mymap.removeLayer(basemap_aster_dem);
        }
      });

      $('#switch_admin').click(function() {
        if($('#switch_admin').is(':checked') == true){
          mymap.addLayer(basemap_admin);
        }
        else{
          mymap.removeLayer(basemap_admin);
        }
      });

      $('#switch_label').click(function() {
        if($('#switch_label').is(':checked') == true){
          mymap.addLayer(basemap_label);
        }
        else{
          mymap.removeLayer(basemap_label);
        }
      });


      $('#facebook').click(function() {
        var thetitle = $("#map-tilename").text();
        location.href = 'http://www.facebook.com/share.php?u=http://cityplanner.it/webapp/wallmapper/&title='+thetitle;
      });
      $('#google').click(function() {
        var thetitle = $("#map-tilename").text();
        location.href = 'https://plus.google.com/share?url=http://cityplanner.it/webapp/wallmapper/';
      });
      $('#twitter').click(function() {
        var thetitle = $("#map-tilename").text();
        location.href = 'http://twitter.com/intent/tweet?status='+thetitle+'+http://cityplanner.it/webapp/wallmapper/';
      });

      $('#best_location').html(''
      +'<span class="label label-info label-bordered label-ghost" onclick="mymap.setView([51.509401,-0.124348], 12)">Londra</span> '
      +'<span class="label label-info label-bordered label-ghost" onclick="mymap.setView([35.705608,139.758445], 12)">Tokyo</span> '
      +'<span class="label label-info label-bordered label-ghost" onclick="mymap.setView([40.724301,-74.001357], 12)">New York</span> '
      +'<span class="label label-info label-bordered label-ghost" id="everest" onclick="mymap.setView([27.987822,86.924951], 13)">Mt. Everest</span> '
      +'');

      $('#everest').click(function() {
        //tile_runkeeper
        onClick_defineTile("tile_runkeeper");
      });

  });

  var dataSet = new Array();
  var arr = new Array();

  var thisCOUNT = 0;
  var iLi = 0;

  $('#mainul').html(''
    +'<li id="li-side-1" class="active">'
    +'<li id="li-side-2" class="active">'
    +'<li id="li-side-3" class="active">'
  +'');

  //var items = [];
  $.each( data, function( key, val ) {
    var tile_name = eval(val.Tile + "_name");
    //console.log(val.Tile);
    thisCOUNT++;
    iLi++;

    if(iLi==1){
      $('#li-side-1').html('<button type="button" class="btn btn-primary" style="width:200px;text-align:left;" id="'+val.Tile+'" onclick="onClick_switchmap(event)">'+tile_name+'</button>');
    }
    else if(iLi==2){
      $('#li-side-2').html('<button type="button" class="btn btn-primary" style="width:200px;text-align:left;" id="'+val.Tile+'" onclick="onClick_switchmap(event)">'+tile_name+'</button>');
    }
    else if(iLi==3){
      iLi=0;
      $('#li-side-3').html('<button type="button" class="btn btn-primary" style="width:200px;text-align:left;" id="'+val.Tile+'" onclick="onClick_switchmap(event)">'+tile_name+'</button>');
    }
      var tile_attr = eval(val.Tile + "_attr");
      arr=[];
      arr.push('<a id="'+val.Tile+'" onclick="onClick_switchmap(event)"><i class="fa fa-eye" aria-hidden="true"></i> ' + tile_name + '</a>');
      arr.push(tile_attr[1]); //estensione
      arr.push(tile_attr[2]); //tag
      dataSet.push(arr);

  });

  $('#mainul').append('<li class="active"><button type="button" class="btn btn-primary" style="width:200px;text-align:left;" onclick="$( \'#modal-table\').modal(\'show\')">...more ('+(thisCOUNT-3)+')</button></li>');


    $("#modal-table").on('shown.bs.modal', function(event){
      create_table_tile();
    });



  var mymap = L.map('map',{zoomControl: false}).setView([center_lat, center_lng], 16);

  var tile1 = L.tileLayer(tile_carto_dark, {
      attribution: tile_carto_dark_attr}).addTo(mymap);
/*
      var tile_rl_dtm5x5_name = 'DTM 5X5';
      var tile_rl_dtm5x5 = 'http://www.cartografia.servizirl.it/arcgis/services/wms/DTM5_RL_wms/MapServer/WMSServer';
      var tile_rl_dtm5x5_attr = ['wms','<a href="https://goo.gl/KTTuuW" target="_blank">Geoportale della Lombardia - CC-BY-NC-SA 3.0 Italia</a>','image/jpeg',45.548586,9.299469,8];


        var overlay_DTM5X5 = L.tileLayer.wms(tile_rl_dtm5x5, {
            layers: tile_rl_dtm5x5_name,
            format: 'image/jpeg',
            transparent: true,
            opacity: 1,
            continuousWorld : true,
    		}).addTo(mymap);
*/
  $("#map-tilename").html(tile_carto_dark_name);
  $("#map-credit").html(tile_carto_dark_attr[3]);
  $("#tile_malfunction").html(tile_carto_dark_name);
  $("#map-position").html("45.461948, 9.19377");

  function onClick_switchmap(e) {
    $('#modal-body-table').html( '');
    $( '#modal-table').modal('hide');
    //console.log(e.path[0].id);
    mymap.eachLayer(function (layer) {
      mymap.removeLayer(layer);
    });

    if($('#switch_taked').is(':checked') == true){
      mymap.addLayer(position_of_take);
    }
    else{
      mymap.removeLayer(position_of_take);
    }

    if($('#switch_strava').is(':checked') == true){
      mymap.addLayer(basemap_strava);
    }
    else{
      mymap.removeLayer(basemap_strava);
    }

    var tile = eval(e.path[0].id);
    var tile_attr = eval(e.path[0].id + "_attr");
    var tile_name = eval(e.path[0].id + "_name");
    //var tile_wms = eval(e.path[0].id + "_wms");


        if(tile_attr[0]=="wms"){

          //var tile_rl_dtm5x5_attr = '<a href="https://www.mapbox.com/about/maps/" target="_blank">© RL © OpenStreetMap</a>';
          //console.log(tile);

          var tile_attr_box = tile_attr[3];

          var tile1 = L.tileLayer.wms(tile, {
              attribution: tile_attr[3],
              layers: tile_attr[4],
              format: tile_attr[5],
              transparent: true,
              opacity: 1,
              continuousWorld : true,
      		}).addTo(mymap);

          mymap.setView([tile_attr[6], tile_attr[7]], tile_attr[8]);
        }
        else if(tile_attr[0]=="tms"){

          //var tile_rl_dtm5x5_attr = '<a href="https://www.mapbox.com/about/maps/" target="_blank">© RL © OpenStreetMap</a>';
          //console.log(tile);

          var tile_attr_box = tile_attr[3];

          var tile1 = L.tileLayer.wms(tile, {
              tms: true,
              attribution: tile_attr[3],
              //layers: tile_attr[4],
              //format: tile_attr[5],
              transparent: true,
              opacity: 1,
              zIndex:1000,
              //continuousWorld : true,
      		}).addTo(mymap);

          mymap.setView([tile_attr[6], tile_attr[7]], tile_attr[8]);
        }
        else{

          var tile_attr_box = tile_attr[3];

          var tile1 = L.tileLayer(tile, {
              attribution: tile_attr[3]
            }).addTo(mymap);
        }

        $("#map-tilename").html(tile_name);
        $("#map-credit").html(tile_attr_box);
        $("#tile_malfunction").html(tile_name);
      } // function-end


  function onClick_defineTile(mytile) {
    $('#modal-body-table').html( '');
    $( '#modal-table').modal('hide');
    //console.log(e.path[0].id);
    mymap.eachLayer(function (layer) {
      mymap.removeLayer(layer);
    });

    if($('#switch_taked').is(':checked') == true){
      mymap.addLayer(position_of_take);
    }
    else{
      mymap.removeLayer(position_of_take);
    }

    if($('#switch_strava').is(':checked') == true){
      mymap.addLayer(basemap_strava);
    }
    else{
      mymap.removeLayer(basemap_strava);
    }

    var tile = eval(mytile);
    var tile_attr = eval(mytile + "_attr");
    var tile_name = eval(mytile + "_name");
    //var tile_wms = eval(e.path[0].id + "_wms");




        var tile_attr_box = tile_attr[3];

        var tile1 = L.tileLayer(tile, {
            attribution: tile_attr[3]
          }).addTo(mymap);


      $("#map-tilename").html(tile_name);
      $("#map-credit").html(tile_attr_box);
      $("#tile_malfunction").html(tile_name);
    } // function-end



/*
//var tile_rl_dtm5x5_wms = 1;
 var tile_rl_dtm5x5_name = 'Lombardia DTM 5X5';
 var tile_rl_dtm5x5 = 'http://www.cartografia.servizirl.it/arcgis/services/wms/DTM5_RL_wms/MapServer/WMSServer';
 var tile_rl_dtm5x5_attr = ['wms','<a href="https://goo.gl/KTTuuW" target="_blank">Geoportale della Lombardia - CC-BY-NC-SA 3.0 Italia</a>','image/jpeg',45.548586,9.299469,8];

 var tile_rl_1954_name = 'Lombardia Volo GAI 1954';
 var tile_rl_1954 = 'http://www.cartografia.servizirl.it/arcgis2/services/BaseMap/Lombardia_GAI_UTM32N/MapServer/WMSServer';
 var tile_rl_1954_attr = ['wms','<a href="https://goo.gl/Mfcmmd" target="_blank">Geoportale della Lombardia - CC-BY-NC-SA 3.0 Italia</a>','image/jpeg',45.465361, 9.183910,17];


*/


  mymap.on('moveend', show_hide);

  function show_hide(){
    var live_latlng=mymap.getCenter();
    $("#map-position").html(live_latlng.lat.toFixed(4) + ',' +live_latlng.lng.toFixed(4));

  }


  function end_procedure(){
    $('#modal-end').modal('show');
    $('#modal-body-end').html('<ul>'
      +'<li>Tile name: ' + $("#map-tilename").text() + '</li>'
      +'<li>Map center: ' + $("#map-position").text() + '</li>'
    +'</ul>');
  }

  function end_function(){
    $('#modal-end').modal('hide');
    $('#mainul').hide();
    $('#container-layer').hide();
    var tableAPI = "//cityplanner.it/experiment_host/supply/geojsonphp/wallmapper_log.php";

    dataString = {
      tile : $("#map-tilename").text(),
      position : $("#map-position").text(),
      zoom : mymap.getZoom(),
      note : ''
    };

    $.ajax({
      type: "POST",
      url: tableAPI,
      data: dataString,
      cache: false,
      success: function(response){
        console.log("ok");
      }
    });

  }

  function alert_malfunction(){

    var tableAPI = "//cityplanner.it/experiment_host/supply/geojsonphp/wallmapper_log.php";

    dataString = {
      tile : '',
      position : $("#map-position").text(),
      zoom : '',
      note : 'Malfunction ' + $("#tile_malfunction").text()
    };
    //console.log(dataString);
    $.ajax({
      type: "POST",
      url: tableAPI,
      data: dataString,
      cache: false,
      success: function(response){

      }
    });
    swal({title: 'Grazie per la segnalazione!', text: 'Correggero al più presto...', timer: 2000, showConfirmButton: false});
    //swal("No item_id find!");

  }






  function create_table_tile(){
    $('#modal-body-table').html( ''
      +'<table cellpadding="0" cellspacing="0" border="0" class="display" id="example"></table>'
      +'');

    var table = $('#example').DataTable( {
			searching:  true,
			paging:  true,
			"ordering": false,
			"data": dataSet,
      "pageLength": 5,
			"columns": [
				{ "title": "Titolo tile" },
				{ "title": "Estensione" },
				{ "title": "Tag" }
			]
		});
    $('#example_length').hide();
    $('#example_info').hide();
  }

  // Post
  var position_of_take = new L.featureGroup();
  var file_geojson2 = "http://cityplanner.it/experiment_host/supply/geojsonphp/wallmapper_log_position.php";
  $.getJSON(file_geojson2, function(data) {
      var geojson3 = L.geoJson(data,{
        pointToLayer: IconPost
      });
      position_of_take.addLayer(geojson3);
      position_of_take.addTo(mymap);
  });

  function IconPost(feature,latlng) {
    console.log(feature.properties.tile+": "+feature.geometry.coordinates[1]+","+feature.geometry.coordinates[0]+" - time: "+feature.properties.date);
    return L.marker(latlng,{
      icon: L.icon({
        iconUrl: 'http://cityplanner.it/supply/icon_web/set2/noun_576505_cc_mod.svg',
        iconSize: [40,40]
      }),
      clickable:false
    }).on('click', onClick_showAttr);
  }

  function onClick_showAttr(e){
    swal({title: 'Screenshoot taked on ' + e.target.feature.properties.tile, text: 'Zoom level '+ e.target.feature.properties.zoom, timer: 2000, showConfirmButton: false});
  }

  var basemap_strava = L.tileLayer('http://globalheat.strava.com/tiles/running/color8/{z}/{x}/{y}.png', {
    attribution: 'Strava'
  });

  //var tileAster = eval(tile_aster_gdem_srtm);
  //var tileAster_attr = eval(tile_aster_gdem_srtm + "_attr");
  //console.log("ss"+tile_aster_gdem_srtm);
  var basemap_aster_dem = L.tileLayer(tile_aster_gdem_srtm, {
    attribution: "tileAster_attr[3]"
  });

  var basemap_admin = L.tileLayer(tile_korona_adminb, {
    attribution: "tileAster_attr[3]"
  });

  var basemap_label = L.tileLayer(tile_cartodb_labels, {
    attribution: "tileAster_attr[3]"
  });



</script>
