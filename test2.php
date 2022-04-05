<?php
    session_start();
    $_SESSION["name"] = $_GET['fname'];

    echo "Hello ". $_SESSION["name"];
?>