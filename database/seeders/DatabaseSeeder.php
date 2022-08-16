<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@app',
            'is_trainer' => false,
            'is_admin' => true,
        ]);

        $this->call(CompanySeeder::class);
        $this->call(TrainerSeeder::class);
        $this->call(TrainingSeeder::class);
        $this->call(ParticipantSeeder::class);
        $this->call(AttendanceSeeder::class);
    }
}
