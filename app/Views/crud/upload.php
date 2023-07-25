<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="tittle">
        <h1>Tambah Data Stok Barang</h1>
    </div>
    <div class="form">
        <form action="tambah" method="post">
            <div class="input">
                <label for="id">id</label>
                <input type="text" name="id" id="id">
            </div>
            <div class="input">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="input">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori">
            </div>
            <div class="input">
                <label for="harga">harga</label>
                <input type="text" name="harga" id="harga">
            </div>
            <div class="input">
                <label for="stok"> Stok</label>
                <input type="text" name="stok" id="stok">
            </div>
            <div class="button">
                <button type="submit" value="Submit">Submit</button>
            </div>
        </form>
    </div>
</main>
<?= $this->endSection(); ?>