<?php
session_start();
session_destroy();
header("Location: http://localhost/obs/main/index.php");
?>