<?php

# GET
route('login', 'get', 'AuthController::login');
route('register', 'get', 'AuthController::register');
route('dashboard', 'get', 'DashboardController::index');
route('logout', 'get', 'AuthController::logout');


# POST
route('login', 'post', 'AuthController::addLogin');
route('register', 'post', 'AuthController::addRegister');
route('dashboard/addModal', 'post', 'ContactController::createContact');
route('dashboard/editModal', 'post', 'ContactController::updateContact');
route('dashboard/deleteModal', 'post', 'ContactController::deleteContact');

route('/', 'get', function () {
    header('Location: login');
});
