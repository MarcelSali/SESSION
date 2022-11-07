<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            session_unset();

            session_destroy();
            echo "Session Berhasil Di - Destroyed"
        ?>
    </body>
</html>    
<!-- /echo "<h1>Ini Halaman EMPAT</h1>"; -->
