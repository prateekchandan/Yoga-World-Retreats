<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('countries')->insert(array(
       	['name'=>'United States','iso'=>'USD','currency'=>'United States Dollar','symbol'=>'$','dollar_value'=>1],
       	['name'=>'Canada','iso'=>'CAD','currency'=>'Canadian Dollar','symbol'=>'$','dollar_value'=>0.75],
       	['name'=>'Euro Member','iso'=>'EUR','currency'=>'Euro','symbol'=>'€','dollar_value'=>1.10],
       	['name'=>'India','iso'=>'INR','currency'=>'Indian Rupee','symbol'=>'₹','dollar_value'=>0.015]
       	));
   
        // $this->call(UsersTableSeeder::class);
    }
}
