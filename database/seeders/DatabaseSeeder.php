<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        // On appelle le seeder EstimatesTableSeeder pour peupler la table "estimates"
        $this->call(EstimatesTableSeeder::class);
        
    }
}