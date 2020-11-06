<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;


class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Book::factory()->count(1)->create();
    }
}
