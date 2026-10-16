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
                'description' => 'Proyek ini telah menerima penghargaan sebagai proyek terbaik dalam kategori inovasi dan keberlanjutan. Tim kami bangga atas 
                pencapaian ini dan berkomitmen untuk terus memberikan solusi yang berdampak positif bagi masyarakat. Dengan dedikasi dan kerja keras, kami akan 
                terus menghadirkan proyek-proyek yang inovatif dan bermanfaat bagi lingkungan sekitar.',
                'image' => 'project1.jpg',
                'source' => 'https://www.example.com/news/project-award',
                'author' => 'John Doe',
                'published_at' => '2024-06-15',
            ],
            [
                'title' => 'Peluncuran Produk Baru',
                'description' => 'Kami dengan bangga mengumumkan peluncuran produk terbaru kami yang dirancang untuk memenuhi kebutuhan pelanggan dengan lebih 
                baik. Produk ini menawarkan fitur-fitur inovatif dan kualitas terbaik. Sebagai perusahaan yang berfokus pada inovasi, kami terus berupaya untuk 
                menghadirkan solusi yang relevan dan bermanfaat bagi masyarakat.',
                'image' => 'project2.jpg',
                'source' => 'https://www.example.com/news/new-product-launch',
                'author' => 'Jane Smith',
                'published_at' => '2024-06-10',
            ],
            [
                'title' => 'Kemitraan Strategis dengan Perusahaan Terkemuka',
                'description' => 'Kami telah menjalin kemitraan strategis dengan perusahaan terkemuka di industri ini. Kolaborasi ini akan memungkinkan kami untuk 
                menghadirkan solusi yang lebih baik dan memperluas jangkauan layanan kami. dengan sinergi yang kuat, kami yakin dapat memberikan nilai tambah bagi 
                pelanggan dan masyarakat secara keseluruhan.',
                'image' => 'project3.jpg',
                'source' => 'https://www.example.com/news/strategic-partnership',
                'author' => 'John Doe',
                'published_at' => '2024-06-05',
            ],
            [
                'title' => 'Inisiatif Lingkungan yang Berkelanjutan',
                'description' => 'Kami berkomitmen untuk menjaga lingkungan melalui berbagai inisiatif berkelanjutan. Program ini mencakup pengurangan emisi karbon, 
                penggunaan energi terbarukan, dan pelestarian sumber daya alam. Sebagai perusahaan yang bertanggung jawab, kami percaya bahwa langkah-langkah ini akan 
                memberikan dampak positif bagi lingkungan dan masyarakat.',
                'image' => 'project4.jpg',
                'source' => 'https://www.example.com/news/sustainable-initiatives',
                'author' => 'Jane Smith',
                'published_at' => '2024-06-01',
            ],
            [
                'title' => 'Peningkatan Layanan Pelanggan',
                'description' => 'Kami telah meningkatkan layanan pelanggan kami dengan memperkenalkan sistem dukungan yang lebih responsif dan efisien. Tim kami siap 
                membantu pelanggan dengan cepat dan profesional. Dan, kami berkomitmen untuk memberikan pengalaman pelanggan yang lebih baik dan memastikan kepuasan 
                pelanggan tetap menjadi prioritas utama kami.',
                'image' => 'project5.jpg',
                'source' => 'https://www.example.com/news/customer-service-improvement',
                'author' => 'John Doe',
                'published_at' => '2024-06-15',
            ],
            [
                'title' => 'Ekspansi ke Pasar Internasional',
                'description' => 'Kami telah memperluas jangkauan bisnis kami ke pasar internasional. Langkah ini memungkinkan kami untuk menjangkau lebih banyak 
                pelanggan dan menghadirkan produk serta layanan kami ke tingkat global. Serta, kami berkomitmen untuk memberikan solusi yang relevan dan bermanfaat 
                bagi masyarakat di berbagai belahan dunia.',
                'image' => 'project6.jpg',
                'source' => 'https://www.example.com/news/international-expansion',
                'author' => 'Jane Smith',
                'published_at' => '2024-06-20',
            ],
            [
                'title' => 'Penghargaan untuk Inovasi Teknologi',
                'description' => 'Kami menerima penghargaan atas inovasi teknologi yang telah kami kembangkan. Tim kami terus berupaya menciptakan solusi yang inovatif 
                dan relevan dengan kebutuhan pasar. Penghargaan ini menjadi motivasi bagi kami untuk terus berinovasi dan memberikan kontribusi positif bagi masyarakat 
                melalui teknologi.',
                'image' => 'project7.jpg',
                'source' => 'https://www.example.com/news/technology-innovation-award',
                'author' => 'John Doe',
                'published_at' => '2024-06-25',
            ],
            [
                'title' => 'Program Tanggung Jawab Sosial Perusahaan',
                'description' => 'Kami meluncurkan program tanggung jawab sosial perusahaan yang bertujuan untuk memberikan dampak positif bagi masyarakat sekitar. 
                Program ini mencakup berbagai kegiatan sosial dan kemanusiaan. Kami percaya bahwa perusahaan memiliki tanggung jawab untuk berkontribusi pada 
                kesejahteraan masyarakat dan lingkungan.',
                'image' => 'project8.jpg',
                'source' => 'https://www.example.com/news/corporate-social-responsibility',
                'author' => 'Jane Smith',
                'published_at' => '2024-06-30',
            ],
            [
                'title' => 'Peningkatan Infrastruktur dan Fasilitas',
                'description' => 'Kami telah melakukan peningkatan infrastruktur dan fasilitas untuk mendukung operasional yang lebih efisien. Langkah ini akan 
                meningkatkan produktivitas dan kualitas layanan kami. Kami berkomitmen untuk terus berinvestasi dalam pengembangan infrastruktur yang mendukung 
                pertumbuhan bisnis dan memberikan pengalaman terbaik bagi pelanggan.',
                'image' => 'project9.jpg',
                'source' => 'https://www.example.com/news/infrastructure-improvement',
                'author' => 'John Doe',
                'published_at' => '2024-07-05',
            ],
            [
                'title' => 'Kolaborasi dengan Komunitas Lokal',
                'description' => 'Kami menjalin kolaborasi dengan komunitas lokal untuk mendukung pengembangan ekonomi dan sosial di wilayah tersebut. Inisiatif ini 
                mencakup pelatihan, pendidikan, dan dukungan usaha kecil. Kami percaya bahwa kolaborasi dengan komunitas lokal akan memberikan manfaat jangka panjang 
                bagi masyarakat dan memperkuat hubungan antara perusahaan dan komunitas.',
                'image' => 'project10.jpg',
                'source' => 'https://www.example.com/news/local-community-collaboration',
                'author' => 'Jane Smith',
                'published_at' => '2024-07-10',
            ],
            [
                'title' => 'Pengembangan Produk Berbasis AI',
                'description' => 'Kami sedang mengembangkan produk berbasis kecerdasan buatan (AI) yang akan meningkatkan efisiensi dan pengalaman pengguna. Teknologi 
                ini akan membawa inovasi baru dalam layanan kami. Kami berkomitmen untuk terus mengeksplorasi teknologi terbaru dan menghadirkan solusi yang relevan 
                dengan kebutuhan pelanggan.',
                'image' => 'project11.jpg',
                'source' => 'https://www.example.com/news/ai-product-development',
                'author' => 'John Doe',
                'published_at' => '2024-07-15',
            ],
            [
                'title' => 'Peningkatan Keamanan Data dan Privasi',
                'description' => 'Kami telah meningkatkan sistem keamanan data dan privasi untuk melindungi informasi pelanggan. Langkah ini mencakup enkripsi data, 
                audit keamanan, dan kebijakan privasi yang ketat. Kami berkomitmen untuk menjaga kepercayaan pelanggan dengan memastikan bahwa data mereka aman dan 
                terlindungi dari ancaman yang mungkin timbul.',
                'image' => 'project12.jpg',
                'source' => 'https://www.example.com/news/data-security-privacy',
                'author' => 'Jane Smith',
                'published_at' => '2024-07-20',
            ],
            [
                'title' => 'Pelatihan dan Pengembangan Karyawan',
                'description' => 'Kami menyediakan program pelatihan dan pengembangan karyawan untuk meningkatkan keterampilan dan kompetensi tim kami. Program ini 
                mencakup pelatihan teknis, kepemimpinan, dan pengembangan pribadi. Kami percaya bahwa investasi dalam pengembangan karyawan akan memberikan manfaat 
                jangka panjang bagi perusahaan dan meningkatkan kualitas layanan yang kami berikan kepada pelanggan.',
                'image' => 'project13.jpg',
                'source' => 'https://www.example.com/news/employee-training-development',
                'author' => 'John Doe',
                'published_at' => '2024-07-25',
            ],
            [
                'title' => 'Inovasi dalam Layanan Pelanggan Digital',
                'description' => 'Kami menghadirkan inovasi dalam layanan pelanggan digital dengan memperkenalkan platform interaktif yang memudahkan pelanggan untuk 
                berinteraksi dengan kami secara online. Platform ini mencakup fitur chat, forum, dan pusat bantuan yang responsif. Kami berkomitmen untuk memberikan 
                pengalaman pelanggan yang lebih baik dan',
                'image' => 'project14.jpg',
                'source' => 'https://www.example.com/news/digital-customer-service-innovation',
                'author' => 'Jane Smith',
                'published_at' => '2024-07-30',
            ],
            [
                'title' => 'Penghargaan untuk Keunggulan Operasional',
                'description' => 'Kami menerima penghargaan atas keunggulan operasional yang telah kami capai. Tim kami terus berupaya meningkatkan efisiensi dan 
                kualitas layanan untuk memenuhi harapan pelanggan. Penghargaan ini menjadi bukti komitmen kami untuk memberikan layanan terbaik dan terus berinovasi 
                dalam operasional perusahaan.',
                'image' => 'project15.jpg',
                'source' => 'https://www.example.com/news/operational-excellence-award',
                'author' => 'John Doe',
                'published_at' => '2024-08-05',
            ],

        ];

         foreach ($beritas as $berita) {
            Berita::create($berita );
        }
    }
    
}
