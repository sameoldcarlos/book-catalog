<?php

use Illuminate\Database\Seeder;
use App\Models\ModelBook;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title' => 'O festim dos corvos',
            'pages' => '200',
            'price' => '40.25',
            'id_user' => '4'
        ]);
        $book->create([
            'title' => 'O senhor dos aneis',
            'pages' => '500',
            'price' => '80.25',
            'id_user' => '3'
        ]);
        $book->create([
            'title' => 'Harry Potter',
            'pages' => '300',
            'price' => '50',
            'id_user' => '4'
        ]);

        $book->create([
            'title' => 'A bruxa de Blair',
            'pages' => '400',
            'price' => '20.25',
            'id_user' => '3'
        ]);
        $book->create([
            'title' => 'As cronicas de gelo e fogo',
            'pages' => '600',
            'price' => '80',
            'id_user' => '3'
        ]);
        $book->create([
            'title' => 'Assassinato na rua Morgue',
            'pages' => '350',
            'price' => '30',
            'id_user' => '4'
        ]);
    }
}
