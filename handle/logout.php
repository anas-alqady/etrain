<?php
session_start();
session_unset();
session_destroy();
header("location: http://localhost/hemma-1/login.php");
//end
