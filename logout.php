<?php
session_start();
session_destroy();
header("location:index.php?travel and tourism=".sha1('tourism'));
?>