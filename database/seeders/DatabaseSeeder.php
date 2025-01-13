<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'id' => '01jhfwh6y3wst321j8rxx6nvzb',
            'name' => 'Jhon Doe',
            'email' => 'admin@admin.com',
            'password' => '$2y$12$1e.nycxA9BwobQ8LdOppZOGelA4HEtZ1QyhKPLEUu6y1gmShfOmHm',
            'remember_token' => 'ZJ9dbMSmhYO1HrDwu0eQd46VVhdN62EoXSoYDFQQCNX1ZsiysYJXs8Wbh74S',
        ]);
    }
}
