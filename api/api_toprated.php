<?php

$ct = curl_init();
curl_setopt($ct, CURLOPT_URL, "http://api.themoviedb.org/3/movie/top_rated?api_key=" . $apikey);
curl_setopt($ct, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ct, CURLOPT_HEADER, FALSE);
curl_setopt($ct, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response5 = curl_exec($ct);
curl_close($ct);
$toprated = json_decode($response5);

?>