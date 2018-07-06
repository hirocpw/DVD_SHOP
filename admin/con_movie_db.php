<?php

$db = mysqli_connect("localhost", "pchen12", "22657624") or die ("<h1>Error - No connection to MySQL</h1>\n");

$er = mysqli_select_db($db,"pchen12_moviezone_db")or die ("<h1>Error - No connection to Database</h1>\nProbably don't have Privileges\n");

?>