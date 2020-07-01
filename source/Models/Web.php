<?php 

namespace Source\Models;

class Web {
    private string $table_name = "web";
    private $conn;

    private string $name;
    private string $email;
    private string $password;

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
        $query = $this->conn->prepare("Insert into {$this->table_name} (name, email, passwd) VALUES ({$this->name}, {$this->email}, {$this->password}) ");
    }
}