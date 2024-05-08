<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materi>
 */
class MateriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = fake()->dateTimeBetween('-5 months', 'now');

        return [
            'judul' => fake()->sentence(2),
            'deskripsi' => fake()->paragraph(),
            'link_materi'=> Str::random(20),
            'course_id' => fake()->randomElement(Course::all()->pluck('id')), 
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
