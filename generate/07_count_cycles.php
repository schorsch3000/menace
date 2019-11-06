<?php
while (!feof(STDIN)) {
    $game = fgets(STDIN, 16);
    echo 9-substr_count($game,0);
    echo " ",$game;

}