<?php

include("config.php");

//cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk= $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    //buat query untuk simpan data ke tabel
    $sql = "INSERT INTO calon_mahasiswa (nama, alamat, jenis_kelamin, agama, sekolah_asal)
    VALUE ('$nama','$alamat','$jk','$agama','$sekolah')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>