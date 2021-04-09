<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('denominacao');
            $table->string('contacto');
            $table->string('nif');
            $table->string('Email');
            $table->string('Codpostal');
            $table->string('cae');
            $table->string('datainicioativ');
            $table->string('Natureza');
            $table->string('cotadabolsa');
            $table->string('volumenegocios');
            $table->string('nrtrabalhadores');
            $table->string('Faturasemitidas');
            $table->string('docfornecedores');
            $table->string('docbancos');
            $table->boolean('status');
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
        Schema::dropIfExists('pedidos');
    }

    public function user()
   {
    return $this->belongsTo('user');
   }
