<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Siswa Baru</title>
    </head>
    <body>
        <header>
            <h3>Pendaftaran Siswa Baru</h3>
            <h1>SMK PUTERA BATAM</h1>
        </header> 

        <h4>Menu</h4>
        <nav>
            <ul>
                <li><a href="form_daftar.php">Daftar Baru</a></li>
                <li><a href="List_Calon_Siswa.php">Pendaftaran</a></li>
            </ul>
        </nav>

        <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses') {
                    echo "Pendaftaran siswa baru berhasil";
                } else {
                    echo "Pendaftaran gagal!";
                }
            ?>
        </p>
        <?php endif; ?>

    </body>
</html>