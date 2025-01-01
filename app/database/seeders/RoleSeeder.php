<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            'name' => 'オーナー',
            'is_admin' => true
        ]);
        Role::factory()->create([
            'name' => '店長',
            'is_admin' => true
        ]);
        Role::factory()->create([
            'name' => 'スタッフ長',
            'is_admin' => true
        ]);
        Role::factory()->create([
            'name' => 'スタッフ'
        ]);
        Role::factory()->create([
            'name' => 'キャスト'
        ]);
    }
}
