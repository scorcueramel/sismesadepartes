<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
    use HasFactory;
    protected $fillable = ['regs_id','centro_servicio','tipo_doc','numero_documento',
    'fecha_documento','numero_pagina','asunto_documento','nombre_remitente','nuevo_remitente_externo',
    'tipo_representante','tipo_doc_identi','numero_documento_identidad','direccion',
    'correo','tel_cel','referencia','archivo','estados'];
}
