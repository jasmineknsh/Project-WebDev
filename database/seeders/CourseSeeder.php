<?php

namespace Database\Seeders;

use App\Models\Course;
use Faker\Core\Number;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::enableForeignKeyConstraints();
        Course::truncate();
        Schema::disableForeignKeyConstraints();
        //Perintah di atas menghapus seeder yang tidak tersedia dikodingan ini

        $nama_kursuses = [
            'Bahasa Indonesia',
            'Matematika',
            'IPA',
            'IPS',
        ];

        foreach ($nama_kursuses as $nama_kursus) {
            Course::create([
                'nama_kursus' => $nama_kursus,
                'deskripsi' => fake()->paragraph(1),
                'durasi' => '90 Menit',
                'slug' => Str::slug($nama_kursus),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        //Pakai koding di atas jika kursus sudah d tentukan berapa banyak data yang mau d inputkan

        // $nama_kursus = fake()->sentence(2);
        // DB::table('courses')->insert([
        //     'nama_kursus' => $nama_kursus,
        //     'deskripsi' => fake()->paragraph(1),
        //     'durasi' => '90 Menit',
        //     'slug' => Str::slug($nama_kursus),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        //note = word(10) => artinya nama kursus itu 1 kata terdiri dari sampai 10 huruf
        //sentence(2) => artinya terdiri dari 2 kata
    }
}
