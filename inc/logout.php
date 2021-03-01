<?php

session_start();

unset($_SESSION['userID']);
unset($_SESSION['userRole']);
unset($_SESSION['userName']);
unset($_SESSION['bN']);

session_destroy();

header("location:../login");

?>