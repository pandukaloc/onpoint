<?php
require 'index5.php';
session_destroy();
header('Location: '.$http_referer );

?>