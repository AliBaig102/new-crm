<?php
require_once "Utils.php";

class Auth
{
    use Utils;

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Register a new user with a role (admin/booker)
     */
    public function register($name, $email, $phone, $area, $password, $role = 'booker'): array
    {

        if ($this->userExists($email)) {
            return $this->response("error", "Email already in use!");
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        try {
            $stmt = $this->pdo->prepare("INSERT INTO users (name, email,phone,area, password, role) VALUES (:name, :email, :phone,:area, :password, :role)");
            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':phone' => $phone,
                ':area' => $area,
                ':password' => $hashedPassword,
                ':role' => $role
            ]);
            return $this->response("success", "Registration successful!");
        } catch (PDOException $e) {
            return $this->response("error", "Registration failed!", $e->getMessage());
        }
    }

    /**
     * Log in a user and set session
     */
    public function login($email, $password): array
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->execute([':email' => $email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                unset($user['password']);
                session_start();
                $_SESSION['auth'] = $user;

                return $this->response("success", "Login successful!", $user);
            } else {
                return $this->response("error", "Invalid email or password!");


            }
        } catch (PDOException $e) {
            return $this->response("error", "Login failed!", $e->getMessage());
        }
    }

    /**
     * Log out the user
     */
    public function logout(): array
    {
        session_start();
        session_destroy();
        return $this->response("success", "Logged out successfully!");
    }

    /**
     * Check if a user is logged in
     */
    public function isLoggedIn(): bool
    {
        session_start();
        return isset($_SESSION['auth']);
    }

    /**
     * Get logged-in user details
     */
    public function getUser(): array
    {
        session_start();
        if ($this->isLoggedIn()) {
            return $this->response("success", "User data retrieved successfully!", $_SESSION['auth']);
        }
        return $this->response("error", "No user logged in!");
    }

    /**
     * Check if a user has a specific role (admin, booker, etc.)
     */
    public function hasRole($role): bool
    {
        session_start();
        if ($this->isLoggedIn() && $_SESSION['role'] === $role) {
            return true;
        }
        return false;
    }

    /**
     * Check if a user exists by email
     */
    private function userExists($email): bool
    {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);
        return $stmt->fetchColumn() > 0;
    }

    public function resetPassword($email, $password): array
    {
        try {
            if (!$this->userExists($email)) {
                return $this->response("error", "Email not found!");
            }

            // Hash the new password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $this->pdo->prepare("UPDATE users SET password = :password WHERE email = :email");
            $stmt->execute([
                ':password' => $hashedPassword,
                ':email' => $email
            ]);

            return $this->response("success", "Password reset successfully!");
        } catch (PDOException $e) {
            return $this->response("error", "Password reset failed!", $e->getMessage());
        }
    }

    public function getAllBookers(): array
    {
        try {
            $stmt = $this->pdo->prepare("SELECT id, name, email, phone, area, role, created_at from users where role = 'booker'");
            $stmt->execute();
            $bookers = $stmt->fetchAll();
            if (count($bookers) > 0) {
                return $this->response("success", "Bookers retrieved successfully!", $bookers);
            } else {
                return $this->response("error", "No bookers available!");
            }

        } catch (PDOException $e) {
            return $this->response("error", "Bookers not found!", $e->getMessage());
        }
    }

    public function deleteBooker($id): array
    {
        try {
            $stmt = $this->pdo->prepare("delete from users where id = :id");
            $stmt->execute(['id' => $id]);
            return $this->response("success", "Booker deleted successfully!");
        } catch (PDOException $e) {
            return $this->response("error", "Booker delete failed!", $e->getMessage());
        }
    }
}