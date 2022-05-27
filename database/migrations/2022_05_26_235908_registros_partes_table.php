<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegistrosPartesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros_partes', function (Blueprint $table) {
                $table->bigIncrements('regs_id');
                $table->unsignedInteger('centro_servicio');
                $table->foreign('centro_servicio')->references('censerv_id')->on('centro_servicios');
                $table->unsignedInteger('tipo_doc');
                $table->foreign('tipo_doc')->references('t_doc_id')->on('tipo_documento');
                $table->char('numero_documento', 20);
                $table->dateTime('fecha_documento',$precision = 0);
                $table->char('numero_pagina',25);
                $table->string('asunto_documento', 1500);
                $table->char('nombre_remitente',100);
                $table->char('nuevo_remitente_externo',100)->nullable();
                $table->unsignedInteger('tipo_representante');
                $table->foreign('tipo_representante')->references('t_repre_id')->on('tipo_representante');
                $table->unsignedInteger('tipo_doc_identi');
                $table->foreign('tipo_doc_identi')->references('t_doc_ident_id')->on('tipo_documento_identidad');
                $table->char('numero_documento_identidad',25);
                $table->string('direccion',350);
                $table->char('correo',150);
                $table->char('tel_cel',20);
                $table->string('referencia',350);
                $table->char('archivo',20);
                $table->unsignedInteger('estados');
                $table->foreign('estados')->references('est_id')->on('estados');
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
        Schema::dropIfExists('registros_partes');
    }
}
