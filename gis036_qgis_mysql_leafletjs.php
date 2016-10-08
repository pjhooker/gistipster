<?php
$dbhost = 'localhost:3036';
$dbuser = 'user';
$dbpass = 'user';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
$sql = "SELECT X(test) as lng, Y(test) as lat FROM test_geom";
mysql_select_db( 'ushahidi' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
die('Could not create table: ' . mysql_error());
}

$geojson = array( 'type' => 'FeatureCollection', 'features' => array());

while($row = mysql_fetch_assoc($retval)){

// inizio generazione array JSON
$marker = array(
'type' => 'Feature',
'features' => array(
'type' => 'Feature',
'properties' => array(
'title' => "name",
'marker-color' => '#f00',
'marker-size' => 'small'
//'url' =>
),
"geometry" => array(
'type' => 'Point',
'coordinates' => array(
$row[lng],
$row[lat]
)
)
)
);
array_push($geojson['features'], $marker['features']);
// fine array JSON
}
mysql_close($conn);

echo json_encode($geojson,JSON_NUMERIC_CHECK);

?>
