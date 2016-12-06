<?php
    require_once('header.php');
    require_once('connectvars.php');
    require_once('nav.php');

    $title = 'Pokédex';
    if(isset($_POST['submit'])){
        $dbc = mysqli_connect(HOST, USER, PW, DB)
                or die('Unable to connect to database, please try again');
        $search = mysqli_real_escape_string($dbc, trim($_POST['search']));
        $mod = $_POST['mod'];
        if($mod == "Name"){
            $query = "SELECT * FROM pokedex WHERE identifier LIKE '$search' ORDER BY species_id";
        } else {
            $query = "SELECT * FROM pokedex WHERE $mod LIKE '$search' ORDER BY species_id";
        }
        $result = mysqli_query($dbc, $query);
        echo "<div class='container-fluid'><div class='row'>";//#1#2
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
               $progress_class;
               echo '<div class="col-xl-6" style="padding: 1.5em;">';//#3
               echo '<div class="col-md-2" style="border-right: 1px solid black;">';//#4
               echo '<img src="./imgs/' . $row['pic'] . '" style="max-width:100%; max-height: 100%;" class="center"/>';
               echo '</div>';//#4
               echo '<div class="col-md-10">';//#5
               echo '<div class="col-md-12">' . ucfirst($row['identifier']) . '<span style="float: right"><strong>#' . $row['species_id'] .  '</strong></span></div><hr>';//#6#6x
               echo '<div class="col-md-12">';//#7
               if($row['Health'] >= 70 && $row['Health'] <= 100){
                   $progress_class = 'progress-bar progress-bar-success';
               }
               if($row['Health'] >= 50 && $row['Health'] <= 69){
                   $progress_class = 'progress-bar progress-bar-info';
               }
               if($row['Health'] < 50) {
                   $progress_class = 'progress-bar progress-bar-warning';
               }
               echo '<div class="progress"><div class="'. $progress_class .'" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:' . $row['Health'].'%">' . $row['Health'] . '</div></div>';//#8#8x#9#9x
               echo '<strong>Attack</strong>:' . $row['Attack'] . ' <strong>Defense</strong>: ' . $row['Defense'];
               echo '<br><strong>Speed</strong>: ' . $row['speed'] . ' <strong>S-Attack</strong>: ' . $row['sattack'] .  ' <strong>S-Defense</strong>: ' . $row['sdefense'] .  '</div>';
               echo '<div class="col-md-12"><hr><p>'; //#7x#10
               if(!is_null($row['type_2'])){
                   echo '<img align="right" src="./imgs/types/' . $row['type_2'] . '.png" />';
               }
               echo '<img align="right" src="./imgs/types/' . $row['type'] . '.png" />';
               if(!empty($row['pre_evolution'])){
                   echo '<em>Previous form -></em> <strong><em>' . $row['pre_evolution'] . '</em></strong>';
               }
               echo '</p><br><br></div></div></div>';#10x#7x#5x
            }
        } else {
            echo "No Results!";
        }
        echo "</div></div>"; //#1x#2x
    }


    require_once('footer.php');
?>