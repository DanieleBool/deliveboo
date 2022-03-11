<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Giovanni','Marco','Giorgio','Roberto', 'Anais','Samuele','Lorenzo','Claudio','Jimmy','Anna','Alex','Leonardo','Gianluca','Daniele','Nicholas','Cristina'];

        $surnames = ['Argentiero','Cusenza','Monne','Di Ambrosio', 'Di Genoa','Madrigali','Torelli', 'Di Caprio','Hu','Bigatti','De Rosa', 'Selmini','Benassi','Di Elauterio','Romiti','Galfo'];

        $password = Hash::make('test1234!');



        for($i = 0; $i < count($names); $i++){
            $newUser = new User;
            $newUser->name = $names[$i];
            $newUser->surname = $surnames[$i];
            // questa str_replace rimpiazza tutti is spazi vuoti nella mail e str lower transforma il testo in lowercase
            $newUser->email = str_replace(' ', '',strtolower(($names[$i].$surnames[$i].'@gmail.com'))) ;
            $newUser->password = $password;
            $newUser->vat =strval(rand(10000, 99999).rand(100000, 999999));
            $newUser->save();
        };

    }
}
