<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemilikTanahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tanah =
            [

                [
                    'nama' => 'Kebun Sawit 1',
                    'detail' => 'Luas : 50 Ha
                    Lokasi: 7J54+5QW Jorong pematang Sontang, Sungai Aua, Kec. Sungaiaur, Kabupaten Pasaman Barat, Sumatera Barat',
                    'harga' => '750000000',
                    'perizinan_regulasi' => '10',
                    'ketersediaan_air' => '15',
                    'lokasi' => '20',
                    'potensi_produksi' => '10',
                    'aksesibilitas' => '15',
                    'kondisi_lingkungan' => '5',
                ],
                [
                    'nama' => 'Kebun Sawit 2',
                    'detail' => 'luas: 58 Ha
                    VQXW+G9, Kinali, Kec. Kinali, Kabupaten Pasaman Barat, Sumatera Barat 26567',
                    'harga' => '8700000000',
                    'perizinan_regulasi' => '10',
                    'ketersediaan_air' => '20',
                    'lokasi' => '5',
                    'potensi_produksi' => '20',
                    'aksesibilitas' => '10',
                    'kondisi_lingkungan' => '15',
                ],
                [
                    'nama' => 'Kebun Sawit 3',
                    'detail' => 'luas: 30 Ha
                    3VWC+CFM, Aua Kuniang, Kec. Pasaman, Kabupaten Pasaman Barat, Sumatera Barat 26566',
                    'harga' => '4500000000',
                    'perizinan_regulasi' => '5',
                    'ketersediaan_air' => '10',
                    'lokasi' => '20',
                    'potensi_produksi' => '5',
                    'aksesibilitas' => '15',
                    'kondisi_lingkungan' => '20',
                ],
                [
                    'nama' => 'Kebun Sawit 4',
                    'detail' => 'luas: 35 Ha
                    5Q4H+JJC, Aia Gadang, Kec. Pasaman, Kabupaten Pasaman Barat, Sumatera Barat',
                    'harga' => '5250000000',
                    'perizinan_regulasi' => '5',
                    'ketersediaan_air' => '10',
                    'lokasi' => '20',
                    'potensi_produksi' => '5',
                    'aksesibilitas' => '15',
                    'kondisi_lingkungan' => '20',
                ],
                [
                    'nama' => 'Kebun Sawit 5',
                    'detail' => 'luas: 44 Ha
                    5Q4H+JJC, Aia Gadang, Kec. Pasaman, Kabupaten Pasaman Barat, Sumatera Barat',
                    'harga' => '6600000000',
                    'perizinan_regulasi' => '5',
                    'ketersediaan_air' => '10',
                    'lokasi' => '20',
                    'potensi_produksi' => '5',
                    'aksesibilitas' => '15',
                    'kondisi_lingkungan' => '20',
                ],


            ];
        foreach ($tanah as $tanahSaja) {
            Product::create(
          
                    [
                        'name' => $tanahSaja['nama'],
                        'detail' => $tanahSaja['detail'],
                        'harga' => $tanahSaja['harga'],
                        'perizinan_regulasi' => $tanahSaja['perizinan_regulasi'],
                        'ketersediaan_air' => $tanahSaja['ketersediaan_air'],
                        'lokasi' => $tanahSaja['lokasi'],
                        'potensi_produksi' => $tanahSaja['potensi_produksi'],
                        'aksesibilitas' => $tanahSaja['aksesibilitas'],
                        'kondisi_lingkungan' => $tanahSaja['kondisi_lingkungan'],
                    ]

            );
        }
    }
}
