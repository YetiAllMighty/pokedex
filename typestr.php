<?php
    function types ($type){
        $normal = 1;
        $fighting = 2;
        $flying = 3;
        $poison = 4;
        $ground = 5;
        $rock = 6;
        $bug = 7;
        $ghost = 8;
        $steel = 9;
        $fire = 10;
        $water = 11;
        $grass = 12;
        $electric = 13;
        $psychic= 14;
        $ice = 15;
        $dragon = 16;
        $dark = 17;
        $fairy = 18;

        switch ($type) {
            case $normal:
                echo "2x -> <em><strong>None</strong></em>\t";
                // echo "1/2x -> G1<img src='./imgs/types/$rock.png' /> G2+ => <img src='./imgs/types/$steel.png' />\t<br>";
                // echo "0x -> <img src='./imgs/types/$ghost.png' />";
                break;
            case $fighting:
                echo "2x -><img src='./imgs/types/$normal.png' /><img src='./imgs/types/$ice.png' /><img src='./imgs/types/$rock.png' />\t";
                echo "<img src='./imgs/types/$dark.png' /><img src='./imgs/types/$steel.png' /><br>";
                // echo "0x -> <img src='./imgs/types/$ghost.png' />";
                break;
            case $flying:
                echo "2x -> <img src='./imgs/types/$grass.png' /><img src='./imgs/types/$fighting.png' /><img src='./imgs/types/$bug.png' />";
                // echo "0x";
                break;
            case $poison:
                echo "2x -> <img src='./imgs/types/$grass.png' /><img src='./imgs/types/$fairy.png' />";
                break;
            case $ground:
                echo "2x -> <img src='./imgs/types/$fire.png' /><img src='./imgs/types/$electric.png' /><img src='./imgs/types/$poison.png' />";
                echo "<img src='./imgs/types/$rock.png' /><img src='./imgs/types/$steel.png' />";
                break;
            case $rock:
                echo "2x -> <img src='./imgs/types/$fire.png' /><img src='./imgs/types/$ice.png' /><img src='./imgs/types/$flying.png' />";
                echo "<img src='./imgs/types/$bug.png' />";
                break;
            case $bug:
                echo "2x -> <img src='./imgs/types/$grass.png' /><img src='./imgs/types/$psychic.png' />";
                echo "<img src='./imgs/types/$dark.png' />";
                break;
            case $ghost:
                echo "2x -> <img src='./imgs/types/$psychic.png' /><img src='./imgs/types/$ghost.png' />";
                break;
            case $steel:
                echo "2x -> <img src='./imgs/types/$ice.png' /><img src='./imgs/types/$rock.png' /><img src='./imgs/types/$fairy.png' />";
                break;
            case $fire:
                echo "2x -> <img src='./imgs/types/$grass.png' /><img src='./imgs/types/$ice.png' /><img src='./imgs/types/$bug.png' />";
                echo "<img src='./imgs/types/$steel.png' />";
                break;
            case $water:
                echo "2x -> <img src='./imgs/types/$fire.png' /><img src='./imgs/types/$ground.png' /><img src='./imgs/types/$rock.png' />";
                break;
            case $grass:
                echo "2x -> <img src='./imgs/types/$water.png' /><img src='./imgs/types/$ground.png' /><img src='./imgs/types/$rock.png' />";
                break;
            case $electric:
                echo "2x -> <img src='./imgs/types/$water.png' /><img src='./imgs/types/$flying.png' />";
                break;
            case $psychic:
                echo "2x -> <img src='./imgs/types/$fighting.png' /><img src='./imgs/types/$poison.png' />";
                break;
            case $ice:
                echo "2x -> <img src='./imgs/types/$grass.png' /><img src='./imgs/types/$ground.png' /><img src='./imgs/types/$flying.png' />";
                echo "<img src='./imgs/types/$dragon.png' />";
                break;
            case $dragon:
                echo "2x -> <img src='./imgs/types/$dragon.png' />";
                break;
            case $dark:
                echo "2x -> <img src='./imgs/types/$psychic.png' /><img src='./imgs/types/$ghost.png' />";
                break;
            case $fairy:
                echo "2x -> <img src='./imgs/types/$fighting.png' /><img src='./imgs/types/$dragon.png' /><img src='./imgs/types/$dark.png' />";
                break;
            default:
                echo "<img src='./imgs/types/null.png' />";
                break;
        }
    }
?>