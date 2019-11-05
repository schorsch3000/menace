<?php

cli_set_process_title("menace_filter_full");

while (!feof(STDIN)) {
    $game = fgets(STDIN, 16);
    if(strlen($game) < 9){
        echo $game;
    }
}