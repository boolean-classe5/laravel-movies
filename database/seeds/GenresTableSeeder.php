<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generi = ['thriller', 'drammatico', 'commedia', 'animazione', 'horror', 'documentario'];
        foreach ($generi as $genere) {
          $nuovo_genere = new Genre();
          $nuovo_genere->name = $genere;
          $nuovo_genere->save();
        }
    }
}
