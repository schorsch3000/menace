<?php

cli_set_process_title("menace_flip_rot");

while (!feof(STDIN)) {
    $game = fgets(STDIN, 16);

    $permutations=[trim($game)];

    $permutations[]=
        $game[2].
        $game[1].
        $game[0].
        $game[5].
        $game[4].
        $game[3].
        $game[8].
        $game[7].
        $game[6];

    $permutations[]=
        $game[6].
        $game[3].
        $game[0].
        $game[7].
        $game[4].
        $game[1].
        $game[8].
        $game[5].
        $game[2];

    $permutations[]=
        $game[8].
        $game[5].
        $game[2].
        $game[7].
        $game[4].
        $game[1].
        $game[6].
        $game[3].
        $game[0];

    $permutations[]=
        $game[8].
        $game[7].
        $game[6].
        $game[5].
        $game[4].
        $game[3].
        $game[2].
        $game[1].
        $game[0];

    $permutations[]=
        $game[6].
        $game[7].
        $game[8].
        $game[3].
        $game[4].
        $game[5].
        $game[0].
        $game[1].
        $game[2];

    $permutations[]=
        $game[2].
        $game[5].
        $game[8].
        $game[1].
        $game[4].
        $game[7].
        $game[0].
        $game[3].
        $game[6];

    $permutations[]=
        $game[0].
        $game[3].
        $game[6].
        $game[1].
        $game[4].
        $game[7].
        $game[2].
        $game[5].
        $game[8];

    asort($permutations);
    echo array_shift($permutations),"\n";



}