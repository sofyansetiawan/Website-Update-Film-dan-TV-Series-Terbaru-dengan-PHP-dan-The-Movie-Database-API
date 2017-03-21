<?php


$ctp = curl_init();
curl_setopt($ctp, CURLOPT_URL, "http://api.themoviedb.org/3/tv/on_the_air?api_key=" . $apikey);
curl_setopt($ctp, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ctp, CURLOPT_HEADER, FALSE);
curl_setopt($ctp, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response12 = curl_exec($ctp);
curl_close($ctp);
$tv_onair = json_decode($response12);

$ctr = curl_init();
curl_setopt($ctr, CURLOPT_URL, "http://api.themoviedb.org/3/tv/top_rated?api_key=" . $apikey);
curl_setopt($ctr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ctr, CURLOPT_HEADER, FALSE);
curl_setopt($ctr, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response13 = curl_exec($ctr);
curl_close($ctr);
$tv_top = json_decode($response13);

?>