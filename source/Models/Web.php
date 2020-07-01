<?php 

namespace Source\Models;

class Web {
    private string $table_name = "web";

    private string $name;
    private string $email;
    private string $password;

    private $conn = CONN;

    public function setUser(string $name, string $email, string $password):void{
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    
    public function create(): void{
        $query = $this->conn->prepare("Insert into {$this->table_name} (name, email, passwd) VALUES ({$this->name}, {$this->email}, {$this->password}) ");
    }
}