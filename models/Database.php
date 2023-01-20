<?php

class Database{
    private static $hostname = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $database = "lsp_perpus";

    private static $conn;

    //:: di laravel namanya static
    public static function connect(){
        self::$conn = mysqli_connect(self::$hostname, self::$username, self::$password, self::$database );

        if(mysqli_connect_error()){
            return mysqli_connect_error();
        }
        return self::$conn;
    }

    public static function query($sql){
        return self::$conn->query($sql);
    }

    public static function close(){
        self::$conn->close();
    }

    public static function error(){
        return self::$conn->error;
    }
}
?>