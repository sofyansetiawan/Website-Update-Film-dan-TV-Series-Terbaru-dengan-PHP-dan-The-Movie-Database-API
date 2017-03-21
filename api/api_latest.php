<?php

$cl = curl_init();
curl_setopt($cl, CURLOPT_URL, "http://api.themoviedb.org/3/movie/latest?api_key=" . $apikey);
curl_setopt($cl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($cl, CURLOPT_HEADER, FALSE);
curl_setopt($cl, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response3 = curl_exec($cl);
curl_close($cl);
$latest = json_decode($response3);
?>