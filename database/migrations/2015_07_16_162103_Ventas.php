<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ventas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', 
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('id_cliente');
                $table->string('estado');
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
