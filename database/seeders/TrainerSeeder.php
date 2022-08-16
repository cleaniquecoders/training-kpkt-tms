<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(app()->environment() != 'production') {
            User::factory(rand(5,15))->create([
                'is_trainer' => true,
                'is_admin' => false,
            ]);
        }
    }
}
