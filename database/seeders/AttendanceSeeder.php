<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\Participant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(app()->environment() != 'production') {
            Participant::query()
                ->with('training', 'user')
                ->get()
                ->each(function($participant) {
                    $training = $participant->training;
                    $user = $participant->user;
                    foreach($training->dates as $date) {
                        Attendance::factory()->create([
                            'participant_id' => $participant->id,
                            'training_id' => $training->id,
                            'user_id' => $user->id,
                            'date' => $date,
                        ]);
                    }
                });
        }
    }
}
