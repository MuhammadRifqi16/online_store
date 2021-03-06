<div class="container-fluid">
    <div class="row">
        <div class="col=md-2"></div>
        <div class="col=md-8"></div>
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($contents) 
                {
                    foreach ($contents as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                
                echo "Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
                } ?>
            </div>
        </div><br><br>

         <h4>Input Alamat Pengiriman dan Pembayaran</h4>

         <form method="post" action="<?= base_url('/dashboard/prosespesanan'); ?>">
            
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
            </div>

            <div class="form-group">
                <label>Alamat Lengkap</label>
                <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
            </div>

            <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
            </div>

            <div class="form-group">
                <label>Jasa Pengiriman</label>
                <select class="form-control" name="jasa_pengiriman">
                    <option>JNE</option>
                    <option>TIKI</option>
                    <option>POS INDONESIA</option>
                    <option>GOJEK</option>
                    <option>GRAB</option>
                </select>
            </div>

            <div class="form-group">
                <label>Pilih Bank</label>
                <select class="form-control" name="bank"> 
                    <option>BCA - XXXXXXX</option>
                    <option>BNI - XXXXXXX</option>
                    <option>BRI - XXXXXXX</option>
                    <option>MANDIRI - XXXXXXX</option>
                </select>
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
        </form>

        <div class="col-md-2"></div>
    </div>
</div>