<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users[]=[
            'nivel_id'=> 1,
            'name'=>'Administrador',
            'email'=>'sistema@r2sb.com.br',
            'password'=>Hash::make('123mudar'),
            'ativo'=>1,
            'empresa_id'=>1

        ];
        DB::table('users')->insert($users);
    }
}
