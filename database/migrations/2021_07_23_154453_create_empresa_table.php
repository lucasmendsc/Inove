<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 20);
            $table->string('razao', 25);
            $table->string('cnpj', 14)->unique();
            $table->string('email', 20)->unique();
            $table->string('rua', 40);
            $table->string('bairro', 40);
            $table->integer('numero');
            $table->string('complemento', 25)->nullable();
            $table->string('cidade', 25);
            $table->string('estado', 20);
            $table->string('cep', 9);
            $table->string('telefone', 12)->nullable();
            $table->integer('ativo')->default('1');;
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
        Schema::dropIfExists('empresa');
    }
}
