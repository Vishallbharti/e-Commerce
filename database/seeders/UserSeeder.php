<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_user')->insert([
            'name' => 'Mohan Mishra',
            'email' => 'mohan@gmail.com',
            'password' => Hash::make('mohan@98')
        ]);
    }
}
