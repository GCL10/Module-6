<?php
// 1. Create a database connection

   $databaseConnection = mysqli_connect("localhost", "root", "root", "testDatabase");      
   if ( mysqli_connect_errno() ) {         
    exit( "Database connection failed" );     }      
    echo ( "Connection to the database was successful" );
    // 2. Perform a database query

    // 3. Use the return data from the database

    // 4. Release the returned data

    // 5. Close the database connection
    if ( $databaseConnection ) {
        mysqli_close( $databaseConnection );
        echo( "Connection closed" );
    }
?>