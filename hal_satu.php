<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            $_SESSION["hal1"] = "Ini Halaman SATU";   
            echo $_SESSION["hal1"];          
        ?>
    </body>
</html>
    <!-- echo "<h1>Ini Halaman SATU</h1>"; -->
