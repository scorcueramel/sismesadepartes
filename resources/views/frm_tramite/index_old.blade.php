<!doctype html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <title>Registro - Inicio de trámite</title>
</head>
<body>
<div class="container">
    <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data" id="formulario">
        @csrf
        <h1 class="text-center" style="margin-top: 3%; margin-bottom: 3%;">Mesa de Partes Virtual</h1>
        <div class="card">
            <div class="card-header">
                <p class="h5">DATOS DEL DOCUMENTO</p>
            </div>
            <div class="card-body">
                <div class="row mt-1">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                        <p class="h6 mt-2">CENTROS DE SERVICIOS</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 mb-3">
                        <select name="" id="" class="form-control" required>
                            <option value="0">Seleccione un Centro de Servicio</option>
                            @foreach($servcent as $i)
                                <option value="{{$i->censerv_id}}">{{$i->direccion_centro}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3">
                        <a href="#" class="btn btn-success" style="border-radius: 50%; width: 35px;  height: 35px" data-toggle="modal" data-target="#modal1">
                            <box-icon name='file-find' flip='horizontal' color='#ffffff' style="margin-left: -14px; margin-top: -1px; width: 30px;  height: 30px"></box-icon>
                        </a>
                        Ver mapa de direcciones
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                        <p class="h6 mt-2">TIPO DE DOCUMENTO</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 mb-3">
                        <select name="" id="" class="form-control" required>
                            <option value="0">Seleccione un Tipo de Documento</option>
                            @foreach($tipodoc as $i)
                                <option value="{{$i->t_doc_id}}">{{$i->desc_documento}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                        <p class="h6 mt-2">NÚMERO DE DOCUMENTO</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 mb-3">
                        <input type="text" class="form-control" id="nrodoc" placeholder="Número de documento" name="nrodoc" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3">
                    </div>
                </div>
                <div class="row mt-1 ">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                        <p class="h6 mt-2">FECHA DEL DOCUMENTO</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 mb-3">
                        <input type="text"  class="form-control"  id="datepicker" placeholder="Fecha del documento" name="nrodoc" required/>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                        <p class="h6 mt-2">NÚMERO DE PÁGINA</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 mb-3">
                        <input type="text" class="form-control" id="nropag" placeholder="Número de página" name="nropag" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                        <p class="h6 mt-2">ASUNTO DEL DOCUMENTO</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 mb-3">
                        <textarea class="form-control" rows="3" name="asunto"></textarea>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3">
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <p class="h5">DATOS DEL SOLICITANTE</p>
            </div>
            <div class="card-body">
                <div class="row mt-1">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                        <p class="h6 mt-2">NOMBRE DEL REMITENTE</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 mb-3">
                        <input type="text" class="form-control" id="nomremitente" placeholder="Nombre del remitente" name="nomremitente" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                        <p class="h6 mt-2">NOMBRE DEL NUEVO REMITENTE</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 mb-2">
                        <input type="text" class="form-control" id="nomnueremitente" placeholder="Nombre del nuevo remitente" name="nomnueremitente" disabled>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3">
                        <button type="button" class="btn btn-primary" style="border-radius: 50%; width: 35px;  height: 35px" id="agregar">
                            <box-icon name='plus-medical' color='#ffffff' style="margin-left: -7px; margin-top: -1px; width: 30px;  height: 30px"></box-icon>
                        </button>
                        <form action="">
                            @csrf
                            <button type="submit" class="btn btn-warning" style="border-radius: 50%;width: 35px;  height: 35px" id="salvar">
                                <box-icon name='save' type='solid' color='#ffffff' style="margin-left: -7px; margin-top: -1px; width: 30px;  height: 30px"></box-icon>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="row mt-1 mb-3">
                    <div class="col-auto">
                        <span style="color: #006EAA; font-size: 13px">En caso de no encontrar su nombre, dar clic en (+), luego escribir su nombre en el campo habilitado y dar clic en el boton grabar para registrarlo.</span>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                        <p class="h6 mt-2">TIPO DE REPRESENTANTE</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 mb-3">
                        <select name="" id="" class="form-control" required>
                            <option value="0">Seleccione un Tipo de Representante</option>
                            @foreach($tiporepre as $i)
                                <option value="{{$i->t_repre_id}}">{{$i->tipo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3">
                    </div>
                </div>
                <div class="row mt-1 ">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                        <p class="h6 mt-2">TIPO DE DOCUMENTO DE IDENTIDAD</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 mb-3">
                        <select name="" id="" class="form-control" required>
                            <option value="0">Seleccione un Tipo de Documento de Identidad</option>
                            @foreach($tipodocidenti as $i)
                                <option value="{{$i->t_doc_ident_id}}">{{$i->t_doc_identidad}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                        <p class="h6 mt-2">NÚMERO DE DOCUMENTO DE IDENTIDAD</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 mb-3">
                        <input type="text" class="form-control" id="numdocidenti" placeholder="Número de documento de identidad" name="numdocidenti">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="card" style="width: 100%; margin: 2% 0;">
        <div class="card-body">

                <div class="card-body">
                    <div class="form-group row">
                        <label for="sector" class="col-sm-3 col-md-3 col-lg-3 col-form-label">Sector</label>
                        <div class="col-sm-9 col-md-9 col-lg-3">
                            <select class="form-control" id="sector" name="sector" required>
                                <option value="item0">--Elija una opción--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                        <label for="subsector" class="col-sm-3 col-md-3 col-lg-3 col-form-label">Subsector</label>
                        <div class="col-sm-9 col-md-9 col-lg-3">
                            <select class="form-control" id="subsector" name="subsector" required>
                                <option value="">-- Elija una opción -- </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-end">
                            <a href="{{ url('/img/mapa_subsectores.pdf') }}" class="btn btn-success" target="_blank">Conoce tu sector y subsector</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tipodoc" class="col-sm-3 col-md-3 col-lg-3 col-form-label">Tipo de documento</label>
                        <div class="col-sm-9 col-md-9 col-lg-3">
                            <select class="form-control" id="tipodocumento" name="tipodoc" required>
                                <option value="">Seleccione</option>
                                <option value="DNI">DNI</option>
                                <option value="CE">CE</option>
                                <option value="OTR">OTROS</option>
                            </select>
                        </div>
                        <label for="numero" class="col-sm-3 col-md-3 col-lg-3 col-form-label">Número de documento</label>
                        <div class="col-sm-9 col-md-9 col-lg-3">
                            <input type="number" class="form-control" id="numero" placeholder="Número de documento" name="numdoc" required onchange="return ValidarDocumento(this)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nombres" class="col-sm-3 col-md-3 col-lg-3 col-form-label">Nombres</label>
                        <div class="col-sm-9 col-md-9 col-lg-9">
                            <input type="text" class="form-control" id="nombres" placeholder="Nombres" name="nombres" required onkeypress="return soloLetras(event);">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="paterno" class="col-sm-3 col-md-3 col-lg-3 col-form-label">A. Paterno</label>
                        <div class="col-sm-9 col-md-9 col-lg-3">
                            <input for="paterno" type="text" class="form-control" id="paterno" placeholder="Apellido paterno" name="paterno" required onkeypress="return soloLetras(event);">
                        </div>
                        <label for="materno" class="col-sm-3 col-md-3 col-lg-3 col-form-label">A. Materno</label>
                        <div class="col-sm-9 col-md-9 col-lg-3">
                            <input type="text" class="form-control" id="materno" placeholder="Apellido materno" name="materno" required onkeypress="return soloLetras(event);">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="domicilio" class="col-sm-3 col-md-3 col-lg-3 col-form-label">Domicilio</label>
                        <div class="col-sm-9 col-md-9 col-lg-4">
                            <input type="text" class="form-control" id="domicilio" placeholder="Domicilio" name="domicilio" required>
                        </div>
                        <label for="urbanizacion" class="col-sm-3 col-md-3 col-lg-2 col-form-label">Urbanización</label>
                        <div class="col-sm-9 col-md-9 col-lg-3">
                            <input type="text" class="form-control" id="urbanizacion" placeholder="Urbanización" name="urbanizacion" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-sm-3 col-md-3 col-lg-3 col-form-label">Teléfono</label>
                        <div class="col-sm-9 col-md-9 col-lg-3">
                            <input type="text" class="form-control" id="telefono" placeholder="Teléfono" name="telefono" required>
                        </div>
                        <label for="correo" class="col-sm-3 col-md-3 col-lg-2 col-form-label">Correo Electrónico</label>
                        <div class="col-sm-9 col-md-9 col-lg-4">
                            <input type="email" aria-describedby="emailHelp" class="form-control" id="correo"
                                   placeholder="Correo Electrónico" name="correo" required>
                            <small class="form-text text-info">A este correo recibirá su confirmación</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="residente" class="col-sm-3 col-md-3 col-lg-3 col-form-label">Residente</label>
                        <div class="col-sm-9 col-md-9 col-lg-2">
                            <select name="residente" class="form-control" id="residente" required>
                                <option value="">SELECCIONAR</option>
                                <option value="propietario">Propietario</option>
                                <option value="inquilino">Inquilino</option>
                            </select>
                        </div>
                        <label for="domiciliodni" class="col-sm-3 col-md-3 col-lg-4 col-form-label">El domicilio señalado es el mismo que el DNI</label>
                        <div class="col-sm-9 col-md-9 col-lg-3">
                            <select name="domiciliodni" class="form-control" id="domiciliodni" required>
                                <option value="">SELECCIONAR</option>
                                <option value="Si">Si</option>
                                <option value="No">No (Adjunta Declaracion Jurada)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-md-3 col-lg-3 col-form-label"></label>
                        <div class="col-sm-9 col-md-9 col-lg-4">
                            <input type="file" class="form-control-file mb-2" id="dj" name="decjurada" style="display: none">
                        </div>
                        <div class="col-sm-9 col-md-9 col-lg-4">
                            <a id="formato" href="{{ url('/img/formato_dj.pdf') }}" style="display: none" target="_blank">Descargar modelo de DJ</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-auto col-md-auto col-lg-auto custom-control custom-checkbox ml-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                            <label class="custom-control-label" for="customCheck1"></label>
                        </div>
                        <p class="badge" class="col-sm-auto col-md-auto col-lg-auto col-form-label">Acepto haber le&#237;do las </p><a href="#" class="badge badge" data-toggle="modal" data-target="#modal" class="col-sm-auto col-md-auto col-lg-auto col-form-label ">politicas de privacidad y los términos y condiciones.</a>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-auto col-md-auto col-lg-auto mt-4">
                            <button id="btnEnviar" type="submit" class="btn btn-primary btn-block">Generar Registro</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<!-- Modal mapa de centros de servicios-->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mapa de Centros de Servicios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-justify">
                <img src="{{url('/storage/mapa_del_peru.png')}}" alt="mapa de centro de servicios" style="width: 95vh;height: 100vh;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Politicas-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Políticas de Privacidad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-justify">
                La presente Política de Privacidad establece los términos que la Municipalidad Distrital de Santiago de Surco de la ciudad de Lima – Perú, en adelante la “Municipalidad”, usa y protege la información que es proporcionada por sus usuarios cuando utilizan su website (sitio web), aplicaciones móviles o aplicaciones web.

                La Municipalidad está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento.

                Información que es recogida

                Nuestro website podrá recoger información personal como por ejemplo: nombre, información de contacto como su dirección de correo electrónico e información demográfica. Así mismo cuando sea necesario podrá ser requerida información para procesar alguna solicitud.

                Uso de la información recogida

                Nuestro website emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros servicios municipales. Es posible que sean enviados correos electrónicos periódicamente a través de nuestro website o aplicaciones móviles con nuevos servicios e información institucional que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione.

                La Municipalidad está comprometida mantener su información segura. Usamos sistemas informáticos avanzados y los actualizamos para asegurar que no existan accesos no autorizados.

                La Municipalidad no utilizara la información proporcionada a entidades financieras al momento de efectuar una transacción de pago en línea.

                Las Empresas Financieras que intervienen en la operación y ejecución de los pagos de las obligaciones tributarias y no tributarias vía Internet (Pagos Virtuales) pueden tener Políticas de Privacidad diferentes a las de la Municipalidad por lo que no se aplica lo expuesto en el presente documento al tratamiento de los datos proporcionados por el usuario a dichas Empresas Financieras.

                Cookies

                Un cookie se refiere a un archivo (fichero) que es enviado con la finalidad de solicitar permiso para almacenarse en su terminal (computador, smartphone, tablet, etc.) al aceptar dicho archivo se crea y sirve para obtener información respecto al tráfico web y facilita las futuras visitas a un website recurrente. Otra función que tiene un cookie es que permite a la website reconocerlo individualmente y brindarle un mejor servicio personalizado.

                Nuestro website emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta información es empleada únicamente para análisis estadístico y después la información se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los websites, estás no dan acceso a información de su computador ni de usted, a menos de que usted así lo quiera y la proporcione directamente. Usted puede aceptar o negar el uso de cookies, sin embargo la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.

                Enlaces a terceros

                Este sitio web pudiera contener enlaces (links) a otros sitios que pudieran ser de su interés. En el caso que usted seleccione estos enlaces y abandone nuestra página, ya no tenemos control sobre el website al cual es redirigido; por lo tanto, no somos responsables de los términos, condiciones de privacidad ni de protección de sus datos en esos otros websites de terceros. Dichos web sites están sujetos a sus propias políticas de privacidad por lo que se recomienda consultarlas para confirmar que está de acuerdo con estas.

                Control de su información personal

                En cualquier momento usted puede restringir la recopilación o el uso de información personal proporcionada a nuestro sitio web. Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información mediante correo electrónico. En caso de que haya marcado la opción de recibir información institucional usted puede cancelarla en cualquier momento.

                La Municipalidad no venderá, cederá ni distribuirá la información personal recopilada sin consentimiento del usuario, salvo por requerimiento judicial.

                La Municipalidad se reserva el derecho de cambiar los términos contenidos en la presente Política de Privacidad cuando considere conveniente, por lo que recomendamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });


    $(()=>{
        $('#agregar').on('click',()=>{
            if ($('#nomnueremitente').attr('disabled')) {
                $('#nomnueremitente').removeAttr('disabled');
                $('#nomnueremitente').focus();
            } else {
                $('#nomnueremitente').attr('disabled',true);
            }
        });
    });


    $(() => {
        $('#domiciliodni').on('change', (e) => {
            if ($(e.target).val() === 'No'){
                $('#dj').show();
                $('#formato').show();
                $('#dj').attr('required','');
            }
            else{
                $('#dj').hide();
                $('#formato').hide();
                $('#dj').removeAttr('required');
            };
        });

        $('#formulario').submit(e => {
            e.preventDefault();
            $.ajax({
                url: '{{ route('formulario') }}',
                type: 'POST',
                data: new FormData(e.target),
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    Swal.fire({
                        allowOutsideClick: false,
                        icon: 'info',
                        text: 'Espere por favor...'
                    });
                    Swal.showLoading();
                },
                complete: function() {

                },
                success: function(result) {
                    if (result.ok) {
                        Swal.fire({
                            icon: 'success',
                            title: '',
                            text: 'Inscripción exitosa, recibirá usted un mensaje en su correo electrónico.'
                        });
                        $('#formulario')[0].reset();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: result.mensaje
                        });
                    }
                },
                error: function(result) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al enviar',
                        text: result.responseText
                    });
                }
            });
        });
    });

    function ValidarDocumento(doc) {
        if (doc.value.length < 8) {
            alert("El número de documento no puede contener menos de 8 digitos");
            doc.focus();
            doc.select();
        }else if(doc.value.length > 12)
        {
            alert("El número de documento no puede contener más de 12 digitos");
            doc.focus();
            doc.select();
        }
    }

    function soloLetras(e) {
        var key = e.keyCode || e.which,
            tecla = String.fromCharCode(key).toLowerCase(),
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
            especiales = [8, 37, 39, 46],
            tecla_especial = false;

        for (var i in especiales) {
            if (key == especiales[i]) {
                tecla_especial = true;
                break;
            }
        }

        if (letras.indexOf(tecla) == -1 && !tecla_especial) {
            return false;
        }
    }

    $(document).ready(function () {
        $("#sector").change(function () {
            var val = $(this).val();
            if (val == "1") {
                $("#subsector").html("<option value='1.1'>1.1</option><option value='1.2'>1.2</option><option value='1.3'>1.3</option><option value='1.4'>1.4</option>");
            } else if (val == "2") {
                $("#subsector").html("<option value='2.1'>2.1</option><option value='2.2'>2.2</option><option value='2.3'>2.3</option><option value='2.4'>2.4</option>");
            } else if (val == "3") {
                $("#subsector").html("<option value='3.1'>3.1</option><option value='3.2'>3.2</option>");
            } else if (val == "4") {
                $("#subsector").html("<option value='4.1'>4.1</option><option value='4.2'>4.2</option>");
            } else if (val == "5") {
                $("#subsector").html("<option value='5.1'>5.1</option><option value='5.2'>5.2</option>");
            } else if (val == "6") {
                $("#subsector").html("<option value='6.1'>6.1</option>");
            } else if (val == "7") {
                $("#subsector").html("<option value='7.1'>7.1</option><option value='7.2'>7.2</option><option value='7.3'>7.3</option><option value='7.4'>7.4</option>");
            } else if (val == "8") {
                $("#subsector").html("<option value='8.1'>8.1</option><option value='8.2'>8.2</option><option value='8.3'>8.3</option><option value='8.4'>8.4</option>");
            } else if (val == "9") {
                $("#subsector").html("<option value='9.1'>9.1</option><option value='9.2'>9.2</option>");

            } else if (val == "item0") {
                $("#subsector").html("<option value=''>--Elija una opción--</option>");
            }
        });
    });
</script>
</body>
</html>



