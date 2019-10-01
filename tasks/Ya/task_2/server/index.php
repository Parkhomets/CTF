<?php
if (!empty($_POST)){
    $token = $_POST['token'];
    $id = $_POST['id'];

    if ($token != "fhtj3n_ijnfes_lfjesnfs"){
        echo "Incorrect token";
    }
    else{
        if ($id != 1){
            header('Location: /user.php?id='.$id);
        }
        else{
            header('Location: /admin.php');
        }
    }
}
else{
    echo "Empty input";
}
?>

<html>
<!-- the third part of token=lfjesnfs -->
</html>