<?php
session_start(); // el session estaba mal escrito 
session_destroy();
header("Location: iniciarsesion.html");
exit;
?>