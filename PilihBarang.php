<?php
    session_start();

    if(isset($_POST['masuk1'])){
        $makan = $_POST['makanan'];
        // $food = "";
        // $alatMandi = $_POST['mandi'];
        // // $wash = "";
        // $alatTulis = $_POST['tulis'];
        // $write = "";

        // foreach($makan as $eat){
        //     $food.= $eat .",";
        // }
        $_SESSION['makanan'] = $makan;
        // $_SESSION['mandi'] = $_POST['mandi'];
        // $_SESSION['tulis'] = $_POST['tulis'];
        header("Location: BarangSukses.php");
    }
?>

<html>
    <head>
        <title>Pilih Barang</title>
    </head>
    <body>
        <table>
        <tr>
        <td colspan="3" style="font-family: cursive; font-size:30px;"><center><b>Pilih Barang<b></center></td>
        </tr>
        <tr>
            <td style="font-family: ;cursive; font-size:15px"><center>Selamat Datang <?php             
                echo $_SESSION['user'];
                // var_dump($_SESSION['user']);
                ?>
            </td>
        </tr>
        <tr>
            <td style="font-family: cursive; font-size:15px"><a href="LogOut.php"><center>LogOut</center></a></td>
        </tr>    
        </table>
        <br>
        <form action="" method="POST">
            <label style="font-family: cursive;"><b>Makanan Minuman</b></label>
            <br>
            <input type="checkbox" value="Gula" name="makanan[]">Gula<br>
            <input type="checkbox" value="Teh" name="makanan[]">Kopi <br>
            <input type="checkbox" value="Susu" name="makanan[]">Susu <br>
            <input type="checkbox" value="Biskuit" name="makanan[]">Biskuit <br>
            <br></br>
            <label style="font-family: cursive;"><b>Peralatan Mandi</b></label> <br>
            <input type="checkbox" value="Sikat Gigi" name="makanan[]">Sikat Gigi <br>
            <input type="checkbox" value="Pasta Gigi" name="makanan[]">Pasta Gigi <br>
            <input type="checkbox" value="Sabun" name="makanan[]">Sabun <br>
            <input type="checkbox" value="Shampoo" name="makanan[]">Shampoo <br>
            <input type="checkbox" value="Sabun Cuci Muka" name="makanan[]">Sabun Cuci Muka <br>
            <br></br>
            <label style="font-family: cursive;"><b>Alat Tulis</b></label> <br>
            <input type="checkbox" value="Pensil" name="makanan[]">Pensil <br>
            <input type="checkbox" value="Penggaris" name="makanan[]">Penggaris <br>
            <input type="checkbox" value="Penghapus" name="makanan[]">Penghapus <br>
            <input type="checkbox" value="Ballpoint" name="makanan[]">Ballpoint <br>
            <input type="checkbox" value="Kertas HVS" name="makanan[]">Kertas HVS <br>
            <br>
            <input style="font-family: cursive;" type="submit" value="Masuk Keranjang" name="masuk1">
            <a style="font-family: cursive; margin-left:23px" href="LihatKeranjang.php">Lihat Isi Keranjang</a>

        </form>
    </body>
</html>