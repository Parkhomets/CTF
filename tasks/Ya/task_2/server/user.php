<?php
if (!empty($_GET["id"])){
    $db = new SQLite3('base.sqlite');
    $id = $_GET["id"];
    $secret = $db->querySingle("SELECT username from users WHERE id='".$id."'");
    if (!empty($secret)){
        echo "Hello ".$secret;
    }
    else{
        echo "No user with id=".$id;
    }
}
?>

