<?php

cli_set_process_title("menace_to_static");

while (!feof(STDIN)) {
    $game = fgets(STDIN, 16);
    $board = "000000000\n";
    for ($i = 0; $i < strlen($game) - 1; $i++) {
        $board[-1 + $game[$i]] = ($i % 2) ? '2' : '1';
    }
    echo $board;
}