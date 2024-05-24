<?php
include_once 'function/main.php';
include_once 'models/contact_model.php';

class Dashboard_Controller {
    static function index() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            view('dashboard', ['contact' => Contact::getAllContacts($_SESSION['user']['id'])]);
        }
    }
}