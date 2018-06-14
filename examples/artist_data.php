<?php

# load the SDK
include '../collection.php';
# load the config file that contains your API key
include '../config.php';

# initialize the SDK with your API key
$collection = new SfmomaCollectionBase(SFMOMA_API_KEY);

/* 
$query_params array can be a list of any available filters
For a list of filters visit: https://www.sfmoma.org/api/collection/docs/

*/

$query_params = array(
	"name_display__icontains" => 'Adams',
);

$artists = $collection->get_artist_data($query_params);

header('Content-Type: application/json');
$response_json = json_encode($artists);
echo($response_json);

?>