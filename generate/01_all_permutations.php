<?php

cli_set_process_title("menace_GEN");

gen();


function gen($len = 9, $part = '', $chars = "123456789 ")
{
    for ($i = 0; $i < strlen($chars); $i++) {
        $char = $chars[$i];
        if ($char === ' ') {
            echo $part, "\n";
            break;
        }
        if (false !== strpos($part, $char)) {
            continue;
        }

        if ($len > 1) {
            gen($len - 1, $part . $char, $chars);

        } else {
            echo $part, $char, "\n";
        }
    }
}