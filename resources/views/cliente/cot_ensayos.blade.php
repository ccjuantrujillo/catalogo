@extends('layouts.cliente')

@section('title', 'Laboratorio Nº6 de Electricidad de la Facultad de Ingeniería Eléctrica y Electrónica -
Universidad Nacional de Ingeniería')

@section('content')
        <style>
            .edward{
                color: green !important;
                background-color: white !important;
                border:1px solid green !important;
                border-radius: 10px !important;
            }
            .edward:hover{
                color:white !important;
                background-color: green !important;
                border-radius: 10px !important;
            }
            .btn-dec{
                border:1px solid white !important;
                color: white !important;
                width: 75% !important;
            }
            .btn-dec:hover{
                color: rgb(107, 0, 0)!important;
                background-color: white !important;
                font-weight: bold;
            }
            .men{
                background-color: #800404;
                text-align: center;
            }
            #header {
                width:fit-content;
                font-family:Arial, Helvetica, sans-serif;
                padding-left: 15rem;
            }

            ul, ol {
                list-style:none;
            }

            .nav > li {
                float:left;
                padding:1rem 0.5rem;
            }

            td {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                text-align: justify;
            }

            table {
                table-layout:fixed;
                width: 100%;
            }

            .nav li a {
                background-color:#800404;
                color:#fff;
                text-decoration:none;
                padding:10px 12px;
                display:block;
                font-weight: bold;
                text-align: left;
            }
            .nav li a:hover,.nav li:hover {
                background-color:#8e0606;
            }

            .nav li ul {
                display:none;
                position:absolute;
                min-width:140px;
                z-index: 9999;

            }

            .nav li:hover > ul {
                display:block;
                padding-top: 1rem;
            }

            .nav li ul li {
                position:relative;
            }

            .nav li ul li ul {
                right:-140px;
                top:0px;
            }
        </style>

        <!-- Inicio del formulario de cotizaciones de ensayos -->

        <h1 style="text-align: center;font-size:65px;color:black;">Formulario de Solicitud de Ensayo</h1>
        <hr>

<form method="POST" action="{{ route('cot_ensayos.store') }}">
    @csrf
        <div id="crud_equipos" class="row">
            <div class="col-sm-6 border" style="padding-bottom: 8px;padding-top: 8px;">
                <h4 style="text-align: center;color:black;">Empresa Solicitante</h4>
                <div class="form-horizontal form-control" style="width:500px;height:705px;margin:0 auto">
                    Nombre del Solicitante:
                    <br>
                    <input class="form-control" type="text" name="SOLIC_Nombre" id="SOLIC_Nombre" />
                    Tipo de Solicitante:
                    <br>

                    <select class="form-control" name="SOLIC_id" id="SOLIC_id">
                            <option value=""> --- Escoja el tipo de solicitante --- </option>
                            <option value="1">Persona Natural</option>
                            <option value="2">Persona Jurídica</option>
                    </select>

                    RUC del Solicitante:
                    <br>
                    <input class="form-control" type="text" name="SOLIC_Ruc" id="SOLIC_Ruc" />

                    Direccion del Solicitante:
                    <br>
                    <input class="form-control" type="text" name="SOLIC_Direccion" id="SOLIC_Direccion" />

                    Telefono del Solicitante:
                    <input class="form-control" type="text" name="SOLIC_Telefono" id="SOLIC_Telefono" />

                    Email del Solicitante:
                    <input class="form-control" type="text" name="SOLIC_Email" id="SOLIC_Email" />

                    Nombre del Departamento:
                    <br>
                    <select class="form-control" name="depart_solic">
                        <option value="Lima">Lima</option>
                        <option value="Arequipa">Arequipa</option>
                    </select>
                    Nombre de la Provincia:
                    <br>
                    <select class="form-control" name="prov_solic">
                        <option value="Lima">Lima</option>
                        <option value="Arequipa">Arequipa</option>
                    </select>
                    Nombre del Distrito:
                    <br>
                    <select class="form-control" name="dist_solic">
                        <option value="Miraflores">Miraflores</option>
                        <option value="San Juan de Luriganch">San Juan de Lurigancho</option>
                    </select>
                </div>
                <br>
            </div>

            <div class="col-sm-6 border float-right" style="padding-bottom: 8px;padding-top: 8px;">
                <h4 style="text-align: center;color:black;">Representante de la Empresa Solicitante</h4>
                <div class="form-horizontal form-control" style="width:500px;height:705px;margin:0 auto">
                    Nombre del Contacto:
                    <br>
                    <input class="form-control" type="text" name="nombre_contacto" id="nombre_contacto">

                    Correo Electronico del Contacto:
                    <br>
                    <input class="form-control" type="text" name="correo_contacto" id="correo_contacto">

                    Celular del Contacto:
                    <br>
                    <input class="form-control" type="text" name="celular_contacto" id="celular_contacto">
                    <br>

                    <br>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div>
            <h4 style="text-align:center;color:black;">
            Ingresar los correos electrónicos a los que se les enviará la cotización en formato PDF
            </h4>
            <div class="row">

                <div class="col-sm-6" style="padding-bottom: 8px;padding-top:8px;">

                    <div class="form-horizontal form-control" style="height:150px;margin-left:10px;margin-right:0px;">
                        Correo #1:
                        <br>
                        <input class="form-control" type="text" name="COTIC_Correo1" id="COTIC_Correo1" />
                        Correo #2:
                        <br>
                        <input class="form-control" type="text" name="COTIC_Correo2" id="COTIC_Correo2" />
                    </div>
                </div>

                <div class="col-sm-6" style="padding-bottom: 8px;;padding-top:8px;">

                    <div class="form-horizontal form-control" style="height:150px;margin-left:0px;margin-right:0px">
                        Correo #3:
                        <br>
                        <input class="form-control" type="text" name="COTIC_Correo3" id="COTIC_Correo3" />
                        Correo #4:
                        <br>
                        <input class="form-control" type="text" name="COTIC_Correo4" id="COTIC_Correo4" />
                    </div>
                </div>

            </div>
        </div>

        <br>
            <button type="button" class="btn btn-info btn-lg float-left" data-toggle="modal" data-target="#"
                    id="boton_modal" style="margin-left:10px;border-radius:5px;">
                Vista Preliminar
            </button>

        <br>
        <br>
        <br>

    <center>
        <button type="submit" class="btn btn-outline-success btn-lg edward" data-toggle="modal" data-target="#" id="boton_modal"
                style="width:40%;font-size:45px;height:60px;text-transform: capitalize;">
            Solicitar Cotización
        </button>
    </center>
</form>

        <br>
        <br>
        <br>
        <br>

@endsection