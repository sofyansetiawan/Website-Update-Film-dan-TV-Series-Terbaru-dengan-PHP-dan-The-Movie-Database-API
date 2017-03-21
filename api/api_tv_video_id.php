<?php


$ctv = curl_init();
curl_setopt($ctv, CURLOPT_URL, "http://api.themoviedb.org/3/tv/".$id_tv."/videos?api_key=" . $apikey);
curl_setopt($ctv, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ctv, CURLOPT_HEADER, FALSE);
curl_setopt($ctv, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response17 = curl_exec($ctv);
curl_close($ctv);
$tv_video_id = json_decode($response17);
?>