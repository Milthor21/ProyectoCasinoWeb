<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('credit_table')->insert([
            'tipo' => 'basic',
            'cantidad' => 5,
            'imagen' => '5coin.jpeg'
        ]);
        DB::table('credit_table')->insert([
            'tipo' => 'medium',
            'cantidad' => 10,
            'imagen' => '10coin.jpeg'
        ]);
        DB::table('credit_table')->insert([
            'tipo' => 'high',
            'cantidad' => 25,
            'imagen' => '25coin.jpeg'
        ]);
    }
}
