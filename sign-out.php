<?php
    // Clear Session
    session_start();
    session_destroy();
    header("Location: index.php");
?>