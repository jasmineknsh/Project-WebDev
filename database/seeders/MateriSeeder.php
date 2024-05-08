<?php

namespace Database\Seeders;

use App\Models\Materi;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::enableForeignKeyConstraints();
        Materi::truncate();
        Schema::disableForeignKeyConstraints(); 
        //gunanya kode ini agar data trsbut dimulai dri id 1


        Materi::factory(10)->create();
    }
}

// untuk waktu bisa pakai
// 'created_at' => Carbon::now(),
// 'updated_at' => Carbon::now(),
// atau

// $date = fake()->dateTimeBetween('-5 months', 'now');
// 'created_at' => $date
// 'updated_at' => $date