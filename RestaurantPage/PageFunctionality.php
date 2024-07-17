<?php
require_once 'LoginInterface.php';
require_once 'PageFunctionality.php';
require_once '../ZooPage/Databases.php';
require_once 'User.php';
require_once 'Food.php';

global $pdo;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

abstract class PageFunctionality implements LoginInterface {

    static function login(): string {
        global $pdo;
        $loginEmail = $_POST["loginEmail"];
        $loginPassword = $_POST["loginPassword"];

        $user = $pdo->query("SELECT * FROM users WHERE user_email = '$loginEmail'")->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($loginPassword, $user['user_password'])) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_first_name'] = $user['user_first_name'];
            $_SESSION['user_last_name'] = $user['user_last_name'];
            $_SESSION['user_email'] = $user['user_email'];

            if (isset($_SESSION['zookeeper_id'])) unset($_SESSION['zookeeper_id']);

            return "Logged in successfully as " . $user['user_first_name'] . " " . $user['user_last_name'];
        } else {
            return "Invalid Email or Password";
        }
    }



    static function register(): void {
        global $pdo;
        $firstName = $_POST["registerFirstName"];
        $lastName = $_POST["registerLastName"];
        $email = $_POST["registerEmail"];
        $username = $_POST["registerUsername"];
        $password = password_hash($_POST["registerPassword"], PASSWORD_DEFAULT);

        $checkEmail = $pdo->query("SELECT * FROM users WHERE user_email = '$email'")->fetch(PDO::FETCH_ASSOC);
        if ($checkEmail) {
            $_SESSION['notification'] = "Email already registered";
        } else {
            $sql = "INSERT INTO users (user_first_name, user_last_name, user_email, user_password, user_username) VALUES ('$firstName', '$lastName', '$email', '$password', '$username')";
            $pdo->exec($sql);
            $_SESSION['notification'] = "Registered successfully";
        }
    }

    static function logout(): void {
        if (isset($_POST['logoutButton'])) {
            session_unset();
            session_destroy();
        }
    }
}