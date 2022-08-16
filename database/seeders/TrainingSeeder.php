<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Training;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(app()->environment() != 'production') {
            $company = Company::inRandomOrder()->first();
            $trainer = User::whereIsTrainer(true)->inRandomOrder()->first();
            
            Training::factory(rand(5, 10))->create([
                'trainer_id' => $trainer->id, 
                'company_id' => $company->id,
            ]);
        }
    }
}
