<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosMercadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_mercados', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mercados_id')->unsigned();
            $table->bigInteger('pedido_id')->unsigned();
            $table->timestamps();
            $table->foreign('mercados_id')->references('id')->on('mercados')->onDelete('cascade');
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos_mercados');
    }
}
