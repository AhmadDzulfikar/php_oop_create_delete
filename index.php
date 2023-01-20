<?php
include("helper.php");
require_once("models/User.php");

Database::connect();

//all
// dd(User::all());


// Create
User::create([
"kode" => "A10",
"fullname" => "BOBOHO",
"username" => "BOBOHO",
"password" => "password",
"role" => "user",
]);
?>

<!-- fetch_all (MYSQLI ASSOC)
untuk ambil data massive

fetch assoc()
Untuk mengambil spesifik satu data-->