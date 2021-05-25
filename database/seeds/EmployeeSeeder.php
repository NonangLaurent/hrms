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
            'date_of_birth' => '1984-09-26',
            'date_of_joining' => '2021-05-24',
            'number' => '9999999999',
            'qualification' => '',
            'emergency_number' => '',
            'pan_number' => '',
            'father_name' => '',
            'current_address' => '',
            'permanent_address' => '',
            'formalities' => '1',
            'offer_acceptance' => '1',
            'probation_period' => '',
            'date_of_confirmation' => '2021-05-01',
            'department' => '',
            'salary' => '',
            'account_number' => '',
            'bank_name' => '',
            'ifsc_code' => '',
            'pf_account_number' => '',
            'pf_status' => '1',
            'date_of_resignation' => '9999-12-31',
            'notice_period' => '',
            'last_working_day' => '2021-05-24',
            'full_final' => '0',
            'user_id' => '1'
        ]);
    }
}
