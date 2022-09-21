<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah Data</a> <br><br>
    <table border="1">
        <tr>
            <td>No.</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Jurusan</td>
            <td>Aksi</td>
        </tr>
        <?php
        $count = 0;
        foreach ($queryAllMahasiswa as $mhs) {
            $count = $count + 1
        ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $mhs->nim ?></td>
                <td><?php echo $mhs->nama_mhs ?></td>
                <td><?php echo $mhs->jurusan ?></td>
                <td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $mhs->nim ?>">
                        Ubah</a> | <a href="<?php echo base_url('/home/fungsiHapus') ?>/<?php echo $mhs->nim ?>">Hapus</a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>