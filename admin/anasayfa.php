<?php

if(!isset($_SESSION))
{
    session_start();
}

if(isset($_SESSION["Admin"])){
    echo "oturum açık<br>";
    echo $_SESSION["Admin"];
    echo '<br><a href="cikis.php">çıkış</a>';
} else {
    echo "oturum kapalı";
    echo $_SESSION["Admin"];
}
?>