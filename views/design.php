<?php
/*echo "$\\   \\   |   /   /^\n";
echo "$ \\   |  |  |   / ^\n";
echo "$  \\  \\  |  /  /  ^\n";
echo "$   \\  | | | /   ^\n";*/
$view = <<<VUE
ggggggggggggggggggggggggggggggggggg
\$.       .       .       .       .^
\$  .      .      .      .      .  ^
\$    .     .     .     .     .    ^
\$_.____.____.____.____.____.____._^
\$.   .   .   .   .   .   .   .   .^
\$_.__.__.__.__.__.__.__.__.__.__._^
\$._._._._._._._._._._._._._._._._.^
\$.................................^
\$._._._._._._._._._._._._._._._._.^
\$_.__.__.__.__.__.__.__.__.__.__._^
\$.   .   .   .   .   .   .   .   .^
\$_.____.____.____.____.____.____._^
\$    .     .     .     .     .    ^
\$  .      .      .      .      .  ^
\$.       .       .       .       .^
GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG\n\n\n\n
VUE;
echo $view;
$x = $y = 0;
$res = 4;
if (isset($argv[1])) $x = $argv[1];
if (isset($argv[2])) $y = $argv[2];
if (isset($argv[3])) $res = $argv[3];
$vue = '';
for ($i = 0; $i < pow(2,$res) + 1; $i++) {
    $line = '$';
    for ($j = 0; $j < pow(2,$res + 1) + 1; $j++) {
        if ($i == 0) {
            $line .= 'g';
            continue;
        }
        if ($i == pow(2,$res - 1)) {
            $line .= '.';
            continue;
        }
        if ($i == pow(2,$res)) {
            $line .= 'G';
            continue;
        }
        if ($i < pow(2,$res - 1)) {
            if ($j % (pow(2,$res) - $i + 1) == ($i - 1) * 2) $line .= '.';
            else $line .= ' ';
        }
    }
    $vue .= $line."^\n";
}
echo $vue;
