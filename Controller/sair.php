<?php
session_start();
session_destroy();
$msg = "Saiu!";
header("location: ../View/index.php?msg={$msg}");
