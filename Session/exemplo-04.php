<?php

session_id('debkphde3rermmkufll0eu3ae8');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?> 