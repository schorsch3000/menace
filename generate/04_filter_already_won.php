<?php

cli_set_process_title("menace_filter_pre_won");

while (!feof(STDIN)) {
    $game = fgets(STDIN, 16);
    $boards = ["         ", "         "];
    for ($i = 0; $i < strlen($game) - 1; $i++) {
        $boards[$i % 2][$game[$i]-1] = "#";
    }
    foreach ($boards as $board) {
        // -
        for ($i = 0; $i < 3; $i++) {
            if (substr($board, 3 * $i, 3) === '###') {
                continue 3;
            }
        }
        // |
        for ($i = 0; $i < 3; $i++) {
            if (
                substr($board, $i + 0, 1) .
                substr($board, $i + 3, 1) .
                substr($board, $i + 6, 1)
                === '###') {
                continue 3;
            }
        }
        // \
        if (
            substr($board, 0, 1) .
            substr($board, 4, 1) .
            substr($board, 8, 1)
            === '###') {
            continue 2;
        }
        // /
        if (
            substr($board, 2, 1) .
            substr($board, 4, 1) .
            substr($board, 6, 1)
            === '###') {
            continue 2;
        }
    }
    echo $game;
}