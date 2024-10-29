
<?php

function connectarDB() {
    $server = "";
    $user = "";
    $password = "";
    $db = "";
    $port = ;

    // Conex a BD
    $connection = mysqli_connect( $server, $user, $password, $db, $port );
    
    // Comprobar err en la conex
    if(!$connection){
        die("Failed to connect: ".mysqli_connect_error());
    }
    
    // Conjunto de strings
    $connection->set_charset('utf8');

    return $connection;

}

$connection = connectarDB();

// Verification of DB connection
/*
if($connection){
    echo "Connection established";
}else {
    echo "Error connecting";
}
*/
?>