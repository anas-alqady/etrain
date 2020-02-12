<?php
session_start();
session_unset();
session_destroy();
header("location: http://localhost/project-forms/login.php");
//end
