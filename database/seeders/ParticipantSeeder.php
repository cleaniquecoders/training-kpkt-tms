<?php

namespace Database\Seeders;

use App\Models\Participant;
use App\Models\Training;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(app()->environment() != 'production') {
            User::factory(250)->create([
                'is_trainer' => false,
                'is_admin' => false,
            ]);
    
            Training::inRandomOrder()
                ->get()
                ->each(function($training) {
                    User::query()
                        ->whereIsTrainer(false)
                        ->whereIsAdmin(false)
                        ->inRandomOrder()
                        ->limit(10)
                        ->get()
                        ->each(
                            fn($user) => Participant::create([
                                'training_id' => $training->id,
                                'user_id' => $user->id,
                            ]) 
                        );
                });
        }
        
    }
}
