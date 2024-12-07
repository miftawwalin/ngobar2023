<?php
//include koneksi php
//Data yang dikirim dari form
session_start();
$id = $_POST['inpt_id'];
$nama = $_POST['inpt_nama'];
$nim = $_POST['inpt_nim'];
$prodi = $_POST['inpt_prodi'];

$_SESSION['id'] = 'id';
$_SESSION['nama'] = 'nama';
$_SESSION['nim'] = 'nim';
$_SESSION['prodi'] = 'prodi';


//setup untuk koeksi ke database
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ngobar';

    // perintah untuk koneksi database
$konek = mysqli_connect($hostname, $username, $password, $dbname);

if(!$konek){
    echo "Koneksi Bermasalah";    
}
else {
   // echo "Koneski Berhasil";
    $query ="INSERT INTO tbl_mahasiswa (nama, nim, prodi)
    VALUES('$nama', '$nim', '$prodi')";
    if(mysqli_query($konek, $query)) {
        $_SESSION['hasil'] = 'Data Berhasil Disimpan';
        $_SESSION['nama'] = '$nama';
        $_SESSION['nim'] = '$nim';
        $_SESSION['prodi'] = '$prodi';
        echo"  <script>
        window.location = 'index.php';
        </script> ";
    } else {
        $_SESSION['hasil'] = 'Data Gagal Disimpan';
        $_SESSION['nama'] = '$nama';
        $_SESSION['nim'] = '$nim';
        $_SESSION['prodi'] = '$prodi';
        echo"  <script>
        window.location = 'index.php';
        </script> ";
    }
}

mysqli_close($konek);

