<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EstadosTable extends Migration
{
    public function up()
    {
        Schema::create('estados', function (Blueprint $table){
            $table->increments('est_id');
            $table->char('tipo_estado',1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
