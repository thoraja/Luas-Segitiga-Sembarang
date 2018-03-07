<?php 
    function luas($a, $b, $c) {
        $s = ($a + $b + $c) / 2;
        $luas = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
        return $luas;
    }
    $x = luas('5', '7', '8');
    echo "$x";
?>