<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'Freelancer',
            'slug' => 'freelancer',
        ]);

        DB::table('roles')->insert([
            'name' => 'Customer',
            'slug' => 'customer',
        ]);

        DB::table('roles')->insert([
            'name' => 'Author',
            'slug' => 'author',
        ]);

    }

    
}
