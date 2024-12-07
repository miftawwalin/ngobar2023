<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngoding Bareng HIMA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            Selamat Datang
        </div>
        <div class="menu">

            <a href="index.php">
            <p>Formulir</p>
            </a>
            <a href="mahasiswa.php">
            <p>Mahasiswa</p> 
            </a>     

        </div>
        <div class="content">
            Formulir Mahasiswa
            <hr>
            <form action="create.php" method="post" onsubmit="return simpan()">
            <table>
            <tr>
                    <td>ID</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="inpt_id" id="inpt_id" class="form" value="0">
                        <span class="warning" id="warning_nama">Nama HARUS DIISI !!</span>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="inpt_nama" id="inpt_nama" class="form" placeholder="Isi Nama Lengkap">
                        <span class="warning" id="warning_nama">Nama HARUS DIISI !!</span>
                    </td>
                </tr>

                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="inpt_nim" id="inpt_nim" class="form" placeholder="Isi Nomor Induk Mahasiswa">
                        <span class="warning" id="warning_nim">NIM HARUS DIISI !!</span>
                    </td>
                </tr>

                <tr>
                    <td>Prodi</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="inpt_prodi" id="inpt_prodi" class="form" placeholder="Isi Program Studi">
                        <span class="warning" id="warning_prodi">Prodi HARUS DIISI !!</span>

                    </td>
                </tr>
            </table>
            <hr>
            <button type="submit" id="simpan">Simpan</button>
            </form>
        </div>
        <div class="hasil" style="text-align: left; font-size: medium;">        
                                    
            Info : <?php session_start();                    
                    echo (isset($_SESSION['hasil']) ? $_SESSION['hasil'] : '');                                      
                    ?>
            <hr>
            <p>Nama : <span id="hasil_nama"></span></p>
            <p>NIM : <span id="hasil_nim"></span></p>
            <p>Prodi : <span id="hasil_prodi"></span></p>
            
        </div>
        <div class="footer">
            HIMA SHIIF Horizon University Indonesia 2023 / 2024
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>