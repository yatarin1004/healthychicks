<?php
    session_start();
    session_destroy();
    header("location:../main/login_admin.php");
?>