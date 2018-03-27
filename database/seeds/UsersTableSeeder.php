<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $digits = 9;
        DB::table('users')->insert([
            'name' => str_random(10),
            'address' => str_random(10),
            'phone' => rand(pow(10, $digits-1), pow(10, $digits)-1),
            'email' => 'demo.acc@system.te',
            'password' => bcrypt('password'),
        ]);
    }
}
