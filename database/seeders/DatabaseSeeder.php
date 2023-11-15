<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Bima Wisnuhani',
            'email' => 'bimaw@gmail.com',
            'password' => bcrypt('njarani01'),
            'prodi' => 'D3-MI PSDKU Kediri',
            'nim' => '2131730023',
            'tgl' => '2023-11-14',
        ]);
    }
}
