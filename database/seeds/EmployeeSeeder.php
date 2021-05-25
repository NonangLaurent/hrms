<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('employees')->insert([
            'photo' => '',
            'code' => 'HR0001',
            'status' => '1',
            'name' => 'HR Manager',
            'gender' => '1',
            'date_of_birth' => null,
            'date_of_joining' => null,
            'number' => '9999999999',
            'qualification' => '',
            'emergency_number' => '',
            'pan_number' => '',
            'father_name' => '',
            'current_address' => '',
            'permanent_address' => '',
            'formalities' => null,
            'offer_acceptance' => null,
            'probation_period' => '',
            'date_of_confirmation' => null,
            'department' => '',
            'salary' => '',
            'account_number' => '',
            'bank_name' => '',
            'ifsc_code' => '',
            'pf_account_number' => '',
            'pf_status' => null,
            'date_of_resignation' => null,
            'notice_period' => '',
            'last_working_day' => null,
            'full_final' => null,
            'user_id' => '1'
        ]);
    }
}
