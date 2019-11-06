<?php
$colors = [
    ["name" => "Weiß", "hex" => "ddd"],
    ["name" => "Gelb", "hex" => "ffff00"],
    ["name" => "Orange", "hex" => "ff8800"],
    ["name" => "Rot", "hex" => "ff0000"],
    ["name" => "Blau", "hex" => "0000ff"],
    ["name" => "Braun", "hex" => "8B4513"],
    ["name" => "Schwarz", "hex" => "000000"],
    ["name" => "Grün", "hex" => "00ff00"],
    ["name" => "Pink", "hex" => "00ffff"],
];
?>
<html>
<head>
    <meta http-equiv="refresh" content="100">
    <style>
        .bottom, .front {
            border: .1mm solid black;
            display: inline-block;
            padding: 3mm;
            margin: 5mm;
            text-align: center;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            margin: 0 auto;
        }

        table td {
            height: 5mm;
            width: 5mm;
            overflow: hidden;
            text-align: center;
        }

        table td.X:after {
            content: "X";
        }

        table td.O:after {
            content: "O";
        }

        <?php
foreach($colors as $n => $c){
    echo "table td.C_$n{
            background-color: #",$c['hex'],"
        }
        ";
}

 ?>


        table td.pos_0,
        table td.pos_1,
        table td.pos_2,
        table td.pos_3,
        table td.pos_4,
        table td.pos_5 {
            border-bottom: .3mm solid black;
        }

        table td.pos_0,
        table td.pos_1,
        table td.pos_2,
        table td.pos_3,
        table td.pos_4,
        table td.pos_5,
        {
            border-top: .3mm solid black;
        }

        table td.pos_1,
        table td.pos_2,
        table td.pos_4,
        table td.pos_5,
        table td.pos_7,
        table td.pos_8 {
            border-left: .3mm solid black;
        }

        table td.pos_0,
        table td.pos_1,
        table td.pos_3,
        table td.pos_4,
        table td.pos_6,
        table td.pos_7 {
            border-right: .3mm solid black;
        }

        .round {
            text-align: center;
            margin: 0 0 3mm;
        }

        body {
            font-family: monospace;
        }

        .board{
            display: inline-block;
            width: 50mm;
        }

        .bottom table{
            zoom: 150%;
        }
        .bottom {
            width: 25mm;
            height: 45mm;
        }

        .front {
            width: 25mm;
            height: 8mm;
        }

        .front .round{
            float:left;
        }
        .front table {
            zoom: 70%;
            float:right;
        }


    </style>
</head>
<body>
<?php
while (!feof(STDIN)) {
    $board = fgets(STDIN,
        32);
    $board = explode(" ", $board, 2);
    $round = $board[0];
    $board = $board[1];
    if (strlen($board) < 2) continue;
    ?>
    <div class="board">
        <div class="front">
            <div class='round'> <?= $round ?></div>
            <table><?php
                for ($x = 0; $x < 3; $x++) {
                    echo "<tr>";
                    for ($y = 0; $y < 3; $y++) {
                        echo "<td class='";
                        $n = $y + 3 * $x;
                        echo "pos_$n ";
                        switch ($board[$n]) {
                            case '1':
                                echo "X";
                                break;
                            case '2':
                                echo "O";
                                break;
                            default:
                                echo "C_$n";

                        }
                        echo "'></td>";
                    }
                    echo "</tr>";
                }

                ?></table>

        </div>
        <div class="bottom">
            <div class='round'>Round <?= $round ?></div>
            <div class='round'>ID <?= 1 + ceil(base_convert($board, 3, 10) / 2) ?></div>
            <table><?php
                for ($x = 0; $x < 3; $x++) {
                    echo "<tr>";
                    for ($y = 0; $y < 3; $y++) {
                        echo "<td class='";
                        $n = $y + 3 * $x;
                        echo "pos_$n ";
                        switch ($board[$n]) {
                            case '1':
                                echo "X";
                                break;
                            case '2':
                                echo "O";
                                break;
                            default:
                                echo "C_$n";

                        }
                        echo "'></td>";
                    }
                    echo "</tr>";
                }

                ?></table>
        </div>
    </div>
    <?php
}
?>


</body>
</html>

