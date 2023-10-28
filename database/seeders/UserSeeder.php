<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            // 'roles_id' => 1,
            'email' => 'admin@dkv.com',
            'password' => bcrypt('admin123'),
        ]);
        $admin->assignRole('admin');

        $guru = User::create([
            'name' => 'Guru Design',
            // 'roles_id' => 1,
            'email' => 'guru@dkv.com',
            'password' => bcrypt('guru123'),
        ]);
        $guru->assignRole('guru');

        $murid = User::create([
            'name' => 'Murid',
            // 'roles_id' => 1,
            'email' => 'murid@dkv.com',
            'password' => bcrypt('murid123'),
        ]);
        $murid->assignRole('murid');
    }
}
