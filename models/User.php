<?php
require_once("Database.php");

class User {
    public static function all(){
        Database::connect();

        $sql = "SELECT * FROM users";
        $hasil = Database::query($sql)->fetch_all(MYSQLI_ASSOC);
        return $hasil;
    }

    public static function find($id){
        Database::connect();

        $sql = "SELECT * FROM users WHERE id = '$id'";

        return Database::query($sql)->fetch_assoc();
    }

    public static function create($data){
        $kode = $data['kode'] ?? NULL;
        $nis = $data['nis'] ?? NULL;
        $fullname = $data['fullname'];
        $username = $data['username'];
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $kelas = $data['kelas'] ?? NULL;
        $alamat = $data['alamat'] ?? NULL;
        $role = $data['role'];
        $foto = $data['foto'] ?? NULL;
        $created_at = date('Y-m-d H:i:s');
        $join_date = date('Y-m-d');

        $sql = "INSERT INTO users (kode,nis,fullname,username,password,kelas,alamat,role,foto,created_at, join_date) VALUES ('$kode','$nis','$fullname','$username','$password','$kelas','$alamat','$role','$foto','2022-02-12 10:00:00','2022-01-01')";

        Database::connect();
        if (Database::query($sql) == true){
            return "Berhasil";
        }
        return Database::error();

    // if($result = Database::query($sql);
    }

    public static function update($id, $data){

    }

    public static function delete($id){
        Database::connect();

        $sql = "DELETE FROM users WHERE id = '$id'";

        return Database::query($sql);
    }

}

?>

<!-- kenapa construct ga dipanggil di static, karena construct meninstasiasikan object, kalau statis engga  -->