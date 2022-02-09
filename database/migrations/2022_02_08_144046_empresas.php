<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('razaosocial');
            $table->string('cnpj');
            $table->string('cep');
            
            $table->unsignedBigInteger('city_id')->foreignId('city_id')->references('id')->on('cities')->constrained();

            $table->unsignedBigInteger('state_id')->foreignId('state_id')->references('id')->on('states')->constrained();
            $table->string('logradouro');
            $table->string('num');
            $table->string('complemento')->nullable();
            $table->string('bairro');
            $table->string('email');
            $table->string('site')->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('ie')->nullable();
            $table->string('im')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('responsavel');
            $table->boolean('contrato');
            $table->boolean('status');
            $table->timestamps();
            $table->char('movimento',1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
