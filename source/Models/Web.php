<?php 

namespace Source\Models;

use PDO;

class Web {
    private $table_name = "web";
    private $conn;

    private  $name;
    private  $email;
    private  $password;

    public function __construct()
    {
        $this->conn = connect();    
    }

    public function setUser(string $name, string $email, string $password):void{
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function create(): void{
        $query = $this->conn->prepare("Insert into {$this->table_name} (name, email, passwd) VALUES (?, ?, ?) ");
        $query->bindParam(1, $this->name, PDO::PARAM_STR);
        $query->bindParam(2, $this->email, PDO::PARAM_STR);
        $query->bindParam(3, $this->password, PDO::PARAM_STR);

        $query->execute();
    }
}