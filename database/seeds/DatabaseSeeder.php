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
       	['name'=>'United States','isd_code'=>'+1','iso'=>'USD','currency'=>'United States Dollar','symbol'=>'$','dollar_value'=>1],
       	['name'=>'Canada','isd_code'=>'+1','iso'=>'CAD','currency'=>'Canadian Dollar','symbol'=>'$','dollar_value'=>0.75],
        ['name'=>'India','isd_code'=>'+91','iso'=>'INR','currency'=>'Indian Rupee','symbol'=>'₹','dollar_value'=>0.015],
       	['name'=>'Afghanistan','isd_code'=>'+93','iso'=>' AFN','currency'=>'Afghanistan Afghani','symbol'=>'؋','dollar_value'=>0.015]
       	));
   
        // $this->call(UsersTableSeeder::class);
    }
}
