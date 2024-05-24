<?php
require_once __DIR__ . 'models/contact_model.php';

$update = Contact::updateContact($conn, 'Jihan', '088965437265', '6', '6');
echo $update;