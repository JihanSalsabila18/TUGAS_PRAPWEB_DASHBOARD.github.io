<?php
include_once 'models/contact_model.php';

class ContactController
{
    static function createContact()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::createContact([
                'Owner' => $post['owner'],
                'No_HP' => $post['NoHP'],
                'user_id' => $_SESSION['user']['id']
            ]);

            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                echo ('Terjadi kesalahan');
            }
        }
    }

    static function updateContact()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::updateContact([
                'No_ID' => $post['NoID'],
                'Owner' => $post['owner'],
                'No_HP' => $post['NoHP'],
                'UserID' => $_SESSION['user']['id'],
            ]);
            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                echo ('Terjadi kesalahan');
            }
        }
    }

    static function deleteContact()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::deleteContact($_POST['contactId']);
            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                echo ('Terjadi kesalahan');
            }
        }
    }
}
