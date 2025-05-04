<html>

<head>
    <title>PHP Test</title>
    <style>
        body{
            margin: 5px;
            padding: 10px;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f1f1f1;
        }
        input{
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <!-- penanganan form dengan method POST -->
    <form method="post" action="inde.php">
        <label>Nama Siswa</label>
        <input type="text" name="nama" required>
        <label>jenis kelamin</label>
        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
            <option selected disabled>pilih</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        <label>Asal Sekolah</label>
        <input type="text" name="asal_sekolah" required>
        <label>No telp</label>
        <input type="number" minlength="8" maxlength="15" name="telp" required><br />
        <input type="submit" value="Daftar">
    </form>

</body>
<?php

// cek apakah form sudah diisi atau belum
if (isset($_POST['telp']) && (isset($_POST['nama']) && isset($_POST['jenis_kelamin']) && isset($_POST['asal_sekolah']))) {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $telp = $_POST['telp'];
    echo "Selamat $nama data anda telah dikirim";
    echo "<hr/>";
    echo "Nama = $nama <br>";
    echo "Jenis Kelamin = $jenis_kelamin<br> ";
    echo "Asal Sekolah = $asal_sekolah<br> ";
    echo "No telepon = $telp<br>";
};

// echo "$nama $jenis_kelamin $asal_sekolah $telp";

//cek form
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//    $nama = $_POST['nama'];
//    $jenis_kelamin = $_POST['jenis_kelamin'];
//    $asal_sekolah = $_POST['asal_sekolah'];
//    $telp = $_POST['telp'];
// }
    
?>

</html>