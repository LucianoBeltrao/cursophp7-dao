<?php

//$ts = strtotime("2001-09-11");
$ts = strtotime("+ 1 hour");

echo date('l, d/m/Y', $ts);