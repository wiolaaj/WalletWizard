<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('Logged Out');window.location='../index.php';</script>";
exit();
?>