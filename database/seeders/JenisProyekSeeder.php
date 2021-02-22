<?php

namespace Database\Seeders;

use App\Models\JenisProyek;
use Illuminate\Database\Seeder;

class JenisProyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisProyek::create([
            'nama_proyek' => 'Logo',
        ]);
        JenisProyek::create([
            'nama_proyek' => 'Poster',
        ]);
        JenisProyek::create([
            'nama_proyek' => 'Banner',
        ]);
        JenisProyek::create([
            'nama_proyek' => 'Pamflet event',
        ]);
        JenisProyek::create([
            'nama_proyek' => 'Video event',
        ]);
        JenisProyek::create([
            'nama_proyek' => 'Video product',
        ]);
        JenisProyek::create([
            'nama_proyek' => 'Video biasa',
        ]);
        JenisProyek::create([
            'nama_proyek' => 'video color grading',
        ]);
        JenisProyek::create([
            'nama_proyek' => 'lain-lain bisa dijelaskan di deskripsi',
        ]);
    }
}
