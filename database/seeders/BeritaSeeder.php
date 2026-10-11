<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Berita;
use App\Models\User;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $beritas = [
            [
                'title' => 'Penghargaan untuk Proyek Terbaik',
                'description' => 'Proyek ini telah menerima penghargaan sebagai proyek terbaik dalam kategori inovasi dan keberlanjutan. Tim kami bangga atas pencapaian ini dan berkomitmen untuk terus memberikan solusi yang berdampak positif bagi masyarakat.',
                'image' => 'project1.jpg',
            ],
            [
                'title' => 'Peluncuran Produk Baru',
                'description' => 'Kami dengan bangga mengumumkan peluncuran produk terbaru kami yang dirancang untuk memenuhi kebutuhan pelanggan dengan lebih baik. Produk ini menawarkan fitur-fitur inovatif dan kualitas terbaik.',
                'image' => 'project2.jpg',
            ],
            [
                'title' => 'Kemitraan Strategis dengan Perusahaan Terkemuka',
                'description' => 'Kami telah menjalin kemitraan strategis dengan perusahaan terkemuka di industri ini. Kolaborasi ini akan memungkinkan kami untuk menghadirkan solusi yang lebih baik dan memperluas jangkauan layanan kami.',
                'image' => 'project3.jpg',
            ],

        ];

         foreach ($beritas as $berita) {
            Berita::create($berita );
        }
    }
    
}
