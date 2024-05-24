<?php
include_once __DIR__ . '/../config/koneksi.php';

class Contact
{
    static function getAllContacts($UserID)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM contact WHERE user_id = ?");
        $stmt->bind_param("i", $UserID);
        $stmt->execute();
        $result = $stmt->get_result();
        $contacts = array();
        while ($row = $result->fetch_assoc()) {
            $contacts[] = $row;
        }
        $conn->close();
        return $contacts;
    }

    static function createContact($data=[])
    {
        $owner = $data['Owner'];
        $NoHP = $data['No_HP'];
        $UserID = $data['UserID'];
        global $conn;
        $stmt = $conn->prepare("INSERT INTO contact (Owner, No_HP, UserID) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $owner, $NoHP, $UserID);
        $stmt->execute();
        return $conn->insert_id;
    }

    static function getContactById($id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM contact WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    static function updateContact($data=[])
    {
        global $conn;
        $owner = $data['Owner'];
        $NoHP = $data['No_HP'];
        $UserID = $data['UserID'];
        $NoID = $data['No_ID'];
        $stmt = $conn->prepare("UPDATE contact SET Owner = ?, No_HP = ?, UserID = ? WHERE No_ID = ?");
        $stmt->bind_param("ssii", $owner, $NoHP, $UserID, $NoID);
        $stmt->execute();
        return $stmt->affected_rows;
    }

    static function deleteContact($id)
    {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM contact WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->affected_rows;
    }
}

// $contactModel = new Contact($conn);
