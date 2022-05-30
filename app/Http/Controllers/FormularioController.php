<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormularioController extends Controller
{
    public function index()
    {
        //obtener centros de servicios
        $servcent = DB::table('centro_servicios')->get();
        $tipodoc = DB::table('tipo_documento')->get();
        $tiporepre = DB::table('tipo_representante')->get();
        $tipodocidenti = DB::table('tipo_documento_identidad')->get();
        return view('frm_tramite.index',compact('servcent','tipodoc','tiporepre','tipodocidenti'));
    }
}
