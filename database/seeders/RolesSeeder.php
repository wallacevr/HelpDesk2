<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles[0]=[
            'name'=>'Super Admin',
            'display_name'=>'Super Admin',
        ];
        $roles[1]=[
            'name'=>'Admin',
            'display_name'=>'Admin',
        ];
        DB::table('roles')->insert($roles);
    }
}
