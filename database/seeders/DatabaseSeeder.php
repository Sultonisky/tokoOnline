<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // data user
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => '1',
            'password' => bcrypt('admin123'),
            'hp' => '0812345678901',
            'foto' => '',
        ]);
        User::create([
            'nama' => 'sultoni',
            'email' => 'sultoni123@gmail.com',
            'role' => '0',
            'status' => '1',
            'password' => bcrypt('sultoni123'),
            'hp' => '081234567892',
            'foto' => '',
        ]);

        // data kategori
        Kategori::create([
            'nama_kategori' => 'Brownies',
        ]);
        Kategori::create([
            'nama_kategori' => 'Combro',
        ]);
        Kategori::create([
            'nama_kategori' => 'Minuman',
        ]);
    }
}
