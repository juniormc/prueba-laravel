<?php

use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
        	DB::table('peliculas')->insert([
                'title' => 'Movie '.$i,
                'excerpt' => 'My new movie',
                'detail' => 'My new movie description',
                'image' => '/images/movies/movie' . rand(1,5) . '.jpg',
                'isActive' => 1,
            ]);	
        }
    }
}