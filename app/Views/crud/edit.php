<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="tittle">
        <h1>Edit Data STOK BARANG</h1>
    </div>
    <div class="form">
        <form action="/crud/editan" method="POST">
            <div class="input">
                <label for="id">ID</label>
                <input type="text" name="id" id="id" value="<?= $edit['id']; ?>">
            </div>
            <div class="input">
                <label for="id">ID yang baru</label>
                <input type="text" name="newid" id="id">
            </div>
            <div class="input">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $edit['nama']; ?>">
            </div>
            <div class="input">
                <label for="nama">Nama yang baru</label>
                <input type="text" name="newNama" id="nama">
            </div>
            <div class="input">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" value="<?= $edit['kategori']; ?>">
            </div>
            <div class="input">
                <label for="kategori">Prodi yang baru</label>
                <input type="text" name="newkategori" id="kategori">
            </div>
            <div class="input">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" value="<?= $edit['harga']; ?>">
            </div>
            <div class="input">
                <label for="harga">Harga yang baru</label>
                <input type="text" name="newharga" id="harga">
            </div>
            <div class=" input">
                <label for="stok"> stok</label>
                <input type="text" name="stok" id="stok" value="<?= $edit['stok']; ?>">
            </div>
            <div class=" input">
                <label for="stok">stok  yang baru</label>
                <input type="text" name="newStok" id="stok">
            </div>
            <div class="button">
                <button type="submit" value="Submit">Submit</button>
            </div>
        </form>
    </div>
</main>
<?= $this->endSection(); ?>