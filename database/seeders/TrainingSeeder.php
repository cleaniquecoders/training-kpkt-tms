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
            $started_at = now()->addMonth();
            $ended_at = $started_at->copy()->addDays(rand(1, 5));
            
            Training::factory(rand(5, 10))->create([
                'trainer_id' => $trainer->id, 
                'company_id' => $company->id,
                'started_at' => $started_at,
                'ended_at' => $ended_at,
            ]);
        }
    }
}
