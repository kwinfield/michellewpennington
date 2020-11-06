<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    // protected $model = Todo::class;
    protected $model = \App\Models\Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Evolve - From Heart Breaks to Hearts Healed',
            'image' => 'img/book.photo.1.png',
            'price' => '24.99',
            'description' => 'A compilation of stories inspired by The First Wives Club'
            'completed' => false,
        ];
    }
};
