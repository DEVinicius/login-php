<?php 

namespace Source\Models;

class Web extends Database{
    private string $table_name = "web";

    private string $name;
    private string $email;
    private string $password;

    public function create($data): void{

    }
}