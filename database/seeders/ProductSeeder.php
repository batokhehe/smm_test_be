<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['code' => 'ATK0001', 'name' => 'AMPLOP A COKLAT JAYA', 'location' => 'L1-R1A', 'stock' => '17', 'uom' => 'Pak', 'status' => '0', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['code' => 'ATK0002', 'name' => 'AMPLOP B COKLAT JAYA', 'location' => 'L1-R1A', 'stock' => '32', 'uom' => 'Pak', 'status' => '0', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['code' => 'ATK0003', 'name' => 'AMPLOP C COKLAT JAYA', 'location' => 'L1-R1A', 'stock' => '9', 'uom' => 'Pak', 'status' => '0', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['code' => 'ATK0004', 'name' => 'AMPLOP D COKLAT JAYA', 'location' => 'L1-R1A', 'stock' => '7', 'uom' => 'Bal', 'status' => '0', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['code' => 'ATK0005', 'name' => 'AMPLOP E COKLAT JAYA', 'location' => 'L1-R1A', 'stock' => '80', 'uom' => 'Bal', 'status' => '0', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['code' => 'ATK0006', 'name' => 'AMPLOP F COKLAT JAYA', 'location' => 'L1-R1A', 'stock' => '1', 'uom' => 'Bal', 'status' => '0', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['code' => 'ATK0007', 'name' => 'AMPLOP G COKLAT JAYA', 'location' => 'L1-R1A', 'stock' => '23', 'uom' => 'Pcs', 'status' => '0', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['code' => 'ATK0008', 'name' => 'AMPLOP H COKLAT JAYA', 'location' => 'L1-R1A', 'stock' => '18', 'uom' => 'Pcs', 'status' => '0', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['code' => 'ATK0009', 'name' => 'AMPLOP I COKLAT JAYA', 'location' => 'L1-R1A', 'stock' => '30', 'uom' => 'Pcs', 'status' => '0', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['code' => 'ATK0010', 'name' => 'AMPLOP J COKLAT JAYA', 'location' => 'L1-R1A', 'stock' => '15', 'uom' => 'Pcs', 'status' => '0', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            
        ];
        
        DB::table('products')->insert($data);
    }
}
