<?php
    include("../php/connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Registro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src = "https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.1/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.1/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempus-dominus/6.2.7/css/tempus-dominus.min.css">
    <link rel="stylesheet" href="../CSS/styles_form_register.css">
    <link rel="stylesheet" href="../CSS/style_types_buzon.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <!-- Agregar Popper.js antes de Tempus Dominus -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempus-dominus/6.2.7/js/tempus-dominus.min.js"></script>
    
</head>
<body>
    <form id="formRegistro" method="POST">
        
        <h1>Prueba</h1>

        <div class = "mb-2">
            <label for = "name_patient">Nombre(s):</label>
            <input type = "text" class = "form-control" name = "name_patient" id = "name_patient" placeholder = "ej: Juan Israel">
        </div>

        <div class = "mb-2">
            <label for = "lastName_patient">Apellido Paterno(s):</label>
            <input type = "text" class = "form-control" name = "lastName_patient" id = "lastName_patient" placeholder = "ej: López">
        </div>

        <div class = "mb-2">
            <label for = "mother_LastName_patient">Apellido Materno:</label>
            <input type = "text" class = "form-control" name = "mother_LastName_patient" id = "mother_LastName_patient" placeholder = "ej: Pérez">
        </div>

        <div class = "mb-2">
            <label for = "phoneNumber_patient">Número Telefónico:</label>
            <input type = "text" class = "form-control" name = "phoneNumber_patient" id = "phoneNumber_patient" placeholder = "ej: 5549890612">
        </div>



        <div class = "mb-2">
            <label for = "name_postalCode">Número postal:</label>
            <input type = "text" class = "form-control" name = "name_postalCode" id = "name_postalCode" placeholder = "ej: 56530">
        </div>

        <div class = "mb-2">
            <label for = "name_estado">Nombre del estado:</label>
            <input type = "text" class = "form-control" name = "name_estado" id = "name_estado" placeholder = "ej: EDOMEX">
        </div>

        <div class = "mb-2">
            <label for = "name_municipio">Nombre del municipio:</label>
            <input type = "text" class = "form-control" name = "name_municipio" id = "name_municipio" placeholder = "ej: Ixtapaluca">
        </div>

        <div class = "mb-2">
            <label for = "name_colonia">Nombre de la colonia:</label>
            <input type = "text" class = "form-control" name = "name_colonia" id = "name_colonia" placeholder = "ej: San Francisco">
        </div>


        <div class = "mb-2">
            <label for = "name_street">Nombre de la calle:</label>
            <input type = "text" class = "form-control" name = "name_street" id = "name_street" placeholder = "ej: General Rocha">
        </div>

        <div class = "mb-2">
            <label for = "number_int">Número interior:</label>
            <input type = "text" class = "form-control" name = "number_int" id = "number_int">
        </div>
            
        <div class = "mb-2">
            <label for = "number_ext">Número exterior:</label>
            <input type = "text" class = "form-control" name = "number_ext" id = "number_ext">
        </div>

        <div class = "mb-2">
            <label for = "email_address_patient">Correo Electrónico:</label>
            <input type = "text" class = "form-control" name = "email_address_patient" id = "email_address_patient" placeholder = "ej: juanlopez40@gmail.com">
        </div>

        <nav class = "navbar navbar-custom2" style = "background-color: #9d2449;">
            <div class = "container-fluid justify-content-center"></div>
        </nav>

        <center><h7>La información solicitada es para hacerle llegar la notificación con la resolución de su solicitud.</h7> </center>

        <h5>Servicios:</h5>

        <select class = "form-select" name = "services" id = "services">
            <option value = "" disabled selected>Seleccione un servicio...</option>
            <option value = "hospitalizacion">Hospitalización</option>
            <option value = "cirugia">Cirugía</option>
            <option value = "consulta_externa">Consulta Externa</option>
            <option value = "admision_continua">Admisión Continua</option>
            <option value = "servicios_auxiliares_de-diagnostico">Servicios Auxiliares de Diagnóstico</option>
            <option value = "atencion_al_usuario">Atención al Usuario</option>
            <option value = "laboratorio">Laboratorio</option>
            <option value = "trapias">Trapias</option>
            <option value = "transfusion">Transfusión</option>
            <option value = "camilleros">Camilleros</option>
            <option value = "limpieza">Limpieza</option>
            <option value = "recepcion">Recepción</option>
            <option value = "vigilancia">Vigilancia</option>
            <option value = "caja">Caja</option>
            <option disabled>──────────────────────</option>
            <option value = "otro">Otro (especifique cuál)</option>
        </select>

        <div class="mb-0 mt-2" id="otherServiceOption" style="display: none;">
            <label for="other_service">Otro servicio:</label>
            <input type="text" class="form-control" name="other_service" id="otherService">
        </div>

        <script>
            document.getElementById( 'services' ).addEventListener( 'change', function(){
                const selectOption = this.value;
                const otherServiceOption = document.getElementById( 'otherServiceOption' );
                if( selectOption === 'otro' ){
                    otherServiceOption.style.display = 'block';
                }else{
                    otherServiceOption.style.display = 'none';
                };
            });
        </script>
         
        <div class="mb-3 mt-2">
            <label for="comments">Contenido:</label>
            <textarea id="comments" name="comments" rows="5" cols="60" class="form-control"></textarea>
        </div>

        <h5>Personal Involucrado:</h5>
        
        <select class = "form-select" name = "type_staff" id = "type_staff">
            <option value="" disabled selected>Seleccione el personal que le atendió...</option>
            <option value = "medico">Médico</option>
            <option value = "enfermeria">Enfermería</option>
            <option value = "trabajo_social">Trabajo Social</option>
            <option value = "nutriologo">Nutriológo</option>
            <option value = "psicologo">Psicológo</option>
            <option value = "radiologo">Radiológo</option>
            <option value = "laboratorista">Laboratorista</option>
            <option value = "recepcionista">Recepcionista</option>
            <option value = "cajero">Cajero</option>
            <option value = "limpieza">Limpieza</option>
            <option value = "vigilancia">Vigilancia</option>
            <option disabled>──────────────────────</option>
            <option value = "otro">Otro (especifique cuál)</option>
        </select>

        <div id="container_other_staff" style="display: none;">
            <label for="other_staff">Otro Personal:</label>
            <input type="text" class="form-control" name="other_staff" id="option_other_staff">
        </div>

        <div class="col-12 col-md-6 mb-2 mt-2">
            <label for="other">Específique el nombre del personal:</label>
            <input type="text" class="form-control" name="name_staff" id="name_staff">
        </div>

        <div class="col-12 col-md-6 mb-2 mt-2">
            <label for="other">Ingresa la fecha en la que sucedió: </label>
        </div>

        <!-- DatetimePicker con Tempus Dominus-->
        <div class="form-group"> 
            <div class="input-group" style="width: auto; position: relative;" id="datetimepicker">
                <!-- Ajustar campo de texto, ancho y alto -->
                <center><input type="text" class="form-control" style="width: 300px; height: 45px;" id="datetimepicker-input" name="date_event"/></center>
                <!-- Ajustar tamaño de ícono -->
                <button class="btn btn-outline-secondary" type="button" style="height: 45px; display: flex; align-items: center;" data-bs-target="#datetimepicker" data-bs-toggle="datetimepicker">
                    <i class="fa-solid fa-calendar fa-2x"></i> 
                </button>
            </div>
        </div>

        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function () {
                const picker = new tempusDominus.TempusDominus(document.getElementById('datetimepicker'), {
                    display: {
                        components: {
                            calendar: true,
                            date: true,
                            month: true,
                            year: true,
                            //decades: true
                        }
                    }
                });

                //Evento change disparado cuando se seleccionar la fecha y hide para ocultar calendario
                picker.subscribe(tempusDominus.Namespace.events.change, function ( event ){
                picker.hide();
                });
            });
        </script>

        <script type="text/javascript">
            $( document ).ready( function(){
                $( '#formRegistro' ).on('submit', function( event ){
                    event.preventDefault();

                    const getDateHour = $('#datetimepicker-input').val();
                    if (!getDateHour || !getDateHour.includes(',')) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Fecha inválida',
                            text: 'Por favor, selecciona una fecha y hora válida.',
                        });
                        return;
                    }

                    //console.log( 'Fecha en cómo se está enviando antes:', getDateHour );

                    //Conversión de fecha en formato compatible
                    const parts = getDateHour.split( ', ' );  // Divide por la coma
                    const date = parts[ 0 ].split( '/' );     // Divide la fecha por '/'
                    let hour = parts[ 1 ].trim();             // Obtiene la hora y elimina espacios

                    //Conversión para formato de 24 horas
                    const isPM = hour.includes( 'p.m.' );
                    hour = hour.replace( /(a\.m\.|p\.m\.)/i, '' ).trim();  // Elimina 'a.m.' o 'p.m.'
                        
                    let [ hours, minutes ] = hour.split( ':' );  // Divide la cadena en dos partes: hora y minutos. La división se realiza en el carácter :.

                    if( isPM && hours !== '12' ){
                        hours = parseInt( hours, 10 ) + 12;
                    } else if( !isPM && hours === '12' ){
                            hours = '00';   // Guardado en caso de ser las 12 a.m.
                    }
                    

                    const convertedTime = `${hours}:${minutes}:00`;             // Formato HH:MM:SS
                    const convertedDate = `${date[2]}-${date[1]}-${date[0]}`    // Formatear la fecha a formato: YYYY-MM-DD
                    const dateTime = `${convertedDate} ${convertedTime}`
                    
                    
                    const data = {
                        name_patient:     $( '#name_patient' ).val(),
                        lastName_patient: $( '#lastName_patient' ).val(),
                        mother_LastName_patient: $( '#mother_LastName_patient' ).val(),
                        phoneNumber_patient:     $( '#phoneNumber_patient' ).val(),
                        name_postalCode:         $( '#name_postalCode').val(),
                        name_estado:             $( '#name_estado' ).val(),
                        name_municipio:          $( '#name_municipio' ).val(),
                        name_colonia: $( '#name_colonia' ).val(),
                        name_street:      $( '#name_street' ).val(),
                        number_int:       $( '#number_int' ).val(),
                        number_ext:       $( '#number_ext' ).val(),
                        email_address_patient:   $( '#email_address_patient' ).val(),
                        services:         $( '#services' ).val(),
                        other_service:    $( '#otherService' ).val(),
                        comments:         $( '#comments' ).val(),
                        type_staff:       $( '#type_staff' ).val(),
                        name_staff:       $( '#name_staff' ).val(),
                        other_staff:      $( '#option_other_staff' ).val(),
                        date_event:       dateTime
                    };
                

                    if( !data.date_event ){
                        Swal.fire({
                            icon:  'warning',
                            title: 'Faltan campos por llenar',
                            text:  'Por favor, llene todos los campos',
                        });
                    return;
                    };

                    $.ajax({
                        url: '../php/register.php',
                        type: 'POST',
                        data: data,
                        dataType: 'json',
                        success: function( response ){
                            if( response.status === 'success' ){
                                Swal.fire({
                                    icon:  'success',
                                    title: response.message,
                                }).then( () => {
                                    $( '#formRegistro' )[0].reset();
                                });
                            } else {
                                Swal.fire({
                                    icon:  'warning',
                                    title: 'Advertencia',
                                    text:  response.message,
                                });
                            }
                        },

                        error: function(){
                            Swal.fire({
                                icon:  'error',
                                title: 'Error en el servidor',
                                text:  'Por favor, intentelo después.'
                            });
                        }
                    });
                });
            });
        </script>

        <script type="text/javascript">
            $( document ).ready( function() {
                $( '#formRegistro' ).on( 'submit', function( event ) {
                    event.preventDefault();

                    
                    //console.log(data.type_staff);  
                    //console.log(data.other_staff);
                    
                    const data = {
                        name_patient:     $( '#name_patient' ).val(),
                        lastName_patient: $( '#lastName_patient' ).val(),
                        mother_LastName_patient: $( '#mother_LastName_patient' ).val(),
                        phoneNumber_patient:     $( '#phoneNumber_patient' ).val(),
                        name_postalCode:         $( '#name_postalCode').val(),
                        name_estado:             $( '#name_estado' ).val(),
                        name_municipio:          $( '#name_municipio' ).val(),
                        name_colonia: $( '#name_colonia' ).val(),
                        name_street:      $( '#name_street' ).val(),
                        number_int:       $( '#number_int' ).val(),
                        number_ext:       $( '#number_ext' ).val(),
                        email_address_patient:   $( '#email_address_patient' ).val(),
                        services:         $( '#services' ).val(),
                        other_service:    $( '#otherService' ).val(),
                        comments:         $( '#comments' ).val(),
                        type_staff:       $( '#type_staff' ).val(),
                        name_staff:       $( '#name_staff' ).val(),
                        other_staff:      $( '#option_other_staff' ).val(),
                        date_event:       $( '#datetimepicker-input' ).val()
                    };


                    if (!data.name_patient 
                        || !data.lastName_patient
                        || !data.mother_LastName_patient 
                        || !data.phoneNumber_patient
                        || !data.name_postalCode
                        || !data.name_estado
                        || !data.name_municipio
                        || !data.name_colonia
                        || !data.name_street
                        || !data.number_int
                        || !data.number_ext
                        || !data.email_address_patient 
                        || !data.services
                        || !data.comments
                        || !data.type_staff
                        || !data.name_staff
                        || !data.date_event){
                            Swal.fire({
                                icon:  'warning',
                                title: 'Faltan campos por completar',
                                text:  'Por favor, llene todos los campos.',
                            });
                            return;
                        }

                        if ( data.services === 'otro' && !data.other_service ){
                            Swal.fire({
                                icon:  'warning',
                                title: 'Falta de especificación',
                                text:  'Por favor, especifique a qué tipo servicio se refiere',
                            });
                        return;
                        }

                        if ( data.type_staff === 'otro' && !data.other_staff ){
                            Swal.fire({
                                icon:  'warning',
                                title: 'Falta de especificación',
                                text:  'Por favor, especifique el tipo de personal',
                            });
                        return;
                        }

                        $.ajax({
                            url: '../php/register.php',
                            type: 'POST',
                            data: data,
                            dataType: 'json',
                            success: function( res ){
                                if ( res.status === 'success' ){
                                    Swal.fire({
                                        icon: 'success',
                                        title: res.message,
                                    }).then(() => {
                                        // Limpiar form después de alerta
                                        $(  '#formRegistro' )[0].reset();
                                    });
                                } else {
                                    Swal.fire({
                                        icon:  'warning',
                                        title: 'Advertencia',
                                        text: res.message,
                                    });
                                }
                            },
                            error: function(){
                                Swal.fire({
                                    icon:  'error',
                                    title: 'Error en el servidor',
                                    text:  'Por favor, intenta más tarde.',
                                });
                            }
                        });
                    });

                    // Mostrar/ocultar otro personal
                    document.getElementById( 'type_staff' ).addEventListener( 'change', function(){
                        const selectOption = this.value;
                        const otherStaffContainer = document.getElementById( 'container_other_staff' );
                        if ( selectOption === 'otro' ) {
                            otherStaffContainer.style.display = 'block';
                        } else {
                            otherStaffContainer.style.display = 'none';
                        }
                    });
                });
            </script>

        <div class="mb-0 mt-4"> 
            <center><button type="submit" id="sendButton" name="sendButton" class="btn btn-outline-primary">Enviar</button></center>
        </div>

    </form>

</body>
</html>