<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class EmpresaSeeder extends Seeder
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
            'razaosocial'=> 'R2SB Consultoria em TI',
            'cnpj'=>'15.594.640/0001-44',
            'cep'=>'02042-000',
            'city_id'=>5271,
            'state_id'=>25,
            'logradouro'=>'Av. Leoncio de Magalhães',
            'num'=>'254',
            'bairro'=>'Jd. São Paulo',
            'email'=>'sistema@r2sb.com.br',
            'responsavel'=>'Rodrigo',
            'contrato'=>0,
            'status'=>1,
            'movimento'=>'I'

        ];
        DB::table('empresas')->insert($users);
    }
}
