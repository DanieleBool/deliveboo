<?php

use Illuminate\Database\Seeder;
use App\Dish;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $dishes =[
                [
                    'name' => 'Carbonara',
                    'price' => '12',
                    'description' => 'Uova, Pancetta',
                ],
                [
                    'name' => 'Amatriciana',
                    'price' => '10',
                    'description' => 'Pomodoro, pancetta, peperoncino',
                ],
                [
                    'name' => 'Sha Zhu Cai',
                    'price' => '12',
                    'description' => 'Sanguinaccio, fegato, tofu, cavolo fermentato, zenzero, coriandolo e peperoncino',
                ],
                [
                    'name' => 'Yuxiangqiezi',
                    'price' => '18',
                    'description' => 'Melanzane cotte con aglio, zenzero, chili e cipollotti',
                ],
                [
                    'name' => 'Pasta di Mandorla',
                    'price' => '12',
                    'description' => 'Pomodorini, mandorle siciliane',
                ],
                [
                    'name' => 'Arancine',
                    'price' => '10',
                    'description' => 'Sugo di carne, piselli e formaggio',
                ],
                [
                    'name' => 'Pad Thai',
                    'price' => '10',
                    'description' => 'Pasta di riso fritta, uovo, salsa di pesce, peperoncino, verdure, germogli di soia, gamberi e pollo o tofu.',
                ],
                [
                    'name' => 'Green Curry',
                    'price' => '15',
                    'description' => 'Pasta di curry verde, latte di cocco, pollo, verdure miste',
                ],
                [
                    'name' => 'Double Whopper',
                    'price' => '10',
                    'description' => 'Carne, uova, sedano, sesamo.',
                ],
                [
                    'name' => 'Chili Cheese bites',
                    'price' => '6',
                    'description' => 'Cheddar, jalapenos',
                ],
                [
                    'name' => 'Double cheese & baconburger',
                    'price' => '8',
                    'description' => 'Bacon, insalata, salsa burger',
                ],
                [
                    'name' => 'Hot Wings',
                    'price' => '8',
                    'description' => 'Ali di pollo, chili',
                ],
                [
                    'name' => 'Panissa Vercellese',
                    'price' => '15',
                    'description' => 'Salsiccia, riso e fagioli',
                ],
                [
                    'name' => 'Fritto misto piemontese',
                    'price' => '25',
                    'description' => 'Cervella, fegato, animelle, salsiccia, frutta, ortaggi, amaretti',
                ],
                [
                    'name' => 'Ramen',
                    'price' => '15',
                    'description' => 'Spaghetti di frumento, brodo di carne, maiale',
                ],
                [
                    'name' => 'Uramaki',
                    'price' => '15',
                    'description' => 'Verdura, frutta, formaggio o pesce',
                ],

        ];

        foreach ($dishes as $key => $dish) {
            $newDish = new Dish;
            $newDish -> restaurant_id = $key + 1;
            $newDish -> name = $dish['name'];
            $newDish -> description = $dish['description'];
            $newDish -> price = $dish['price'];
            $newDish -> save();
        }

    }
}
