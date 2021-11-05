<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Andorid Alvin Ganteng</title>
</head>
<body>
    <div class="wrapper" align="center" style="background-color:lightgreen;height: 500px;">
        <div>
            <img src="image/logoandroid.png" &bnsp />
        </div>
        <form method="GET">
            <div  style="background-color:white;width: 500px;margin-bottom:5px;margin-top:5px;border-radius: 10px;">
                <hr color="green" size="5px" style="border-top-left-radius: 10px;border-top-right-radius: 10px;">
                <label>Nama</label> <br>
                <input name="nama" type="text" placeholder="Masukkan nama" >
                <br><br>
            </div>
        </form>
        
        <form method="POST">
            <div style="background-color:white;width: 500px;margin-bottom:5px;margin-top:5px;border-radius: 10px;">
                <label>Alamat</label> <br>
                <input name="alamat" type="text" placeholder="Masukkan alamat">
                <br><br>
            </div>
            <div style="background-color:white;width: 500px;margin-bottom:5px;margin-top:5px;border-radius: 10px;">
                <label>Tanggal Lahir</label> <br>
                <input name="tanggal" type="date" >
                <br><br>
            </div>
            <div>    
                    <button style="color: green;">Submit</button>
            </div>
        </form>
    </div>

        <?php 

            $nama = @$_GET['nama'];
            $alamat = @$_POST['alamat'];
            $tanggal = @$_POST['tanggal'];

            if ($nama) {
                echo "<strong>Nama         :</strong> {$nama} <br>";
            }
            
            if ($alamat) {
                echo "<strong>Alamat       :</strong> {$alamat} <br>";
            }

            if ($tanggal) {
                echo "<strong>Tanggal Lahir:</strong> {$tanggal} <br>";
            }

            $tanggal_lahir = new DateTime($tanggal);
            $sekarang = new DateTime("today");
            if ($tanggal_lahir > $sekarang) { 
            echo "<strong>Belom Lahir Dong </strong><br>";
            }
            else {
            $thn = $sekarang->diff($tanggal_lahir)->y;
            echo "<strong>Umur :</strong> {$thn} <br>";
            }
            
        ?>
        
 
</body>
</html>