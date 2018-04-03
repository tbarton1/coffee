<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
      DB::table('members')->insert([
        'first_name'=>'Clyde',
        'last_name'=>'McMurtry',
        'email'=>'clydeMC@email.com',
        'phone'=>'555-252-2552'
      ]);
      
      DB::table('members')->insert([
        'first_name'=>'Steve',
        'last_name'=>'Arrington',
        'email'=>'stevezie@email.com',
        'phone'=>'555-531-8008'
      ]);
      
      DB::table('members')->insert([
        'first_name'=>'Victor',
        'last_name'=>'Cappiello',
        'email'=>'purpleSoda@email.com',
        'phone'=>'555-252-1111'
      ]);
      
    }
}
