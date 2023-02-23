<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('roles')->insert([
                    'name' => 'admin',
                    'slug' => 'admin',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
            ]);
            DB::table('roles')->insert([
                    'name' => 'seller',
                    'slug' => 'seller',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
            ]);
            DB::table('roles')->insert([
                    'name' => 'customer',
                    'slug' => 'customer',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
            ]);
    }
}
