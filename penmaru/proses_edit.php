<?php

include("config.php");

//cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk= $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    //buat query update
    $sql = "UPDATE calon_mahasiswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', 
    agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: List_Calon_Siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>