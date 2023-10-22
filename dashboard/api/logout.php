<?php   
    session_start();
    session_destroy();
    header('Location: ../smarafrfid/page/login.html');
?>  