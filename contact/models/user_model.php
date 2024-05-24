<?php
include_once __DIR__ . '/../config/koneksi.php';

class User
{
    static function login($data = [])
    {
        global $conn;
    
        $username = $data['Username'];
        $password = $data['Password'];
    
        $result = $conn->query("SELECT * FROM users WHERE Username = '$username'");
        if ($result = $result->fetch_assoc()) {
            $hashedPassword = $result['Password'];
            $verify = password_verify($password, $hashedPassword);
            if ($verify) {
                return $result;
            } else {
                return false;
            }
        }
    }
    
    static function register($data = [])
    {
        global $conn;

        $username = $data['Username'];
        $password = $data['Password'];
        $nama = $data['Nama'];
        $email = $data['Email'];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users SET Nama = ?, Username = ?, Password = ?, Email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssss', $nama, $username, $hashedPassword, $email);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

    static function getPassword($username)
    {
        global $conn;
        $sql = "SELECT Password FROM users WHERE Username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
}