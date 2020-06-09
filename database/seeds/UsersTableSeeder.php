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
        DB::table('users')->insert([
            'id'=>2,
            'name'=>'Salaheddine',   
            'password'=>bcrypt(env('USER_MDP')),     
            'email'=>'el.salaheddine@hotmail.com']);
    }
}
