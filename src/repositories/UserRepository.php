<?php


namespace App\Repositories;

use PDO;

class UserRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function create(array $data)
    {
        $sql = "INSERT INTO users (name, email, password, role_id) VALUES (:name, :email, :password, :role_id)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role_id' => $data['role_id']
        ]);

    }
    public function findByEmail(string $email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['email' => $email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
        return $user;
            
    }

    }

