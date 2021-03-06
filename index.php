<?php
    require_once('header.php');
    require_once('nav.php');
    require_once('connectvars.php');
    require_once('typestr.php');
    //Currently set up to use connect vars or whatever url you pass
    $url = getenv('JAWSDB_URL');
    $dbparts = parse_url($url);

    $host = $dbparts['host'] ?: HOST;
    $user = $dbparts['user'] ?: USER;
    $pw = $dbparts['pass'] ?: PW;
    $db = ltrim($dbparts['path'],'/') ?: DB;
    if(isset($_POST['submit'])){
        $dbc = mysqli_connect($host, $user, $pw, $db)
                or die('Unable to connect to database, please try again');
        $search = mysqli_real_escape_string($dbc, trim($_POST['search']));
        $mod = $_POST['mod'];
        if(!empty($search)){
            if($mod == "Name"){
                $query = "SELECT * FROM pokedex WHERE identifier LIKE '%$search%' ORDER BY species_id";
            } else {
                $query = "SELECT * FROM pokedex WHERE $mod=$search ORDER BY species_id";
            }
            $result = mysqli_query($dbc, $query);
            echo "<div class='container-fluid'><div class='row'>";//#1#2
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                   $progress_class;
                   $hp_len;
                   echo '<div class="col-xl-6" style="padding: 1.5em;">';//#3
                   echo '<div class="col-md-2" style="border-right: 1px solid black;">';//#4
                   echo '<img src="./imgs/' . $row['pic'] . '" style="max-width:100%; max-height: 100%;" class="center"/>';
                   echo '</div>';//#4
                   echo '<div class="col-md-10">';//#5
                   echo '<div class="col-md-12">' . ucfirst($row['identifier']) . '<span style="float: right"><strong>#' . $row['species_id'] .  '</strong></span></div><hr>';//#6#6x
                   echo '<div class="col-md-12">';//#7
                   if($row['Health'] > 100){
                       $progress_class = 'progress-bar progress-bar-danger';
                       $hp_len = 100;
                   }
                   if($row['Health'] >= 70 && $row['Health'] <= 100){
                       $progress_class = 'progress-bar progress-bar-success';
                       $hp_len = $row['Health'];
                   }
                   if($row['Health'] >= 50 && $row['Health'] <= 69){
                       $progress_class = 'progress-bar progress-bar-info';
                       $hp_len = $row['Health'];
                   }
                   if($row['Health'] < 50) {
                       $progress_class = 'progress-bar progress-bar-warning';
                       $hp_len = $row['Health'];
                   }
                   echo '<div class="progress"><div class="'. $progress_class .'" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:' . $hp_len .'%">Health: ' . $row['Health'] . '</div></div>';//#8#8x#9#9x
                   echo '<strong>Attack</strong>:' . $row['Attack'] . ' <strong>Defense</strong>: ' . $row['Defense'];
                   echo '<br><strong>Speed</strong>: ' . $row['speed'] . ' <strong>S-Attack</strong>: ' . $row['sattack'] .  ' <strong>S-Defense</strong>: ' . $row['sdefense'] .  '</div>';
                   echo '<div class="col-md-12"><hr><div class="col-md-2">'; //#7x#10
                   if(!empty($row['pre_evolution'])){
                       echo '<p><em>Ev. From-></em> <strong><em>' . $row['pre_evolution'] . '</em></strong></p></div>';
                   } else {
                       echo '</div>';
                   }
                   echo '<div class="col-md-4" align="center" style="padding:1em;">';
                    strengths($row['type']);
                   echo '</div>';
                   echo '<div class="col-md-3" align="center" style="padding:1em;">';
                    weakness($row['type']);
                   echo '</div>';
                   echo '<div class="col-md-3" align="right" style="border-left: 1px solid black"><hr><span style="float: left;"><strong><em>Type</em></strong>:</span><img src="./imgs/types/' . $row['type'] . '.png" />';
                   if(!is_null($row['type_2'])){
                       echo '<img src="./imgs/types/' . $row['type_2'] . '.png" /><hr></div>';
                   } else {
                       echo '<hr></div>';
                   }
                   echo '<br><br><br></div></div><br><hr></div>';#10x#7x#5x
                }
            }
        } else {
            echo "No Results!";
        }
        echo "</div></div>"; //#1x#2x
    }
    require_once('footer.php');
?>
