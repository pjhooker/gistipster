
  var str_attribution = $( "div.leaflet-control-attribution" ).html();
  //console.log(str);

  $( "div.leaflet-control-attribution" ).hide();

  function show_attribution(){
    $('#source-modal').modal('show');
    $('.modal-body').html(str_attribution);
    $('.modal-title').html("Attribution");
  }
