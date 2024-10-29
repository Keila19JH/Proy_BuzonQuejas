
<?php
require_once( './connection.php' );

function validateData( $dataField ){
    foreach ( $dataField as $field ){
        if ( empty( $field ) ){
            return false;
        }
    }
    return true;
};

if (isset( $_POST[ 'name_patient' ] ) &&
    isset( $_POST[ 'lastName_patient' ] ) &&
    isset( $_POST[ 'mother_LastName_patient' ] ) &&
    isset( $_POST[ 'phoneNumber_patient' ] ) &&
    isset( $_POST[ 'name_street' ] ) &&
    isset( $_POST[ 'number_int' ] ) &&
    isset( $_POST[ 'number_ext' ] ) &&
    isset( $_POST[ 'email_address_patient' ] ) &&
    isset( $_POST[ 'services' ] ) &&
    isset( $_POST[ 'type_staff' ] ) &&
    isset( $_POST[ 'name_staff' ] ) &&
    isset( $_POST[ 'date_event' ] ) &&
    ( ( $_POST[ 'type_staff' ] !== 'otro' ) || isset( $_POST[ 'other_staff' ] ) )
   ){

    $is_required_otherService = $_POST[ 'services' ] === 'otro' ? true : false;

    $dataField = [
        $_POST[ 'name_patient' ],
        $_POST[ 'lastName_patient' ],
        $_POST[ 'mother_LastName_patient' ],
        $_POST[ 'phoneNumber_patient' ],
        $_POST[ 'name_street' ],
        $_POST[ 'number_int' ],
        $_POST[ 'number_ext' ],
        $_POST[ 'email_address_patient' ],
        $_POST[ 'services' ],
        $_POST[ 'comments' ],
        $_POST[ 'type_staff' ],
        $_POST[ 'name_staff' ],
        $_POST[ 'date_event' ]
    ];

    if ( $is_required_otherService ){
        $dataField[] = $_POST[ 'other_service' ];
    }

    if ($_POST[ 'type_staff' ] === 'otro'){
        $dataField[] = $_POST[ 'other_staff' ];
    }

    if ( validateData( $dataField ) ){

        $name_patient            = mysqli_real_escape_string( $connection, trim( $_POST[ 'name_patient' ] ) );
        $lastName_patient        = mysqli_real_escape_string( $connection, trim( $_POST[ 'lastName_patient' ] ) );
        $mother_LastName_patient = mysqli_real_escape_string( $connection, trim( $_POST[ 'mother_LastName_patient' ] ) );
        $phoneNumber_patient     = mysqli_real_escape_string( $connection, trim( $_POST[ 'phoneNumber_patient' ] ) );
        $name_street             = mysqli_real_escape_string( $connection, trim( $_POST[ 'name_street' ] ) );
        $number_int              = mysqli_real_escape_string( $connection, trim( $_POST[ 'number_int' ] ) );
        $number_ext              = mysqli_real_escape_string( $connection, trim( $_POST[ 'number_ext' ] ) );
        $email_address_patient   = mysqli_real_escape_string( $connection, trim( $_POST[ 'email_address_patient' ] ) );
        $services                = mysqli_real_escape_string( $connection, trim( $_POST[ 'services' ] ) );
        $other_service           = isset( $_POST[ 'other_service' ] ) ? mysqli_real_escape_string( $connection, trim( $_POST[ 'other_service'] ) ) : null;
        $comments                = mysqli_real_escape_string( $connection, trim( $_POST[ 'comments' ] ) );
        $type_staff              = mysqli_real_escape_string( $connection, trim( $_POST[ 'type_staff' ] ) );
        $name_staff              = mysqli_real_escape_string( $connection, trim( $_POST[ 'name_staff' ] ) );
        $other_staff             = isset( $_POST[ 'other_staff' ] ) ? mysqli_real_escape_string( $connection, trim( $_POST[ 'other_staff' ] ) ) : null;
        $date_event = mysqli_real_escape_string( $connection, $_POST['date_event'] );

        $dateTime = DateTime::createFromFormat( 'Y-m-d H:i:s', $date_event);
        if( !$dateTime || $dateTime->format( 'Y-m-d H:i:s' ) !== $date_event ){
            echo json_encode( [ "status" => "error", "message" => "El formato de la fecha es inválido." ] );
            exit;
        }

        mysqli_begin_transaction( $connection );

        try {
            $query_address = "INSERT INTO addresses (name_street, number_int, number_ext) 
                              VALUES ('$name_street', '$number_int', '$number_ext')";
                              
            if ( !mysqli_query( $connection, $query_address ) ) {
                throw new Exception( "Error en la consulta de address: " . mysqli_error( $connection ) );
            }
            $id_address = mysqli_insert_id( $connection );

           
            $query_service = "INSERT INTO services (name_type_service, other_service, description) 
                              VALUES ('$services', " . ( $other_service ? "'$other_service'" : "NULL" ) . ", '$comments')";

            if ( !mysqli_query( $connection, $query_service ) ) {
                throw new Exception( "Error en la consulta de services: " . mysqli_error( $connection ) );
            }
            $id_service = mysqli_insert_id( $connection );

           
            $query_staff = "INSERT INTO staff (name_type_staff, name_staff, other_staff) 
                            VALUES ('$type_staff', '$name_staff', " . ($other_staff ? "'$other_staff'" : "NULL") . ")";

            if ( !mysqli_query( $connection, $query_staff ) ) {
                throw new Exception( "Error en la consulta de staff: " . mysqli_error( $connection ) );
            }
            $id_staff = mysqli_insert_id( $connection );

           
            $query_complaint = "INSERT INTO complaints (name_patient, lastName_patient, motherLastName_patient, phoneNumber_patient, email_address_patient, date_event, id_address, id_service, id_staff) 
                                VALUES ('$name_patient', '$lastName_patient', '$mother_LastName_patient', '$phoneNumber_patient', '$email_address_patient', '$date_event', $id_address, $id_service, $id_staff)";

            if ( !mysqli_query( $connection, $query_complaint ) ) {
                throw new Exception("Error en la consulta de complaints: " . mysqli_error( $connection ) );
            }

            // Confirmar la transacción
            mysqli_commit( $connection );
            echo json_encode( [ "status" => "success", "message" => "¡Su comentario ha sido recibido!" ] );

        } catch ( Exception $error ) {
            // Revertir transacción si hay error
            mysqli_rollback( $connection );
            echo json_encode( [ "status" => "error", "message" => $error->getMessage() ] );
        }

    } else {
        echo json_encode( [ "status" => "error", "message" => "Todos los campos son obligatorios" ] );
    }

} else {
    echo json_encode( [ "status" => "error", "message" => "Algún campo está vacío" ] );
}

?>