<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Mahasiswa</title>
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
            Data Mahasiswa
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
            </table>
            <hr>
            <?php
            $hostname = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'ngobar';
            
                // perintah untuk koneksi database
            $konek = mysqli_connect($hostname, $username, $password, $dbname);
            
            if(!$konek){
                echo "
                 <tr>
                 <td colspan=5> Koneksi Bermasalah </td>
                 </tr>
                ";                    
            } else{}
            ?>
            <tr>
                <td></td>
            </tr>
            <table>
            <tr>
                    <td>ID</td>
                    <td>:</td>
                    <td>
                        <input type="text" id="inpt_id" class="form" value="0">
                        <span class="warning" id="warning_nama">Nama HARUS DIISI !!</span>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" id="inpt_nama" class="form" placeholder="Isi Nama Lengkap">
                        <span class="warning" id="warning_nama">Nama HARUS DIISI !!</span>
                    </td>
                </tr>

                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <input type="text" id="inpt_nim" class="form" placeholder="Isi Nomor Induk Mahasiswa">
                        <span class="warning" id="warning_nim">NIM HARUS DIISI !!</span>
                    </td>
                </tr>

                <tr>
                    <td>Prodi</td>
                    <td>:</td>
                    <td>
                        <input type="text" id="inpt_prodi" class="form" placeholder="Isi Program Studi">
                        <span class="warning" id="warning_prodi">Prodi HARUS DIISI !!</span>

                    </td>
                </tr>
            </table>
            <hr>
            <button id="simpan" onclick="simpan()">Simpan</button>
        </div>
        <div class="hasil" style="text-align: left; font-size: medium;">
            Hasil
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