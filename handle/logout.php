<?php
session_start();
session_unset();
session_destroy();
header("location: http://localhost/hemmah-1/login.php");
//end
