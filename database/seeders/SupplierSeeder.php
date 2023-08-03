<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert(
            [
                'code' => 'LPD',
                'name' => 'LPD Premier Devevelopment Corporation',
                'address' => 'Oroquieta City',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
    }
}
