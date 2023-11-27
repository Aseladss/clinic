<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'external_user_id' => 1001,
            'fname' => 'Asela',
            'lname' => 'Dewanarayana',
            'username' => 'asela_dew',
            'user_group_id' => 1,
            'is_practitioner' => 0,
            'email' => 'asela.positive@gmail.com',
            'password' => Hash::make('abc123'), // Hash the password
            'created_at' => now(),
            'updated_at' => now(),
            'clinic_id' => 1,
            'status' => 1,
            'is_user' => 1,
            'is_first_login' => 1,
            'job_title' => 'Operator',
            'job_designations_id' => 1,
            'filter_col' => 1,
        ]);
    }
}
