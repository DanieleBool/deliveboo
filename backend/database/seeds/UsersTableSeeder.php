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
        $names = ['Alex','Gianluca','Daniele','Leonardo', 'Nicholas','Cristina'];

        $surnames = ['De Rosa','Benassi','Di Eleuterio','Selmini', 'Romiti','Galfo'];

        $password = Hash::make('test1234!');



        for($i = 0; $i < count($names); $i++){
            $newUser = new User;
            $newUser->name = $names[$i];
            $newUser->surname = $surnames[$i];
            $newUser->email = str_replace(' ', '',strtolower(($names[$i].$surnames[$i].'@gmail.com'))) ;
            $newUser->password = $password;
            $newUser->vat =strval(rand(10000, 99999).rand(100000, 999999));
            $newUser->save();
        };

    }
}
