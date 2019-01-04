<?php
    function IntersectionOfCircle($x, $y, $r1, $r2) {
        if (($y - $x) < ($r1 + $r2)) {
            echo("YES");
        } else {
            echo("NO");
        }
    }

    IntersectionOfCircle(1, 7, 3, 3);