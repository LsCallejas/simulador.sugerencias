<?php
ini_set('session.use_strict_mode', 1);

session_start();
if (isset($_SESSION['session_id'])) { 
    //existe
} else {
    $newSessionsId = session_create_id();
    $_SESSION['session_id'] = $newSessionsId;
}

require 'vendor/autoload.php';
require 'src/app.php';
