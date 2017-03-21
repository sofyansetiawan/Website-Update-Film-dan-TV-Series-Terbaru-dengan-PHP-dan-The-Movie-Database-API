<?php


$cv = curl_init();
curl_setopt($cv, CURLOPT_URL, "http://api.themoviedb.org/3/movie/".$id_movie."/videos?api_key=" . $apikey);
curl_setopt($cv, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($cv, CURLOPT_HEADER, FALSE);
curl_setopt($cv, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response8 = curl_exec($cv);
curl_close($cv);
$movie_video_id = json_decode($response8);
?>