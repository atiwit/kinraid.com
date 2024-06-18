<?php
// Replace 'YOUR_API_KEY' with your actual Google Places API key
$apiKey = 'AIzaSyBMZt-WtD0bzzDbDDACLQF0KoLFKsW5qQ4';

if (!isset($_GET['lat']) || !isset($_GET['lng'])) {
    echo json_encode(['status' => 'ไม่สามารถหาที่อยู่ของคุณได้']);
    exit();
}

$lat = $_GET['lat'];
$lng = $_GET['lng'];

$utf8_string = $_COOKIE['nameutf8'];
$keyword = mb_convert_encoding($utf8_string, 'ISO-8859-1', 'UTF-8');

$apiUrl = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location={$lat},{$lng}&radius=35000&keyword={$keyword}&key={$apiKey}&language=th&fields" ; 
$response = file_get_contents($apiUrl);
echo $response;
?>
