<?php

function loginUser($email, $password)
{
    $config = require basePath('config/db.php');
    $db = new Database($config);

    $sth = $db->conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
    $sth->execute(['email' => $email]);
    $user = $sth->fetch();

    if (!$user || !password_verify($password, $user->password)) {
        return false;
    }

    session_regenerate_id(true);
    $_SESSION['user_id'] = $user->id;
    return true;
}

function registerUser($name, $email, $password)
{
    $config = require basePath('config/db.php');
    $db = new Database($config);

    $sth = $db->conn->prepare("SELECT id FROM users WHERE email = :email LIMIT 1");
    $sth->execute(['email' => $email]);

    if ($sth->fetch()) {
        throw new Exception("Email is already registered.");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        $insert = $db->conn->prepare(
            "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)"
        );
        $insert->execute([
            'name' => $name,
            'email' => $email,
            'password' => $hashedPassword,
        ]);
    } catch (PDOException $e) {
        if (stripos($e->getMessage(), "Unknown column 'name' in 'field list'") !== false) {
            $insert = $db->conn->prepare(
                "INSERT INTO users (email, password) VALUES (:email, :password)"
            );
            $insert->execute([
                'email' => $email,
                'password' => $hashedPassword,
            ]);
        } else {
            throw $e;
        }
    }

    return (int) $db->conn->lastInsertId();
}
