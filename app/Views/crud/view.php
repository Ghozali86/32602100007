<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="tittle">
        <h1>Data STOK BARANG TOKO SERBA SERBU</h1>
        <a href="Crud/tambah"><button class="tambah">Tambah Data</button></a>
    </div>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>NO</th>
            <th>Nama</th>
            <th>ID barang</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
                <th>Action</th>
            </tr>

            <?php
            if (empty($barang)) { ?>
                <tr>
                    <td collspan="7">Tidak ada data</td>
                </tr>
                <?php } else {
                $i = 1;
                foreach ($barang as $a) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $a['nama']; ?></td>
                        <td><?= $a['id']; ?></td>
                        <td><?= $a['kategori']; ?></td>
                        <td><?= $a['harga']; ?></td>
                        <td><?= $a['stok']; ?></td>
                        <td class="action">
                            <a href="crud/hapus/<?= $a['id']; ?>"><button class="btn-delete" onclick="return confirm('Apakah Anda ingin Menghapus data mahasiswa dengan NIM : <?= $a['id'] ?>')">Delete</button></a>
                            <a href="crud/edit/<?= $a['id']; ?>"><button class="btn-update">Update</button></a>
                        </td>
                    </tr>
            <?php    }
            } ?>
        </table>
    </div>
</main>

<?= $this->endSection(); ?>

