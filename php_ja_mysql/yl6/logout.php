<title>Logging out...</title>
<?php

session_start();
session_destroy();

header("Location: login.php");
exit();

?>

<a href='login.php'>Sisse logima</a>
