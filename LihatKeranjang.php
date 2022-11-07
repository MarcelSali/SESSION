<?php
    session_start();
?>

<html>
    <head>
        <title>Lihat Keranjang</title>
    </head>
    <body>
        <table>
            <tr>
                <td style="font-family: cursive; font-size:25px;">Isi Keranjang</td>                
            </tr>
            <tr>
                <td><center><a style="font-family: cursive;" href="LogOut.php">[Logout]</a></center></td>
            </tr>
        </table>
            <br></br>
            <label style="font-family: cursive;">Barang Yang Sudah Anda Pilih</label>
            <?php
                $makan = $_SESSION['makanan'];
                echo "<ol>";
                foreach($makan as $eat){
                    echo "<li>$eat</li>";
                }
                echo "</ol>"                     

            ?>
            <a href="PilihBarang.php">Kembali Pilih Barang</a>
    </body>
</html>