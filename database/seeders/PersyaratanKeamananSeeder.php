<?php

namespace Database\Seeders;

use App\Models\InformasiAsetKritis;
use App\Models\PersyaratanKeamanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersyaratanKeamananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataPersyaratan = [
            'Data Nilai' => [
                [
                    'jenis_persyaratan_keamanan' => 'kerahasiaan',
                    'prioritas' => false,
                    'kebutuhan' => 'Akses hanya yang berwenang berdasarkan otorisasinya.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'integritas',
                    'prioritas' => true,
                    'kebutuhan' => 'Data akurat konsisten tidak berubah tanpa izin dari yang berhak memberi nilai.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'ketersediaan',
                    'prioritas' => true,
                    'kebutuhan' => 'Dapat diakses cepat, tepat, dan tersedia 24/7.',
                ],
            ],
            'SIAKAD' => [
                [
                    'jenis_persyaratan_keamanan' => 'kerahasiaan',
                    'prioritas' => false,
                    'kebutuhan' => 'Akses hanya yang berwenang berdasarkan otorisasinya.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'integritas',
                    'prioritas' => true,
                    'kebutuhan' => 'Data akurat konsisten tidak berubah tanpa izin.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'ketersediaan',
                    'prioritas' => true,
                    'kebutuhan' => 'Dapat diakses cepat, tepat, dan tersedia 24/7.',
                ],
            ],
            'Server Jaringan' => [
                [
                    'jenis_persyaratan_keamanan' => 'kerahasiaan',
                    'prioritas' => false,
                    'kebutuhan' => 'Data server hanya diketahui orang yang berwenang.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'integritas',
                    'prioritas' => false,
                    'kebutuhan' => 'Perangkat lunak asli dan berbayar.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'ketersediaan',
                    'prioritas' => true,
                    'kebutuhan' => 'Dapat diakses cepat, tepat dan tersedia 24/7.',
                ],
            ],
            'Kabel' => [
                [
                    'jenis_persyaratan_keamanan' => 'kerahasiaan',
                    'prioritas' => false,
                    'kebutuhan' => 'Kabel tidak ada kerahasiaan.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'integritas',
                    'prioritas' => false,
                    'kebutuhan' => 'Kabel original mengikuti standar jaringan.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'ketersediaan',
                    'prioritas' => true,
                    'kebutuhan' => 'Stok kabel cadangan tersedia 10% ketika dibutuhkan kabel tetap tersambung dengan aman.',
                ],
            ],
            'Server Database' => [
                [
                    'jenis_persyaratan_keamanan' => 'kerahasiaan',
                    'prioritas' => false,
                    'kebutuhan' => 'Akses tersedia untuk yang berwenang.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'integritas',
                    'prioritas' => true,
                    'kebutuhan' => 'Kondisi perangkat baik dan memiliki spek yang optimal.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'ketersediaan',
                    'prioritas' => true,
                    'kebutuhan' => 'Performa akses data cepat dan dapat diakses 24/7.',
                ],
            ],
            'Admin Database' => [
                [
                    'jenis_persyaratan_keamanan' => 'kerahasiaan',
                    'prioritas' => false,
                    'kebutuhan' => 'Menjaga data rahasia dengan mendistribusikan data ke akses yang berwenang.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'integritas',
                    'prioritas' => true,
                    'kebutuhan' => 'Berlaku jujur bertanggung jawab, dan memiliki kemampuan.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'ketersediaan',
                    'prioritas' => false,
                    'kebutuhan' => 'Dapat bekerja ketika dibutuhkan.',
                ],
            ],
            'Operator Siakad' => [
                [
                    'jenis_persyaratan_keamanan' => 'kerahasiaan',
                    'prioritas' => false,
                    'kebutuhan' => 'Mengakses hanya bagian wewenang hak akses yang dimiliki.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'integritas',
                    'prioritas' => true,
                    'kebutuhan' => 'Berlaku jujur dan bertanggung jawab atas validitas data dan cepat/tanggap dalam penanganan masalah sistem.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'ketersediaan',
                    'prioritas' => false,
                    'kebutuhan' => 'Dapat bekerja dimana saja ketika dibutuhkan.',
                ],
            ],
            'Programmer' => [
                [
                    'jenis_persyaratan_keamanan' => 'kerahasiaan',
                    'prioritas' => false,
                    'kebutuhan' => 'Menjaga data/informasi sistem yang rahasia.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'integritas',
                    'prioritas' => true,
                    'kebutuhan' => 'Berlaku jujur bertanggung jawab, dan memiliki kemampuan.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'ketersediaan',
                    'prioritas' => false,
                    'kebutuhan' => 'Dapat bekerja dimana saja ketika dibutuhkan.',
                ],
            ],
            'Admin Jaringan' => [
                [
                    'jenis_persyaratan_keamanan' => 'kerahasiaan',
                    'prioritas' => false,
                    'kebutuhan' => 'Menjaga data/informasi yang rahasia.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'integritas',
                    'prioritas' => true,
                    'kebutuhan' => 'Berlaku jujur bertanggung jawab, dan memiliki kemampuan terhadap ketersediaan layanan internet.',
                ],
                [
                    'jenis_persyaratan_keamanan' => 'ketersediaan',
                    'prioritas' => false,
                    'kebutuhan' => 'Dapat bekerja dimana saja ketika dibutuhkan.',
                ],
            ],
        ];

        foreach ($dataPersyaratan as $namaAset => $persyaratanList) {
            $aset = InformasiAsetKritis::where('nama_aset', $namaAset)->first();

            if ($aset) {
                foreach ($persyaratanList as $persyaratan) {
                    PersyaratanKeamanan::create([
                        'id_aset' => $aset->id,
                        'jenis_persyaratan_keamanan' => $persyaratan['jenis_persyaratan_keamanan'],
                        'prioritas' => $persyaratan['prioritas'],
                        'kebutuhan' => $persyaratan['kebutuhan'],
                    ]);
                }
            }
        }
    }
}
