<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'isbn' => $this->faker->unique()->isbn13(),
            'title' => $this->faker->sentence(4),
            'author' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'date_published' => $this->faker->date(),
        ];
    }
}
