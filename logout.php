<?php
session_start();
session_unset();
session_destroy();
echo "<script>window.open('./mainpage(1).php','_self')</script>";


?>