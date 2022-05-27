<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoDocumentoTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_documento', function (Blueprint $table){
            $table->increments('t_doc_id');
            $table->char('desc_documento',50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_documento');
    }
}
