<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Masyarakat;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        User::create([
            'name' => 'admin',
            'telp' => '12312312',
            'username' => 'admin',
            'password' => bcrypt('12345'),
            'level' => 'admin'
        ]);

        User::create([
            'name' => 'petugas',
            'telp' => '12312312',
            'username' => 'petugas',
            'password' => bcrypt('12345'),
            'level' => 'petugas'
        ]);

        Masyarakat::create([
            'name' => 'kubu',
            'nik' => '1234567890123455',
            'username' => 'kubu12',
            'password' => bcrypt('123456'),
            'telp' => '123123'
        ]);
    }
}
