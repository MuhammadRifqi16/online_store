<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $model = model('ModelBarang');
        $model->insertBatch([
            [
                'nama_brg' => 'Smartphone',
                'keterangan' => 'Iphone Xr',
                'kategori' => 'Smartphone',
                'harga' => '5000000',
                'stok' => '10',
                'gambar' => 'handphone.jpg',
            ],

            [
                'nama_brg' => 'Smartphone',
                'keterangan' => 'Samsung Galaxy A12',
                'kategori' => 'Smartphone',
                'harga' => '2300000',
                'stok' => '10',
                'gambar' => 'samsung.jpg',
            ],

            [
                'nama_brg' => 'Laptop',
                'keterangan' => 'Acer Aspire 5 A514-52G',
                'kategori' => 'Laptop',
                'harga' => '8000000',
                'stok' => '10',
                'gambar' => 'laptop.jpg',
            ],

            [
                'nama_brg' => 'Laptop',
                'keterangan' => 'Asus A409UJ-BV352T - Grey',
                'kategori' => 'Laptop',
                'harga' => '7700000',
                'stok' => '5',
                'gambar' => 'laptop2.jpg',
            ],

            [
                'nama_brg' => 'Televisi',
                'keterangan' => 'POLYTRON PLD 32D-1852 LED TV[32Inch]',
                'kategori' => 'Tv',
                'harga' => '2450000',
                'stok' => '10',
                'gambar' => 'tv.jpg',
            ],

            [
                'nama_brg' => 'Televisi',
                'keterangan' => 'PANASONIC 32 Inch Android TV LED',
                'kategori' => 'Tv',
                'harga' => '3700000',
                'stok' => '10',
                'gambar' => 'panasonic.jpg',
            ],

            [
                'nama_brg' => 'Tablet',
                'keterangan' => 'Galaxy Tab S7 FE 5G',
                'kategori' => 'Tablet',
                'harga' => '949000',
                'stok' => '5',
                'gambar' => 'tablet.jpg',  
            ],

            [
                'nama_brg' => 'Tablet',
                'keterangan' => 'Samsung Tab A 2018',
                'kategori' => 'Tablet',
                'harga' => '4499000',
                'stok' => '5',
                'gambar' => 'tablet2.jpg',  
            ],

            [
                'nama_brg' => 'Headset',
                'keterangan' => 'PLEXTONE PC780',
                'kategori' => 'Headset',
                'harga' => '350000',
                'stok' => '10',
                'gambar' => 'headsetgaming.jpg',  
            ],

            [
                'nama_brg' => 'Headset',
                'keterangan' => 'Razer Kraken Gaming Ultimate',
                'kategori' => 'Headset',
                'harga' => '2500000',
                'stok' => '5',
                'gambar' => 'razer kraken.jpg',  
            ],
        ]);
    }
}
