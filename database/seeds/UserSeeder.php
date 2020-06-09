<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
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
        'password'=>env('USER_MDP'),     
        'email'=>'el.salaheddine@hotmail.com']);
    }
}
