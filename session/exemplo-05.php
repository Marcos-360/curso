<?php

//session_start();
require_once("config.php");

//muda a session a cada refresh
session_regenerate_id();

echo session_id();

?>