<?php

while (!feof(STDIN)) {
    $game=fgets(STDIN,16);
    if(!strlen(trim($game))) continue;
    echo "\n---";
    for($x=0;$x<3;$x++){
        echo "\n";
        for($y=0;$y<3;$y++){
            $char=$game[$x+3*$y];
            switch ($char){
                case 1:
                    echo "X";
                    break;
                case 2:
                    echo "O";
                    break;
                case 0:
                    echo "·";
                    break;
                default:
                    echo '#';
            }
        }
    }
}