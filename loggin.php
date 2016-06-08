<?php
session_start();
include './class/Cookies.php';
include './class/Session.php';
if($_POST):
    $recordar = (isset($_POST["recordar"]))? TRUE: FALSE;
    $session = new Session($_POST["user"], $_POST["pass"], $recordar);
    
    if($session->doValidation()):
        header("location: menu.php");
    else:
        header("location: index.php?msg=1");
    endif;
    
endif;