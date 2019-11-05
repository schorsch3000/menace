<?php

cli_set_process_title("menace_filter_second");

while (!feof(STDIN)) {
    $board = fgets(STDIN, 16);
    if ((strlen($board) % 2)) {
        echo $board;
    }
}