<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

        <form method="post" action="<?php echo base_url('admin/databarang/update') ?>">

        <div class="for-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control"
            value="<?php echo $barang['nama_brg'] ?>">
        </div>

        <div class="for-group">
            <label>Keterangan</label>
            <input type="hidden" name="id_brg" class="form-control"
            value="<?php echo $barang['id_brg'] ?>">
            <input type="text" name="keterangan" class="form-control"
            value="<?php echo $barang['keterangan'] ?>">
        </div>

        <div class="for-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control"
            value="<?php echo $barang['kategori'] ?>">
        </div>

        <div class="for-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control"
            value="<?php echo $barang['harga'] ?>">
        </div>

        <div class="for-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control"
            value="<?php echo $barang['stok'] ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm"> Simpan </button>

        </form>

</div>