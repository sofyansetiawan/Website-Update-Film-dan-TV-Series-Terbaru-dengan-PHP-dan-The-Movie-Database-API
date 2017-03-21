<?php
  include "conf/info.php";
  $title="Welcome to";
  include_once "header.php";
?>
    <h1>~ Top Rated Movies ~</h1>
    <hr>
    <ul>
      <?php
        include_once "api/api_toprated.php";
        foreach($toprated->results as $p){
          echo '<li><a href="movie.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w500'. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5></a></li>";
        }
      ?>
    </ul>

<?php
  include_once "footer.php";
?>