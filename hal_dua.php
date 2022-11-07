<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            if(!isset($_SESSION["hal1"])){
                echo "Mohon Kunjungi Halaman SATU";   
            }else{
                $_SESSION["hal2"] = "Ini Halaman DUA";
                echo $_SESSION["hal2"];
            }
        ?>
    </body>
</html>