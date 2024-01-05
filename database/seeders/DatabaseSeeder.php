<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'name' => 'John Doe',
            'age' => 25,
            'email' => 'john@example.com',
            'date_of_birth' => Carbon::parse('1998-01-15'),
            'gender' => 'male',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Urtzi Lusa',
            'age' => 21,
            'email' => 'asd@example.com',
            'date_of_birth' => Carbon::parse('2002-01-15'),
            'gender' => 'female',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
