<?php


  // verifica CALLBACK
  if(empty($_GET["callback"])){
    echo "Response error > callback required.";
    exit;
  }

  // verifica data POST
    if(!empty($_GET["token"]))
    {verify_token($_GET["token"]);}
    else
    {
      response_standard("Response error","API token required.");
      /*?>
      {ip:"a"}
      <?php*/
      exit;
    }

    if(
      empty($_GET["A"])
      || empty($_GET["B"])
      ){
        response_standard("Response error ","Variabili non definite");
        exit;
    }


    // se è tutto ok
    $conn_string = "host=localhost port=5432 dbname=mygeo user=*** password=***";
    $conn = pg_connect($conn_string);
    //connect to a database named "test" on the host "sheep" with a username and password


    $query = $_GET["query"];
    $value = $_GET["value"];
    $responseType = $_GET["responseType"];

    if($query=="centroid"){
      $sql ="select st_asgeojson(st_simplify(geom,0.05)) as geojson from province_4326 WHERE istat_prov='015'";
    }
    else if($query=="buffer"){
      $sql ="select
        st_asgeojson(
          ST_Transform(
            st_buffer(
              st_centroid(
                ST_Transform(
                  st_setsrid(geom,4326)
                ,32632)
              )
            ,5000)
          ,4326)
        ) as geojson
        from province_4326 WHERE istat_prov='015'";
    }
    else if($query=="full"){
      $sql ="select st_asgeojson(geom) as geojson from province_4326 WHERE istat_prov='015'";
    }
    else if($query=="list_table"){
      $sql ="
        SELECT table_schema,table_name
        FROM information_schema.tables
        WHERE table_schema = 'public'
        AND NOT(
          table_name = 'geography_columns'
          OR table_name = 'geometry_columns'
          OR table_name = 'raster_columns'
          OR table_name = 'raster_overviews'
          OR table_name = 'spatial_ref_sys'
        )
        ORDER BY table_schema,table_name;
      ";
      //response_standard("Response OK","passed",$query);
      //exit;
    }
    else{
      $sql ="select st_asgeojson(st_centroid(geom)) as geojson from province_4326 WHERE istat_prov='015'";
    }

    $result = pg_query($conn, $sql);

    if($responseType=="geometry"){
      while ($row = pg_fetch_row($result)) {
        $json=$row[0];
      }
    }
    else if($responseType=="nogeometry"){
      $data =array();
      while ($row = pg_fetch_row($result)) {
        //$geojson=$row[0];
        array_push($data, array('table_schema' => $row[0],'table_name' => $row[1]));
      }
      $json = json_encode($data);
    }
    //echo $geojson;

    // risultato se tutto è andato a buon fine
    response_standard("Response OK","Variabili inserite correttamente",$json,$responseType);



    function response_standard($STATUS,$DESCRIPTION,$json,$responseType){
      if($responseType=="geometry"){
        ?>
        runCallback({
          "response": [
            {
              "type": "FeatureCollection",
              "features": [
                {
                  "type": "Feature",
                  "properties": {
                    "service": "Cityplanner 5432",
                    "ResponseTimestamp":"<?php echo date("Y-m-d H:i:s"); ?>",
                    "Status":"<?php echo $STATUS; ?>",
                    "Description":"<?php echo $DESCRIPTION; ?>"
                  },
                  "geometry": <?php echo $json; ?>
                }
              ]
            }
          ]
        });
        <?php
      }
      else if($responseType=="nogeometry"){
        ?>
        runCallbacknogeometry({
          "response": [
            {
              "type": "FeatureCollection",
              "features": [
                {
                  "type": "Feature",
                  "properties": {
                    "service": "Cityplanner 5432",
                    "ResponseTimestamp":"<?php echo date("Y-m-d H:i:s"); ?>",
                    "Status":"<?php echo $STATUS; ?>",
                    "Description":"<?php echo $DESCRIPTION; ?>"
                  },
                  "nogeometry": <?php echo $json; ?>
                }
              ]
            }
          ]
        });
        <?php
      }
      /*?>
      runCallback({
        "response": [

          {
            "properties": {
              "service": "Cassonet",
              "ResponseTimestamp":"<?php echo date("Y-m-d H:i:s"); ?>",
              "Status":"<?php echo $STATUS; ?>",
              "Description":"<?php echo $DESCRIPTION; ?>"
            }
          }
        ]
      });
      <?php*/
    }
    function verify_token($TOKEN){

        if($TOKEN=="ABC"){}
        else{
          response_standard("Response error","API token not valid.");
          exit;
        }

    }

?>
