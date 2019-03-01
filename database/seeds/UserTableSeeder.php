<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $users = array(

            ['first_name' => 'jane','last_name' => 'doe', 'email' => 'jdoe@adlink.com', 'password' => 'secrets'],

        );

        // Loop through each user above and create the record for them in the database


        // assign roles etc



        Model::reguard();
    }

}
