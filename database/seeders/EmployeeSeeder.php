<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nik' => '001.059.00501', 'name' => 'Ruslan Bima', 'department_id' => '1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['nik' => '001.059.00502', 'name' => 'Lutfi Surya', 'department_id' => '2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['nik' => '001.059.00503', 'name' => 'Ratna Sidik', 'department_id' => '3', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['nik' => '001.059.00504', 'name' => 'Sari Tirto', 'department_id' => '4', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['nik' => '001.059.00505', 'name' => 'Amir Ratna', 'department_id' => '5', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['nik' => '001.059.00506', 'name' => 'Kasih Hadi', 'department_id' => '6', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['nik' => '001.059.00507', 'name' => 'Anisa Yuda', 'department_id' => '7', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['nik' => '001.059.00508', 'name' => 'Ahmad Umar', 'department_id' => '8', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['nik' => '001.059.00509', 'name' => 'Buana Alya', 'department_id' => '9', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['nik' => '001.059.00510', 'name' => 'Akbar Ratna', 'department_id' => '10', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            
        ];
        
        DB::table('employees')->insert($data);
    }
}
