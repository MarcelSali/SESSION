
<?php
     session_start();

    if(isset($_POST['masuk'])){
     if((($_POST['user']) == "marcelsali619") && (($_POST['pass']) == "205314042")){
         $_SESSION['user'] = $_POST['user'];
         header("Location: PilihBarang.php");      
     }else{
         header("Location: GagalLogin.php");   
     }
    }

     ?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <table style="border: solid black; background-image: url(bckWeb.png);" cellspacing="5" cellpadding="5">
            <tr>
                <td colspan="2" style="font-family: cursive; color:white;"><center><b>LOGIN<b></center></td>
            </tr>
            <form action="" method="POST">
            <tr>
                <td style="font-family: monospace; color:white;">Username:</td>               
                <td><input style="font-family: monospace;" type="text" value="" name="user"></td>                
            </tr>
            <tr>
                <td style="font-family: monospace; color:white;">Password:</td>
                <td><input style="font-family: monospace;" type="password" value="" name="pass"></td>
            </tr>
            <tr>
                <td colspan="2"><input style="margin-left: 81px;" type="submit" name="masuk" value="Masuk"></td>
            </tr>
            </form>
        </table>
    </body>
</html>