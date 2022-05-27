<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CentroServiciosTable extends Migration
{
    public function up()
    {
        Schema::create('centro_servicios', function (Blueprint $table){
            $table->increments('censerv_id');
            $table->char('direccion_centro', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('centro_servicios');
    }
}
