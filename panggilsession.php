<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            // echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
            // echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
            if(isset($_SESSION["favcolor"]) && isset($_SESSION["favanimal"])){
                echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
                echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
            }else{
                echo "ISSET SUDAH DI - REMOVE";
            }
        ?>
    </body>
</html>