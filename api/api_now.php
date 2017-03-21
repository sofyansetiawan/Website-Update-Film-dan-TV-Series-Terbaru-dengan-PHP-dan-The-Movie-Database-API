<?php


$cn = curl_init();
curl_setopt($cn, CURLOPT_URL, "http://api.themoviedb.org/3/movie/now_playing?api_key=" . $apikey);
curl_setopt($cn, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($cn, CURLOPT_HEADER, FALSE);
curl_setopt($cn, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response6 = curl_exec($cn);
curl_close($cn);
$nowplaying = json_decode($response6);

?>