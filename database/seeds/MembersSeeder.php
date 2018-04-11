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
      
      DB::table('coffees')->insert([
        'name'=>'Suplicar Clemencia Dark',
        'roast'=>'dark',
        'description'=>'We take a specially selected blend of beans and roast them until they beg for mercy. A roasty,chocolaty, full bodied and honey-sweet dark roast',
        'country_of_origin'=>'Not available',
        'image'=>str_random(10)
      ]);
      
      DB::table('coffees')->insert([
        'name'=>'Mexico Chiapas Altura',
        'roast'=>'medium',
        'description'=>'This beauty is comfortingly sweet, boasting a medium body with milk chocolate flavors interlaced with light spice and a sweet, mild finish. A really great way to start your morning!  Certified Organic and Fair Trade.',
        'country_of_origin'=>'Mexico',
        'image'=>str_random(10)
      ]);
      
      DB::table('coffees')->insert([
        'name'=>'Ethiopia Sidamo',
        'roast'=>'medium',
        'description'=>'We love the shear complexity of this traditional natural-processed beauty. Lots of lemongrass, slightly floral and a backnote of berries in the finish.  From the small-scale farmers of the Sidama Coffee Farmers Cooperative Union. Certified Organic and Fair Trade.',
        'country_of_origin'=>'Ethiopia',
        'image'=>str_random(10)
      ]);
      
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
      
      DB::table('users')->insert([
        'user_name'=>'Søren Kierkegaard',
        'user_password'=>str_random(32),
        'email'=>'sdlfkj@email.com'
      ]);
      
      DB::table('users')->insert([
        'user_name'=>'Honore de Balzac',
        'user_password'=>str_random(32),
        'email'=>'sdfjpowjifg@email.com'
      ]);
      
      DB::table('users')->insert([
        'user_name'=>'Theodore Roosevelt',
        'user_password'=>str_random(32),
        'email'=>'dhgpurg@email.com'
      ]);
            
    }
}
