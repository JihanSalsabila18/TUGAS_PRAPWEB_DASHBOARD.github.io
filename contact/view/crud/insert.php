<?php
require_once __DIR__ . 'models/contact_model.php';

$insert = Contact::createContact($conn, 'Jihan', '088965437265', '6');
echo $insert;