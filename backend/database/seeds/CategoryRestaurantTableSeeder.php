<?php

use Illuminate\Database\Seeder;



class CategoryRestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 15; $i++){
            // App::find serve per trovare il model con l'indice
            $restaurant = App\Restaurant::find($i + 1);
            // attach permette di scrivere nella tabella pivot collegando in questo caso l'indice delle due tabelle interessate;
            $restaurant->categories()->attach($i + 1);
        }
    }
}
