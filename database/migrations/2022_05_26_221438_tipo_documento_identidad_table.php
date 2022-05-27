<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoDocumentoIdentidadTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_documento_identidad', function (Blueprint $table){
            $table->increments('t_doc_ident_id');
            $table->char('t_doc_identidad',20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_documento_identidad');

    }
}
