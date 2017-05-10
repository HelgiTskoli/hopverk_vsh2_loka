<?php 
session_start();
unset($_SESSION["n1cart"]);
unset($_SESSION["n2cart"]);
unset($_SESSION["n3cart"]);
unset($_SESSION["n4cart"]);
unset($_SESSION["n5cart"]);
unset($_SESSION["sum"]);
header("Location: ../../");

?>