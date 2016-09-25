<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrphanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		
    	$faker = Faker\Factory::create();
    	
		
		for($i=1;$i<=20;$i++){
    		DB::table('orphans')->insert([
    			'first_name' => $faker->words(1, true),
    			'father_name' => $faker->words(1, true),
    			'grandfather_name' => $faker->words(1, true),
    			'family_name' => $faker->words(1, true),
    			'researcher_notes' => $faker->text,
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

    		]);
    	}		
    }
}
