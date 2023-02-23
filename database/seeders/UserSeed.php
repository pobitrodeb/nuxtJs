<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'role_id'           => 1,
            'name'              => 'Admin',
            'email'             => 'admin@admin.com',
            'password'             => bcrypt('12345678'),
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'role_id'           => 1,
            'name'              => 'Admin',
            'email'             => 'seller@admin.com',
            'password'             => bcrypt('12345678'),
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'role_id'           => 1,
            'name'              => 'Admin',
            'email'             => 'customer@admin.com',
            'password'             => bcrypt('12345678'),
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]);
    }
}
