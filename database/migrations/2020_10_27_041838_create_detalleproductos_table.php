<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleproductos', function (Blueprint $table) {
            $table->bigIncrements('id_detalle_producto');
            $table->string('tipo',30);
            $table->string('marca',30);
            $table->string('categoria',30);
            $table->string('distribuidor',30);
            $table->string('descripcion',30);
            $table->text('foto');
            $table->string('foto_nombre',30);

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
        Schema::dropIfExists('detalleproductos');
    }
}
