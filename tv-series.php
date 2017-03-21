<?php
  include "conf/info.php";
  $title="TV Series";
  include_once "header.php";
?>

    <?php
      include_once "api/api_tv.php";
    ?>
        <h3>On Air TV Show</h3>
        <hr>
          <?php
            foreach($tv_onair->results as $tp){
              $dd = date('d F Y', strtotime($tp->first_air_date));
              echo '<h3><a href="tvshow.php?id=' . $tp->id . '">'. $tp->original_name .'</a></h3><p>First Air Date : '.$dd.'</p><p>Popularity : '.round($tp->popularity).'</p>';
            }
          ?>

        <h3>Top Rated TV Show</h3>
        <hr>
        <ul>
          <?php
            foreach($tv_top->results as $tt){
              $de = date('d F Y', strtotime($tt->first_air_date));
              echo '<li><a href="tvshow.php?id=' . $tt->id . '"><img src="'.$imgurl_2.''. $tt->poster_path . '"><h4>' . $tt->original_name . "</h4><h5><em>First Air Date : ".$tt->first_air_date."<br />Popularity : " . round($tt->popularity) . "</em></h5></a></li>";
            }
          ?>
        </ul>
      </div>
    </div>
    

<?php
  include_once "footer.php";
?>