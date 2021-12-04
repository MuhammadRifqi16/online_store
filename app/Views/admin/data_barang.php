<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal"
    data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php 
        $no=1;
        foreach($barang as $brg) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $brg['nama_brg'] ?></td>
            <td><?php echo $brg['keterangan'] ?></td>
            <td><?php echo $brg['kategori'] ?></td>
            <td><?php echo $brg['harga'] ?></td>
            <td><?php echo $brg['stok'] ?></td>
            <td><?php echo anchor('admin/databarang/edit/' .$brg['id_brg'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td><?php echo anchor('admin/databarang/hapus/'. $brg['id_brg'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>    

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). '/admin/databarang/tambah_aksi'; 
        ?>" method="post" enctype="multipart/form-data" >

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                  <option>Smartphone</option>
                  <option>Laptop</option>
                  <option>Tablet</option>
                  <option>Tv</option>
                  <option>Headset</option>
                </select>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>

            <div class="form-group">
                <label>Gambar Produk</label><br>
                <input type="file" name="image" class="form-control">
            </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>

    </div>
  </div>
</div>