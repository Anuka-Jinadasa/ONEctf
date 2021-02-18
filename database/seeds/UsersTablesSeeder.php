<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create
        ([
          'name' => 'gandalf_the_gray',
          'email' => 'gandalf@lorienmail.me',
          'password' => Hash::make('galadriel'),
          'remember_token' => str_random(2)
        ]);
    }
}
