<html>
    <body>
        <form action="admin.php" method="POST">
            <input name="username" value=" ">
            <input type="submit" name="get_info">
        </form>
    </body>
</html>




<?php
if (!empty($_POST["username"])){
    $db = new SQLite3('base.sqlite');
    $username = $_POST["username"];
    $is_exist = $db->querySingle("SELECT ID from users WHERE username='".$username."'");
    if (!empty($is_exist)){
        $secret = $db->query("SELECT info from users WHERE username='".$username."'");
        while ($row = $secret->fetchArray()) {
            echo $row[0];
        }
    }
    else{
        echo "No data about this user...";
    }   
}
?>