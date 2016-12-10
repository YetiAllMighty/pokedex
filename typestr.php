<?php
    require_once('appvars.php');
    function strengths ($type){
        switch ($type) {
            case NORMAL :
                echo "<strong><em>Strength</em>:</strong><br><em><strong>None</strong></em>";
                // echo "1/2x -> G1<img src='./imgs/types/" . ROCK . ".png' /> G2+ => <img src='./imgs/types/" . STEEL . ".png' />\t<br>";
                break;
            case FIGHTING :
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . NORMAL . ".png' /><img src='./imgs/types/" . ICE . ".png' />";
                echo "<br><img src='./imgs/types/" . ROCK . ".png' /><img src='./imgs/types/" . DARK . ".png' />";
                echo "<br><img src='./imgs/types/" . STEEL . ".png' />";
                break;
            case  FLYING:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . GRASS . ".png' /><img src='./imgs/types/" . FIGHTING . ".png' />";
                echo "<br><img src='./imgs/types/" . BUG . ".png' />";
                break;
            case POISON:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . GRASS . ".png' /><img src='./imgs/types/" . FAIRY . ".png' />";
                break;
            case GROUND:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . FIRE . ".png' /><img src='./imgs/types/" . ELECTRIC . ".png' />";
                echo "<br><img src='./imgs/types/" . POISON . ".png' /><img src='./imgs/types/" . ROCK . ".png' />";
                echo "<img src='./imgs/types/" . STEEL . ".png' />";
                break;
            case ROCK:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . FIRE . ".png' /><img src='./imgs/types/" . ICE . ".png' />";
                echo "<img src='./imgs/types/" . FLYING . ".png' /><img src='./imgs/types/" . BUG . ".png' />";
                break;
            case BUG:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . GRASS . ".png' /><img src='./imgs/types/" . PSYCHIC . ".png' />";
                echo "<br><img src='./imgs/types/" . DARK . ".png' />";
                break;
            case GHOST:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . PSYCHIC . ".png' /><img src='./imgs/types/" . GHOST . ".png' />";
                break;
            case STEEL:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . ICE . ".png' /><img src='./imgs/types/" . ROCK . ".png' />";
                echo "<br><img src='./imgs/types/" . FAIRY . ".png' />";
                break;
            case FIRE:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . GRASS . ".png' /><img src='./imgs/types/" . ICE . ".png' />";
                echo "<br><img src='./imgs/types/" . BUG . ".png' /><img src='./imgs/types/" . STEEL . ".png' />";
                break;
            case WATER:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . FIRE . ".png' /><img src='./imgs/types/" . GROUND . ".png' />";
                echo "<br><img src='./imgs/types/" . ROCK . ".png' />";
                break;
            case GRASS:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . WATER . ".png' /><img src='./imgs/types/" . GROUND . ".png' />";
                echo "<br><img src='./imgs/types/" . ROCK . ".png' />";
                break;
            case ELECTRIC:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . WATER . ".png' /><img src='./imgs/types/" . FLYING . ".png' />";
                break;
            case PSYCHIC:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . FIGHTING . ".png' /><img src='./imgs/types/" . POISON . ".png' />";
                break;
            case ICE:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . GRASS . ".png' /><img src='./imgs/types/" . GROUND . ".png' />";
                echo "<br><img src='./imgs/types/" . FLYING . ".png' /><img src='./imgs/types/" . DRAGON . ".png' />";
                break;
            case DRAGON:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . DRAGON . ".png' />";
                break;
            case DARK:
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . PSYCHIC . ".png' /><img src='./imgs/types/" . GHOST . ".png' />";
                break;
            case FAIRY :
                echo "<strong><em>Strength</em>:</strong><br><img src='./imgs/types/" . FIGHTING . ".png' /><img src='./imgs/types/" . DRAGON . ".png' />";
                echo "<br><img src='./imgs/types/" . DARK . ".png' />";
                break;
            default:
                echo "<img src='./imgs/types/null.png' />";
                break;
        }
    }

    function weakness($type){
        switch($type) {
            case NORMAL :
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . FIGHTING . ".png' />";
                break;
            case FIGHTING :
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . FLYING . ".png' /><img src='./imgs/types/" . PSYCHIC . ".png' />";
                echo "<br><img src='./imgs/types/" . FAIRY . ".png' />";
                break;
            case  FLYING:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . ELECTRIC . ".png' /><img src='./imgs/types/" . ICE . ".png' />";
                echo "<br><img src='./imgs/types/" . ROCK . ".png' />";
                break;
            case POISON:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . GROUND . ".png' /><img src='./imgs/types/" . PSYCHIC . ".png' />";
                break;
            case GROUND:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . WATER . ".png' /><img src='./imgs/types/" . GRASS . ".png' />";
                echo "<br><img src='./imgs/types/" . ICE . ".png' />";
                break;
            case ROCK:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . WATER . ".png' /><img src='./imgs/types/" . GRASS . ".png' />";
                echo "<br><img src='./imgs/types/" . FIGHTING . ".png' /><img src='./imgs/types/" . GROUND . ".png' />";
                echo "<br><img src='./imgs/types/" . STEEL . ".png' />";
                break;
            case BUG:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . FIRE . ".png' /><img src='./imgs/types/" . FLYING . ".png' />";
                echo "<br><img src='./imgs/types/" . ROCK . ".png' />";
                break;
            case GHOST:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . GHOST . ".png' /><img src='./imgs/types/" . DARK . ".png' />";
                break;
            case STEEL:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . FIRE . ".png' /><img src='./imgs/types/" . FIGHTING . ".png' />";
                echo "<br><img src='./imgs/types/" . GROUND . ".png' />";
                break;
            case FIRE:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . WATER . ".png' /><img src='./imgs/types/" . GROUND . ".png' />";
                echo "<br><img src='./imgs/types/" . ROCK . ".png' />";
                break;
            case WATER:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . ELECTRIC . ".png' /><img src='./imgs/types/" . GRASS . ".png' />";
                break;
            case GRASS:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . FIRE . ".png' /><img src='./imgs/types/" . ICE . ".png' />";
                echo "<br><img src='./imgs/types/" . POISON . ".png' /><img src='./imgs/types/" . FLYING . ".png' />";
                echo "<br><img src='./imgs/types/" . BUG . ".png' />";
                break;
            case ELECTRIC:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . GROUND . ".png' />";
                break;
            case PSYCHIC:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . BUG . ".png' /><img src='./imgs/types/" . GHOST . ".png' />";
                echo "<br><img src='./imgs/types/" . DARK . ".png' />";
                break;
            case ICE:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . FIRE . ".png' /><img src='./imgs/types/" . FIGHTING . ".png' />";
                echo "<br><img src='./imgs/types/" . ROCK . ".png' /><img src='./imgs/types/" . STEEL . ".png' />";
                break;
            case DRAGON:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . ICE . ".png' /><img src='./imgs/types/" . DRAGON . ".png' />";
                echo "<br><img src='./imgs/types/" . FAIRY . ".png' />";
                break;
            case DARK:
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . FIGHTING . ".png' /><img src='./imgs/types/" . BUG . ".png' />";
                echo "<br><img src='./imgs/types/" . FAIRY . ".png' />";
                break;
            case FAIRY :
                echo "<strong><em>Weakness</em>:</strong><br><img src='./imgs/types/" . POISON . ".png' /><img src='./imgs/types/" . STEEL . ".png' />";
                break;
            default:
                echo "<img src='./imgs/types/null.png' />";
                break;
        }
    }
?>