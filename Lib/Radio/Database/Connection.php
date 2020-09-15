<?php

namespace Radio\Database;

abstract class Connection {
    private static $conn;

    public static function getConn() {
        
        $host = 'mysql669.umbler.com';
        $port = 41890;
        $dbname = 'radiocampus';
        $username = 'radioadmin';
        $pass = '3llcb233';

        if ( !self::$conn ) {
            self::$conn = new \PDO( "mysql:host=$host:$port;dbname=$dbname", "$username",  "$pass" );

        }

        return self::$conn;
    }
}