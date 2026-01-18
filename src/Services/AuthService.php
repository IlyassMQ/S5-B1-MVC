<?php

namespace App\Services;

use App\Repositories\UserRepository;

class AuthService
{
    private UserRepository $userRepo;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function register(array $data): int
    {
        if (empty($data['email']) || empty($data['password'])) {
            throw new \Exception('Missing required fields');
        }
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        return $this->userRepo->create($data);
    }
    
    
    public function login(string $email, string $password)
    {
    $user = $this->userRepo->findByEmail($email);

    if (!$user) {
        return false;
    }
    if (!password_verify($password, $user['password'])) {
    return false;
    }

    return $user;
    }

}
