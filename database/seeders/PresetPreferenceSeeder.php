<?php

namespace Database\Seeders;

use App\Models\PresetPreference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PresetPreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $presetpreferences =
        [

            [
                'nama' => 'Cari Lahan Kebun Sawit preferensi 1',
                'detail' => 'Sesuai dengan ketentuan berikut',
                'harga' => '7200000000',
                'perizinan_regulasi' => '10',
                'ketersediaan_air' => '15',
                'lokasi' => '20',
                'potensi_produksi' => '50',
                'aksesibilitas' => '10',
                'kondisi_lingkungan' => '20',
            ],
            [
                'nama' => 'Cari Lahan Kebun Sawit preferensi 2',
                'detail' => 'Sesuai dengan ketentuan berikut',
                'harga' => '450000000',
                'perizinan_regulasi' => '10',
                'ketersediaan_air' => '15',
                'lokasi' => '20',
                'potensi_produksi' => '15',
                'aksesibilitas' => '10',
                'kondisi_lingkungan' => '20',
            ],
            [
                'nama' => 'Cari Lahan Kebun Sawit preferensi 3',
                'detail' => 'Sesuai dengan ketentuan berikut',
                'harga' => '4500000000',
                'perizinan_regulasi' => '20',
                'ketersediaan_air' => '10',
                'lokasi' => '20',
                'potensi_produksi' => '10',
                'aksesibilitas' => '10',
                'kondisi_lingkungan' => '20',
            ],

        ];
    foreach ($presetpreferences as $presetpreference) {
        PresetPreference::create(
            [
                'name' => $presetpreference['nama'],
                'detail' => $presetpreference['detail'],
                'harga' => $presetpreference['harga'],
                'perizinan_regulasi' => $presetpreference['perizinan_regulasi'],
                'ketersediaan_air' => $presetpreference['ketersediaan_air'],
                'lokasi' => $presetpreference['lokasi'],
                'potensi_produksi' => $presetpreference['potensi_produksi'],
                'aksesibilitas' => $presetpreference['aksesibilitas'],
                'kondisi_lingkungan' => $presetpreference['kondisi_lingkungan'],
            ]
            
        );
    }
    }
}
