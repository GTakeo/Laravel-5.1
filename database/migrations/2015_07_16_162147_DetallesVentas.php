<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetallesVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('detallesventas', 
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('id_venta');
                $table->string('id_producto');
                $table->integer('cantidad');
                $table->rememberToken();
                $table->timestamps();
                }

        );
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
