<?php
require_once __DIR__ . 'models/contact_model.php';

$delete = Contact::deleteContact($conn, '6');
echo $delete;