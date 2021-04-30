<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //definição da tabela  Info no mysql
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj')->default('');
            $table->string('razaoSocial')->default('');
            $table->string('nome')->default('');
            $table->string('data_abertura')->default('');
            $table->string('capital_social')->default('');
            $table->string('tipo')->default('');
            $table->string('nat_juridica')->default('');
            $table->string('porte')->default('');
            $table->string('qtdFuncionarios')->default('');
            $table->string('faturamento')->default('');
            $table->string('telefone')->default('');
            $table->string('email')->unique('');
            $table->string('estado')->default('');
            $table->string('municipio')->default('');
            $table->string('bairro')->default('');
            $table->string('logradouro')->default('');
            $table->string('numero')->default('');
            $table->string('complemento')->default('');
            $table->string('cep')->default('');
            $table->string('Atv_economica')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infos');
    }
}
